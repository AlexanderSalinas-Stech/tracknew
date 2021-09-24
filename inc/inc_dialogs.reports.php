<div id="dialog_report_properties" title="<? echo $la['REPORT_PROPERTIES']; ?>">
	<div class="row">
		<div class="title-block"><? echo $la['REPORT'];?></div>
		<div class="report-block block width50">
			<div class="container">
				<div class="row2">
					<div class="width40"><? echo $la['NAME'];?></div>
					<div class="width60"><input id="dialog_report_name" class="inputbox" type="text" value="" maxlength="30"></div>
				</div>
				<div class="row2">
					<div class="width40"><? echo $la['TYPE']; ?></div>
					<div class="width60">
						<select id="dialog_report_type" class="select width100" onchange="reportsSwitchType();reportsListDataItems();reportsListSensors();selectOption(this);">
							<optgroup label="<? echo $la['TEXT_REPORTS']; ?>">
							<option value="general" selected><? echo $la['GENERAL_INFO']; ?></option>
							<option value="general_merged"><? echo $la['GENERAL_INFO_MERGED']; ?></option>
				
							<option value="object_info2"><? echo "Localizadores GPS" ?></option>

							<option value="object_info"><? echo $la['OBJECT_INFO']; ?></option>
							

							<option value="current_position"><? echo $la['CURRENT_POSITION']; ?></option>
							<option value="current_position_off"><? echo $la['CURRENT_POSITION_OFFLINE']; ?></option>
							<option value="drives_stops"><? echo $la['DRIVES_AND_STOPS']; ?></option>
							<!--<option value="drives_stops2"><? //echo "Movimientos y Paradas (Excel)" ?></option>-->
							<option value="drives_stops3"><? echo "Movimientos y Paradas (excel)" ?></option>
							<option value="travel_sheet"><? echo $la['TRAVEL_SHEET']; ?></option>
							<option value="hoja_viaje_excel"><? echo $la['TRAVEL_SHEET2']; ?></option>
							<option value="mileage_daily"><? echo $la['MILEAGE_DAILY']; ?></option>
							<option value="overspeed"><? echo $la['OVERSPEEDS']; ?></option>
							<option value="overspeed2"><? echo $la['OVERSPEEDS'].' (excel)'; ?></option>
							
							<? if ($_SESSION['overpass'] == 1) { ?>
							<option value="overspeed3"><? echo 'Exceso de velocidad Dinamico'; ?></option>
							<option value="overspeed3E"><? echo 'Exceso de velocidad Dinamico (Excel)'; ?></option>
							<option value="overspeed3H"><? echo 'Exceso de velocidad dinamico por horas'; ?></option>

							<!-- <option value="overspeed3P"><? echo 'Exceso de velocidad vial personalizado'; ?></option> -->
							<? } ?>
							<option value="overspeed4"><? echo $la['OVERSPEEDS'].' RPM'; ?></option>
							<option value="overspeedLmc"><? echo $la['OVERSPEEDS'].' personalizado'; ?></option>
							<option value="overspeedLmcE"><? echo $la['OVERSPEEDS'].' personalizado (excel)'; ?></option>
							<option value="overspeedT"><? echo $la['OVERSPEEDS'].' en geocercas + 1 min'; ?></option>
							<option value="overSpeedGeo"><? echo $la['OVERSPEEDS'].' en geocercas'; ?></option>
							<option value="overSpeedGeoE"><? echo $la['OVERSPEEDS'].' en geocercas (excel)'; ?></option>
							<option value="zone_in_out"><? echo $la['ZONE_IN_OUT']; ?></option>
							<option value="zone_in_out2"><? echo $la['ZONE_IN_OUT'].' (excel)'; ?></option>
							<option value="geocercaES"><? echo 'Geocerca entrada / salida '.$la['EVENTS']; ?></option>
							<option value="geocercaAS"><? echo 'Geocercas asignadas entrada / salida '.$la['EVENTS']; ?></option>
							<option value="events"><? echo $la['EVENTS'].' general'; ?></option>
							<option value="service"><? echo $la['SERVICE']; ?></option>
						<?php if ($_SESSION["privileges"] == 'super_admin') { ?>
							<option value="fuelfillings"><? echo $la['FUEL_FILLINGS']; ?></option>
							<option value="fuelthefts"><? echo $la['FUEL_THEFTS']; ?></option>
						<?php } ?>
							<option value="logic_sensors"><? echo $la['LOGIC_SENSORS']; ?></option>
							<option value="rag"><? echo $la['DRIVER_BEHAVIOR_RAG']; ?></option>
						<?php if ($_SESSION["privileges"] == 'super_admin') { ?>
							<option value="rilogbook"><? echo $la['RFID_AND_IBUTTON_LOGBOOK']; ?></option>
						<?php } ?>
							<option value="dtc"><? echo $la['DIAGNOSTIC_TROUBLE_CODES']; ?></option>
							<optgroup label="<? echo $la['GRAPHICAL_REPORTS']; ?>">
							<option value="speed_graph"><? echo $la['SPEED']; ?></option>
							<option value="altitude_graph"><? echo $la['ALTITUDE']; ?></option>
							<option value="acc_graph"><? echo $la['IGNITION']; ?></option>
							<option value="fuellevel_graph"><? echo $la['FUEL_LEVEL']; ?></option>
							<option value="temperature_graph"><? echo $la['TEMPERATURE']; ?></option>
							<option value="sensor_graph"><? echo $la['SENSOR']; ?></option>
						</select>
					</div>
				</div>
		<script>
			function selectOption(select) {
				var speedLimit = document.getElementById('dialog_report_speed_limit');
				if(select.value == 'overspeed' || select.value == 'overspeed2' || select.value == 'overspeed3' || select.value == 'overspeed4'){
					if(speedLimit.value == '' || speedLimit.value == 0){
						speedLimit.value = '120';
					}
				}else{
					speedLimit.value = '';
				}
			}
		</script>
				<div class="row2">
					<div class="width40"><? echo $la['OBJECTS']; ?></div>
					<div class="width60"><select id="dialog_report_object_list" class="select-multiple-search width100" multiple="multiple" onchange="reportsSelectObject();reportsSwitchType();reportsListDataItems();reportsListSensors();"></select></div>
				</div>
				<div class="row2">
					<div class="width40"><? echo $la['ZONES']; ?></div>
					<div class="width60"><select id="dialog_report_zone_list" class="select-multiple-search width100" multiple="multiple"></select></div>
				</div>
				<div class="row2">
					<div class="width40"><? echo $la['SENSORS']; ?></div>
					<div class="width60"><select id="dialog_report_sensor_list" class="select-multiple-search width100" multiple="multiple"></select></div>
				</div>
				<div class="row2">
					<div class="width40"><? echo $la['DATA_ITEMS']; ?></div>
					<div class="width60"><select id="dialog_report_data_item_list" class="select-multiple width100" multiple="multiple"></select></div>
				</div>
				<br>
				<div>	
					<div class="row2">
					<div class="title-block">Opciones avanzadas</div>
						<!-- <div class="width60"><input id="activar_filtros" type="checkbox" checked ="checked"/></div> -->
					</div>
					<div class="row2">
							<div class="width40">* Diferencial >= (km/h)</div>
							<div class="width60"><input id="filtro_a" name="filtro_a" class="inputbox width100" onchange="if(this.value > 240) {this.value = 240;}" onkeypress="return isNumberKey(event);" type="text" maxlength="3" required /></div>
						</div>
					<div class="row2">
						<div class="width40">* Cantidad de reportes al mes</div>
						<div class="width60"><input id="cantidad_r" name="cantidad_r" class="inputbox width100" onchange="if(this.value > 100) {this.value = 100;}" onkeypress="return isNumberKey(event);" type="text" maxlength="3" required /></div>
					</div>
						<div class="row2">
							<div class="width40">* Velocidad >= (km/h)</div>
							<div class="width60"><input id="filtro_u" name="filtro_u" class="inputbox width100" onchange="if(this.value > 240) {this.value = 240;}" onkeypress="return isNumberKey(event);" type="text" maxlength="3" required /></div>
						</div>
						<div class="row2">
							<div class="width40">* En rutas de (km/h)</div>
							<div class="width60"><input id="filtro_d" name="filtro_d" class="inputbox width100" onchange="if(this.value > 240) {this.value = 240;}" onkeypress="return isNumberKey(event);" type="text" maxlength="3" required /></div>
					   </div>
		   		</div>
			</div>
		</div>

		<div class="report-block block width50">
			<div class="container last">
				<div class="row2">
					<div class="width40"><? echo $la['FORMAT']; ?></div>
					<div class="width60">
						<select id="dialog_report_format" class="select width100"/>
							<option value="html">HTML</option>
							<option value="pdf">PDF</option>
							<option value="xls">XLS</option>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width40"><? echo $la['SHOW_COORDINATES']; ?></div>
					<div class="width60"><input id="dialog_report_show_coordinates" type="checkbox" class="checkbox" checked /></div>
				</div>
				<div class="row2">
					<div class="width40"><? echo $la['SHOW_ADDRESSES']; ?></div>
					<div class="width60"><input id="dialog_report_show_addresses" type="checkbox" class="checkbox" /></div>
				</div>
				<div class="row2">
					<div class="width40"><? echo $la['ZONES_INSTEAD_OF_ADDRESSES']; ?></div>
					<div class="width60"><input id="dialog_report_zones_addresses" type="checkbox" class="checkbox" /></div>
				</div>
				<div class="row2">
					<div class="width40"><? echo $la['STOPS']; ?></div>
					<div class="width60">
						<select id="dialog_report_stop_duration" class="select width100"/>
							<option value="1">> 1 min</option>
							<option value="2">> 2 min</option>
							<option value="5">> 5 min</option>
							<option value="10">> 10 min</option>
							<option value="20">> 20 min</option>
							<option value="30">> 30 min</option>
							<option value="60">> 1 h</option>
							<option value="120">> 2 h</option>
							<option value="300">> 5 h</option>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width40"><? echo $la['SPEED_LIMIT']; ?> (<? echo $la["UNIT_SPEED"]; ?>)</div>
					<div class="width60"><input id="dialog_report_speed_limit" name="limite_velocidad"; class="inputbox width100" onchange="if(this.value > 240) {this.value = 240;}" onkeypress="return isNumberKey(event);" type="text" maxlength="3"/></div>
				</div>
				<div style="" id="diferencial">	
					<div class="row2">
						<div class="width40">Menor igual a</div>
						<div class="width20"><input id="menor_a" name="menor_a" class="inputbox width100" onkeypress="return isNumberKey(event);" type="text" maxlength="3" required /></div>
						<div class="width40">* Nivel leve</div> 
					</div>
					<div class="row2">
						<div class="width40">Entre rangos </div>
						<div class="width10"><input id="menor_a" name="menor_a" class="inputbox width100" onkeypress="return isNumberKey(event);" type="text" maxlength="3" required=""></div>
						<div class="width3">Y </div>
						<div class="width10"><input id="mayor_a" name="mayor_a" class="inputbox width100" onkeypress="return isNumberKey(event);" type="text" maxlength="3" required=""></div>
						<div class="width20">* Nivel grave</div> 
					</div>
					<div class="row2">
						<div class="width40">Mayor igual a</div> 
						<div class="width20"><input id="mayor_a" name="mayor_a" class="inputbox width100" onkeypress="return isNumberKey(event);" type="text" maxlength="3" required /></div>
						<div class="width40">* Nivel muy grave</div> 
					</div>
					<!-- <div class="row2">
						<div class="width100">* nivel medio sera el valor entre los dos rangos</div> 
					</div> -->
		        </div>

				<div style="" id="reporthoras">	
					<div class="row2">
						<div class="width40">Cantidad de horas antes</div>
						<div class="width20"><input id="cantidadhoras" name="cantidadhoras" class="inputbox width100"  onkeypress="return isNumberKey(event);" type="text" maxlength="2" required /></div>
					</div>
					<div class="row2">
						<div class="width40">Fecha envio reporte</div> 
						<!-- <div class="width20"><input type = "time" id="fechaenvio" name="fechaenvio" class="inputbox width100" required /></div> -->
					    <!-- <div class="width13">
							<select id="fechaenvio" name="fechaenvio"  class="select width100">
							<? include ("inc/inc_dt.hours.php"); ?>
							</select>
					    </div> -->
						<div class="width20"><input id="fechaenvio" name="fechaenvio" class="inputbox width100"  onkeypress="return isNumberKey(event);" type="text" maxlength="2" required /></div>
					</div>
		   		  </div>
			</div>
		</div>
	</div>

