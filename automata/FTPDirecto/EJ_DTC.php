<?php
include 'db_connect.php';

$query = "CALL st_Ej_ObtieneDTC()"; 
$stmt = $conn->query( $query ); 

$file = fopen("C:/inetpub/wwwroot/track/automata/dtc.csv", "w+");


while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){
        $imei = $row[imei];
        $horaFecha = $row[horaFecha];
        $latitud = $row[Latitud];
        $longitud = $row[Longitud];
        $Direccion = $row[Direccion];
        $TipoError = $row[TipoError];
        $CodigoDTC = $row[CodigoDTC];
        $descripcion = $row[descripcion];


        $cadena =  date("d-m-Y H:i:s",strtotime(date('d-m-Y H:i:s',(strtotime("-1 hours"))))).';'.$imei.';'.$horaFecha.';'.$latitud.';'.$longitud.';'.$Direccion.';'.$TipoError.';'.$CodigoDTC.';'.$descripcion;
        fwrite($file, $cadena . PHP_EOL);
}
fclose($file);





$ftp_server="198.41.33.80"; 
$ftp_user_name="Data_gpwhere@stech.cl"; 
$ftp_user_pass="aShZ74y3"; 
$file = "C:/inetpub/wwwroot/track/automata/dtc.csv"; 
$remote_file = "dtc.csv"; 

// set up basic connection 

$conn_id = ftp_connect($ftp_server); 

// login with username and password 

$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 

//borra archivo del dia anterior

if (ftp_delete($conn_id, $remote_file)) {
 echo "$file se ha eliminado satisfactoriamente\n";
} else {
 echo "No se pudo eliminar $file\n";
}

// upload a file 

if (ftp_put($conn_id, $remote_file, $file, FTP_ASCII)) { 
    echo "successfully uploaded $file\n"; 
    exit; 
 } else { 
    echo "There was a problem while uploading $file\n"; 
    exit; 
    } 

// close the connection 

ftp_close($conn_id); 

?>







