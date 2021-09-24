<?php
    include('/var/www/html/track/server/s_insert.php');
    include('/var/www/html/track/server/eventos2.php');
    $data = json_decode(file_get_contents("php://input"), true);
    $loc = $data;

    /*$result4 = '';
    $q = 'SELECT overpass FROM gs_objects WHERE imei = '.$loc['imei'];
    $r = mysqli_query($ms, $q) or print_r(mysqli_error($ms));

        $row = mysqli_fetch_array($r);
            if ($row[0] == 1) {
                $url = 'http://10.128.0.16/api/interpreter?data=[out:json];way(around:100.0,'.$loc['lat'].','.$loc['lng'].');out;';
                $jsondata = json_decode(file_get_contents($url), true);
                for ($i = 0; $i < 16; $i++) {
                    if (isset($jsondata['elements'][$i]['tags']['maxspeed'])) {
                        $result4 = $jsondata['elements'][$i]['tags']['maxspeed'];
                        break;
                    }
                }
            }


        $result2 = json_encode($result4);
        $result2 = str_replace('"', '', $result2);*/

        if ($loc['speed'] > 145) {
            mysqli_close($ms);
            die;
        }

        if ($loc['lat'] > 0 || $loc['lng'] > 0) {
            mysqli_close($ms);
            die;
        }

        if ($result2 != '') {
            $loc['overpass'] = $result2;
        } else {
            $loc['overpass'] = 0;
        }

        $loc['dt_server'] = gmdate("Y-m-d H:i:s");
        if (!isset($loc['dt_tracker'])) {
            mysqli_close($ms);
            die;
        }
        $dt_server = strtotime($loc['dt_server']);
        $dt_tracker = strtotime($loc['dt_tracker']);
        $dt_diferencia = $dt_server - $dt_tracker;

        $q_run_speed = 'SELECT run_speed FROM gs_objects WHERE imei = '.$loc['imei'].'';
        $r_run_speed = mysqli_query($ms, $q_run_speed) or print_r(mysqli_error($ms));
        $row = mysqli_fetch_array($r_run_speed);

        if ($row[0] == 1) {
            $direferncia_speed = $loc["speed"] - $loc["params"]["run_spd"];
            if($direferncia_speed > 10){
                $loc["speed"] = $loc["params"]["run_spd"];
            }
            if($direferncia_speed < -10){
                $loc["speed"] = $loc["params"]["run_spd"];
            }
        }

//		if($dt_diferencia < 30){
            if ($loc["op"] == "loc") {
                insert_db_loc($loc);
            } elseif ($loc["op"] == "noloc") {
                insert_db_noloc($loc);
            } elseif ($loc["op"] == "imgloc") {
                insert_db_imgloc($loc);
            }
//		}

    mysqli_close($ms);
    die;