<div class="row">
		<div class="schedule-block block width50">
			<div class="container">
				<div class="title-block"><? echo $la['SCHEDULE'];?></div>
				<div class="row2">
					<div class="width40"><? echo $la['DAILY'];?></div>
					<div class="width60"><input id="dialog_report_schedule_period_daily" type="checkbox" name="diario" onclick="onlyOne(this);" <? if ($gsValues['REPORTS_SCHEDULE'] == 'false') { ?> disabled=disabled <? } ?>/></div>
				</div>
				<div class="row2">
					<div class="width40"><? echo $la['WEEKLY'];?></div>
					<div class="width60"><input id="dialog_report_schedule_period_weekly" type="checkbox" name="semanal" onclick="onlyOne(this);" <? if ($gsValues['REPORTS_SCHEDULE'] == 'false') { ?> disabled=disabled <? } ?>/></div>
				</div>
				<div class="row2">
					<div class="width40"><? echo $la['MONTHLY'];?></div>
					<div class="width60"><input id="dialog_report_schedule_period_monthly" type="checkbox" name="mensual" onclick="onlyOne(this);" <? if ($gsValues['REPORTS_SCHEDULE'] == 'false') { ?> disabled=disabled <? } ?>/></div>
				</div>
				<div class="row2">
					<div class="width40"><? echo $la['SEND_TO_EMAIL'];?></div>
					<div class="width60"><input id="dialog_report_schedule_email_address" class="inputbox" type="text" maxlength="500" placeholder="<? echo $la['EMAIL_ADDRESS']; ?>" <? if ($gsValues['REPORTS_SCHEDULE'] == 'false') { ?> disabled=disabled <? } ?>/></div>
				</div>
			</div>
		</div>
		<script>
			var checkboxD = document.getElementById('dialog_report_schedule_period_daily');
			var checkboxW = document.getElementById('dialog_report_schedule_period_weekly');
			var checkboxM = document.getElementById('dialog_report_schedule_period_monthly');
			checkboxD.checked = false;
            checkboxW.checked = false;
            checkboxM.checked = false;
			function onlyOne(checkbox) {
				var checkboxes = document.getElementsByName('check');
				checkboxes.forEach((item) => {
					if (item !== checkbox) item.checked = false;
				})
				var checkboxes = document.getElementsByName('mensual');
				checkboxes.forEach((item) => {
					if (item !== checkbox) item.checked = false;
					if (item.checked === true) {
							document.cookie = "mensual=true";
					}else{
							document.cookie = "mensual=false";
					}
				})
			}
		</script>
	<div class="time-period block width50">
			<div class="container last">
				<div class="title-block"><? echo $la['TIME_PERIOD'];?></div>
				<div class="row2">
					<div class="width40"><? echo $la['FILTER'];?></div>
					<div class="width60">
						<select id="dialog_report_filter" class="select width100" onchange="switchHistoryReportsDateFilter('report');">
							<option value="0" selected></option>
							<option value="1"><? echo $la['LAST_HOUR'];?></option>
							<option value="2"><? echo $la['TODAY'];?></option>
							<option value="3"><? echo $la['YESTERDAY'];?></option>
							<option value="4"><? echo $la['BEFORE_2_DAYS'];?></option>
							<option value="5"><? echo $la['BEFORE_3_DAYS'];?></option>
							<option value="6"><? echo $la['THIS_WEEK'];?></option>
							<option value="7"><? echo $la['LAST_WEEK'];?></option>
							<option value="8"><? echo $la['THIS_MONTH'];?></option>
							<option value="9"><? echo $la['LAST_MONTH'];?></option>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width40"><? echo $la['TIME_FROM']; ?></div>
					<div class="width30">
						<input readonly class="inputbox-calendar inputbox width100" id="dialog_report_date_from" type="text" value=""/>
					</div>
					<div class="width2"></div>
					<div class="width13">
						<select id="dialog_report_hour_from" class="select width100">
						<? include ("inc/inc_dt.hours.php"); ?>
						</select>
					</div>
					<div class="width2"></div>
					<div class="width13">
						<select id="dialog_report_minute_from" class="select width100">
						<? include ("inc/inc_dt.minutes.php"); ?>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width40"><? echo $la['TIME_TO']; ?></div>
					<div class="width30">
						<input readonly class="inputbox-calendar inputbox width100" id="dialog_report_date_to" type="text" value=""/>
					</div>
					<div class="width2"></div>
					<div class="width13">
						<select id="dialog_report_hour_to" class="select width100">
						<? include ("inc/inc_dt.hours.php"); ?>
						</select>
					</div>
					<div class="width2"></div>
					<div class="width13">
						<select id="dialog_report_minute_to" class="select width100">
						<? include ("inc/inc_dt.minutes.php"); ?>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
				//   // var nuevaCookie = 45;
				// function mostrarDiv(nombre){

				// 	var opcionMarcado = document.getElementById('dialog_report_type').value;
				// 	if(opcionMarcado == 'overSpeedGeoE' || opcionMarcado == 'overSpeedGeo' || opcionMarcado == 'overspeedLmcE' || opcionMarcado == 'overspeedLmc'){
				// 	document.getElementById(nombre).style.visibility='visible';
				// 	}
				// 	else{
				// 	document.getElementById(nombre).style.visibility='hidden';
				// 	}

				// }
				function alertCookie() {

					var nuevaMenor = document.getElementById('menorA').value;
					var nuevaMayor = document.getElementById('mayorA').value;
					var now = new Date();
					var time = now.getTime();
					var expireTime = time + 1000*60;
					now.setTime(expireTime);
					document.cookie = 'nuevaCookieMenor='+nuevaMenor+';expires='+now.toGMTString()+';path=/';
					document.cookie = 'nuevaCookieMayor='+nuevaMayor+';expires='+now.toGMTString()+';path=/';
					console.log(document.cookie);
					//  document.cookie = "nuevaCookieMenor="+nuevaMenor;
					//  document.cookie = "nuevaCookieMayor="+nuevaMayor; 
					// alert(document.cookie);
				}
		   </script>	

	<center>
		<input class="button icon-action2 icon" type="button" onclick="reportProperties('generate');" value="<? echo $la['GENERATE']; ?>" />&nbsp;
		<input class="button icon-save icon" type="button" onclick="reportProperties('save');" value="<? echo $la['SAVE']; ?>" />&nbsp;
		<input class="button icon-close icon" type="button" onclick="reportProperties('cancel');" value="<? echo $la['CANCEL']; ?>" />
	</center>
</div>

<div id="dialog_reports" title="<? echo $la['REPORTS']; ?>">
	<div id="reports_tabs">
		<ul>
			<li><a href="#reports_reports"><? echo $la['REPORTS'];?></a></li>
			<li id="reports_generated_tab"><a href="#reports_generated"><? echo $la['GENERATED'];?></a></li>
		</ul>
		<div id="reports_reports">
			<table id="report_list_grid"></table>
			<div id="report_list_grid_pager"></div>

		</div>
		<div id="reports_generated">
			<table id="reports_generated_list_grid"></table>
			<div id="reports_generated_list_grid_pager"></div>
		</div>
	</div>
</div>
