<div id="dialog_settings_template_properties" title="<?php echo $la['TEMPLATE_PROPERTIES'];?>">
	<div class="row">
		<div class="block width60">
			<div class="container">
				<div class="title-block"><?php echo $la['TEMPLATE']; ?></div>
				<div class="row2">
					<div class="width30"><?php echo $la['NAME']; ?></div>
					<div class="width70"><input id="dialog_settings_template_name" class="inputbox" type="text" value="" maxlength="50"></div>
				</div>
				<div class="row2">
					<div class="width30"><?php echo $la['DESCRIPTION']; ?></div>
					<div class="width70"><textarea id="dialog_settings_template_desc" class="inputbox" style="height:50px;" maxlength="100"></textarea></div>
				</div>
				<div class="row2">
					<div class="width30"><?php echo $la['SUBJECT']; ?></div>
					<div class="width70"><input id="dialog_settings_template_subject" class="inputbox" maxlength="100"></div>
				</div>
				<div class="row2">
					<div class="width30"><?php echo $la['MESSAGE']; ?></div>
					<div class="width70"><textarea id="dialog_settings_template_message" class="inputbox" style="height:200px;" maxlength="2000"></textarea></div>
				</div>
			</div>
		</div>
		<div class="block width40">
			<div class="container last">
				<div class="title-block"><?php echo $la['VARIABLES']; ?></div>
				<div class="row2">
					<div style="height: 305px; overflow-y: scroll;">
						<div class="row"><?php echo $la['VAR_TEMPLATE_NAME']; ?></div>
						<div class="row"><?php echo $la['VAR_TEMPLATE_IMEI']; ?></div>

						<div class="row"><?php echo $la['VAR_TEMPLATE_EVENT']; ?></div>

						<div class="row"><?php echo $la['VAR_TEMPLATE_LAT']; ?></div>
						<div class="row"><?php echo $la['VAR_TEMPLATE_LNG']; ?></div>
						<div class="row"><?php echo $la['VAR_TEMPLATE_ADDRESS']; ?></div>
						<div class="row"><?php echo $la['VAR_TEMPLATE_SPEED']; ?></div>
						<div class="row"><?php echo $la['VAR_TEMPLATE_ALT']; ?></div>
						<div class="row"><?php echo $la['VAR_TEMPLATE_ANGLE']; ?></div>
						<div class="row"><?php echo $la['VAR_TEMPLATE_DT_POS']; ?></div>
						<div class="row"><?php echo $la['VAR_TEMPLATE_DT_SER']; ?></div>
						<div class="row"><?php echo $la['VAR_TEMPLATE_G_MAP']; ?></div>

						<div class="row"><?php echo $la['VAR_TEMPLATE_TR_MODEL']; ?></div>
						<div class="row"><?php echo $la['VAR_TEMPLATE_PL_NUM']; ?></div>
						<div class="row"><?php echo $la['VAR_TEMPLATE_DRIVER']; ?></div>
						<div class="row"><?php echo $la['VAR_TEMPLATE_TRAILER']; ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<center>
		<input class="button icon-save icon" type="button" onclick="settingsTemplateProperties('save');" value="<?php echo $la['SAVE']; ?>" />&nbsp;
		<input class="button icon-close icon" type="button" onclick="settingsTemplateProperties('cancel');" value="<?php echo $la['CANCEL']; ?>" />
	</center>
</div>

<div id="dialog_settings_subaccount_properties" title="<?php echo $la['SUB_ACCOUNT_PROPERTIES'];?>">
	<div class="row">
		<div class="title-block"><?php echo $la['SUB_ACCOUNT']; ?></div>
		<div class="block width50">
			<div class="container">
				<div class="row2">
					<div class="width40"><?php echo $la['ACTIVE']; ?></div>
					<div class="width60"><input id="dialog_settings_subaccount_active" type="checkbox" checked="checked"/></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['EMAIL']; ?></div>
					<div class="width60"><input id="dialog_settings_subaccount_email" class="inputbox" type="text" value="" maxlength="50"/></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['PASSWORD']; ?></div>
					<div class="width60"><input id="dialog_settings_subaccount_password" class="inputbox" type="text" value="" maxlength="20"/></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['EXPIRE_ON']; ?></div>
					<div class="width10">
						<input id="dialog_settings_subaccount_expire" type="checkbox" class="checkbox" onchange="settingsSubaccountCheck();"/>
					</div>
					<div class="width50">
						<input readonly class="inputbox-calendar inputbox width100" id="dialog_settings_subaccount_expire_dt"/>
					</div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['OBJECTS']; ?></div>
					<div class="width60"><select id="dialog_settings_subaccount_available_objects" class="select-multiple-search width100" multiple="multiple" /></select></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['MARKERS']; ?></div>
					<div class="width60"><select id="dialog_settings_subaccount_available_markers" class="select-multiple-search width100" multiple="multiple" /></select></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['ROUTES']; ?></div>
					<div class="width60"><select id="dialog_settings_subaccount_available_routes" class="select-multiple-search width100" multiple="multiple" /></select></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['ZONES']; ?></div>
					<div class="width60"><select id="dialog_settings_subaccount_available_zones" class="select-multiple-search width100" multiple="multiple" /></select></div>
				</div>
			</div>
		</div>

		<div class="block width50">
			<div class="container last">
				<div class="row2">
					<div class="width70"><?php echo $la['HISTORY']; ?></div>
					<div class="width30"><input id="dialog_settings_subaccount_history" type="checkbox" checked="checked"/></div>
				</div>
				<div class="row2">
					<div class="width70"><?php echo $la['REPORTS']; ?></div>
					<div class="width30"><input id="dialog_settings_subaccount_reports" type="checkbox" checked="checked"/></div>
				</div>
				<div class="row2" <?php if ($_SESSION["privileges"] != 'super_admin') {
    echo  'style="visibility: hidden;"';
} ?>>
					<div class="width70"><?php echo $la['RFID_AND_IBUTTON_LOGBOOK']; ?></div>
					<div class="width30"><input id="dialog_settings_subaccount_rilogbook" type="checkbox" checked="checked"/></div>
				</div>
				<div class="row2" <?php if ($_SESSION["privileges"] != 'super_admin') {
    echo  'style="visibility: hidden;"';
} ?>>
					<div class="width70"><?php echo $la['DIAGNOSTIC_TROUBLE_CODES']; ?></div>
					<div class="width30"><input id="dialog_settings_subaccount_dtc" type="checkbox" checked="checked"/></div>
				</div>
				<div class="row2" <?php if ($_SESSION["privileges"] != 'super_admin') {
    echo  'style="visibility: hidden;"';
} ?>>
					<div class="width70"><?php echo $la['OBJECT_CONTROL']; ?></div>
					<div class="width30"><input id="dialog_settings_subaccount_object_control" type="checkbox" checked="checked"/></div>
				</div>
				<div class="row2" <?php if ($_SESSION["privileges"] != 'super_admin') {
    echo  'style="visibility: hidden;"';
} ?>>
					<div class="width70"><?php echo $la['IMAGE_GALLERY']; ?></div>
					<div class="width30"><input id="dialog_settings_subaccount_image_gallery" type="checkbox" checked="checked"/></div>
				</div>
				<div class="row2" <?php if ($_SESSION["privileges"] != 'super_admin') {
    echo  'style="visibility: hidden;"';
} ?>>
					<div class="width70"><?php echo $la['CHAT']; ?></div>
					<div class="width30"><input id="dialog_settings_subaccount_chat" type="checkbox" checked="checked"/></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="title-block"><?php echo $la['ACCESS_VIA_URL']; ?></div>
		<div class="row2">
			<div class="width195"><?php echo $la['ACTIVE']; ?></div>
			<div class="width805">
				<input id="dialog_settings_subaccount_au_active" type="checkbox" class="checkbox"/>
			</div>
		</div>
		<div class="row2">
			<div class="width195"><?php echo $la['URL_DESKTOP']; ?></div>
			<div class="width805">
				<input class="inputbox" id="dialog_settings_subaccount_au" readonly />
			</div>
		</div>
		<div class="row2">
			<div class="width195"><?php echo $la['URL_MOBILE']; ?></div>
			<div class="width805">
				<input class="inputbox" id="dialog_settings_subaccount_au_mobile" readonly />
			</div>
		</div>
	</div>

	<center>
		<input class="button icon-save icon" type="button" onclick="settingsSubaccountProperties('save');" value="<?php echo $la['SAVE']; ?>" />
		<input class="button icon-close icon" type="button" onclick="settingsSubaccountProperties('cancel');" value="<?php echo $la['CANCEL']; ?>" />
	</center>
</div>

<div id="dialog_settings_event_properties" title="<?php echo $la['EVENT_PROPERTIES'];?>">
	<div id="settings_event">
		<ul>
			<li><a href="#settings_event_main"><?php echo $la['MAIN']; ?></a></li>
			<li><a href="#settings_event_time"><?php echo $la['TIME']; ?></a></li>
			<li><a href="#settings_event_notification"><?php echo $la['NOTIFICATIONS']; ?></a></li>
			<li id="settings_event_object_control_tab"
			<?php if ($_SESSION["privileges"] != 'super_admin') { echo  'style="visibility: hidden;"'; } ?>
			><a href="#settings_event_object_control"><?php echo $la['OBJECT_CONTROL']; ?></a></li>
		</ul>
		<div id="settings_event_main">
			<div class="row">
				<div class="block width60">
					<div class="container">
						<div class="title-block"><?php echo $la['EVENT']; ?></div>
						<div class="row2">
							<div class="width40"><?php echo $la['ACTIVE']; ?></div>
							<div class="width60"><input id="dialog_settings_event_active" type="checkbox" checked="checked"/></div>
						</div>
						<div class="row2">
							<div class="width40"><?php echo $la['NAME']; ?></div>
							<div class="width60"><input id="dialog_settings_event_name" class="inputbox" type="text" value="" maxlength="30"/></div>
						</div>
						<div class="row2">
							<div class="width40"><?php echo $la['TYPE']; ?></div>
							<div class="width60">
								<select id="dialog_settings_event_type" class="select width100" onchange="settingsEventSwitchType();"/>
									<option value="sos"><?php echo $la['SOS']; ?></option>
									<option value="bracon"><?php echo $la['BRACELET_ON']; ?></option>
									<option value="bracoff"><?php echo $la['BRACELET_OFF']; ?></option>
									<option value="conex">Conexion</option>
                                    <option value="desconex">Desconexion</option>
									<option value="mandown"><?php echo $la['MAN_DOWN']; ?></option>
									<option value="shock"><?php echo $la['SHOCK']; ?></option>
									<option value="tow"><?php echo $la['TOW']; ?></option>
									<option value="pwrcut"><?php echo $la['POWER_CUT']; ?></option>
									<option value="gpsantcut"><?php echo $la['GPS_ANTENNA_CUT']; ?></option>
									<option value="jamming"><?php echo $la['SIGNAL_JAMMING']; ?></option>
									<option value="lowdc"><?php echo $la['LOW_DC']; ?></option>
									<option value="lowbat"><?php echo $la['LOW_BATTERY']; ?></option>
									<option value="connyes"><?php echo $la['CONNECTION_YES']; ?></option>
									<option value="connno"><?php echo $la['CONNECTION_NO']; ?></option>
									<option value="gpsyes"><?php echo $la['GPS_YES']; ?></option>
									<option value="gpsno"><?php echo $la['GPS_NO']; ?></option>
									<option value="stopped"><?php echo $la['STOPPED']; ?></option>
									<option value="moving"><?php echo $la['MOVING']; ?></option>
									<option value="engidle"><?php echo $la['ENGINE_IDLE']; ?></option>
									<option value="overspeed"><?php echo $la['OVERSPEED']; ?></option>
									<option value="overspeedT"><?php echo $la['OVERSPEED']." tiempo"; ?></option>
									<option value="overspeedD"><?php echo $la['OVERSPEED']." dinamico"; ?></option>
									<option value="underspeed"><?php echo $la['UNDERSPEED']; ?></option>
									<option value="haccel"><?php echo $la['HARSH_ACCELERATION']; ?></option>
									<option value="hbrake"><?php echo $la['HARSH_BRAKING']; ?></option>
									<option value="hcorn"><?php echo $la['HARSH_CORNERING']; ?></option>
									<option value="param"><?php echo $la['PARAMETER']; ?></option>
									<option value="sensor"><?php echo $la['SENSOR']; ?></option>
									<option value="service"><?php echo $la['SERVICE']; ?></option>
									<option value="dtc"><?php echo $la['DIAGNOSTIC_TROUBLE_CODES']; ?></option>
									<option value="route_in"><?php echo $la['ROUTE_IN']; ?></option>
									<option value="route_out"><?php echo $la['ROUTE_OUT']; ?></option>
									<option value="zone_in"><?php echo $la['ZONE_IN']; ?></option>
									<option value="zone_out"><?php echo $la['ZONE_OUT']; ?></option>
								</select>
							</div>
						</div>
						<div class="row2">
							<div class="width40">
								<?php echo $la['OBJECTS']; ?>
							</div>
							<div class="width60">
								<select id="dialog_settings_event_objects" class="select-multiple-search width100" multiple="multiple" /></select>
							</div>
						</div>
						<div class="row2">
							<div class="width40"><?php echo $la['DEPENDING_ON_ROUTES']; ?></div>
							<div class="width60">
								<select id="dialog_settings_event_route_trigger" class="select width100"/>
									<option value="off"><?php echo $la['OFF']; ?></option>
									<option value="in"><?php echo $la['IN_SELECTED_ROUTES']; ?></option>
									<option value="out"><?php echo $la['OUT_OF_SELECTED_ROUTES']; ?></option>
								</select>
							</div>
						</div>
						<div class="row2">
							<div class="width40">
								<?php echo $la['ROUTES']; ?>
							</div>
							<div class="width60">
								<select id="dialog_settings_event_routes" class="select-multiple-search width100" multiple="multiple" /></select>
							</div>
						</div>
						<div class="row2">
							<div class="width40"><?php echo $la['DEPENDING_ON_ZONES']; ?></div>
							<div class="width60">
								<select id="dialog_settings_event_zone_trigger" class="select width100"/>
									<option value="off"><?php echo $la['OFF']; ?></option>
									<option value="in"><?php echo $la['IN_SELECTED_ZONES']; ?></option>
									<option value="out"><?php echo $la['OUT_OF_SELECTED_ZONES']; ?></option>
								</select>
							</div>
						</div>
						<div class="row2">
							<div class="width40">
								<?php echo $la['ZONES']; ?>
							</div>
							<div class="width60">
								<select id="dialog_settings_event_zones" class="select-multiple-search width100" multiple="multiple" /></select>
							</div>
						</div>
						<div class="row2">
							<div class="width40">Min en velocidad</div>
							<div class="width60"><input class="inputbox width100" id="dialog_settings_event_time_period" onkeypress="return isNumberKey(event);" type="text" value="" maxlength="4"/></div>
						</div>
						<!-- <div class="row2">
							<div class="width40"><?php echo $la['TIME_PERIOD_MIN']; ?></div>
							<div id="dialog_settings_event_time_period" class="width60"></div>
						</div> -->
						<div class="row2">
							<div class="width40"><?php echo $la['SPEED_LIMIT']; ?> (<?php echo $la["UNIT_SPEED"]; ?>)</div>
							<!-- Original modificado 20/09/2018
							<div class="width60"><input class="inputbox width100" id="dialog_settings_event_speed_limit" onkeypress="return isNumberKey(event);" type="text" value="" maxlength="3" disabled/></div>
							-->
							<div class="width60"><input class="inputbox width100" id="dialog_settings_event_speed_limit" onkeypress="return isNumberKey(event);" type="text" value="" maxlength="3"/></div>
						</div>
					  <div class="row2">
						<div class="width30"><?php echo $la['TIME_PERIOD_MIN']; ?></div>
						<div class="width10"><input id="dialog_settings_event_duration_from_last_event" type="checkbox" class="checkbox"/></div>
						<div class="width60"><input id="dialog_settings_event_duration_from_last_event_minutes" class="inputbox" onkeypress="return isNumberKey(event);" type="text" value="" maxlength="4"/></div>
				      </div>
					</div>
				</div>
				<div class="block width40">
					<div class="container last">
						<div class="title-block"><?php echo $la['PARAMETERS_AND_SENSORS']; ?></div>
						<div class="row2">
							<div class="width100">
								<div id="dialog_settings_event_param_sensor_condition_list">
									<table id="settings_event_param_sensor_condition_list_grid"></table>
								</div>
							</div>
						</div>
						<div class="row2">
							<div class="width27">
								<select id="dialog_settings_event_param_sensor_condition_src" class="select width100"/></select>
							</div>
							<div class="width1"></div>
							<div class="width16">
								<select id="dialog_settings_event_param_sensor_condition_cn" class="select width100"/>
									<option value=""></option>
									<option value="gr">></option>
									<option value="eq">=</option>
									<option value="lw"><</option>
								</select>
							</div>
							<div class="width1"></div>
							<div class="width27">
								<input class="inputbox width100" id="dialog_settings_event_param_sensor_condition_val" type="text" value=""/>
							</div>
							<div class="width1"></div>
							<div class="width27">
								<input id="dialog_settings_event_param_sensor_condition_add" style="min-width: 0;" class="width100 button icon-new icon" type="button" value="<?php echo $la['ADD']; ?>" onclick="settingsEventConditionAdd();" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="settings_event_time">
			<div class="row">
				<div class="title-block"><?php echo $la['TIME']; ?></div>
				<!-- <div class="row2">
				     
					<div class="width50"><?php echo $la['DURATION_FROM_LAST_EVENT']; ?></div>
			
					<div class="width5">
						<input id="dialog_settings_event_duration_from_last_event" type="checkbox" class="checkbox"/>
					</div>
					<div class="width10">
						<input id="dialog_settings_event_duration_from_last_event_minutes" class="inputbox" onkeypress="return isNumberKey(event);" type="text" value="" maxlength="4"/>
					</div>
				</div> -->
				<div class="row2">
					<div class="width50"><?php echo $la['WEEK_DAYS']; ?> - 24 horas</div>
					<div class="width50">
						<div style="text-align:center; margin-right: 5px;"><?php echo $la['DAY_MONDAY_S']; ?><br/><input id="dialog_settings_event_wd_mon" type="checkbox" checked="checked"/></div>
						<div style="text-align:center; margin-right: 5px;"><?php echo $la['DAY_TUESDAY_S']; ?><br/><input id="dialog_settings_event_wd_tue" type="checkbox" checked="checked"/></div>
						<div style="text-align:center; margin-right: 5px;"><?php echo $la['DAY_WEDNESDAY_S']; ?><br/><input id="dialog_settings_event_wd_wed" type="checkbox" checked="checked"/></div>
						<div style="text-align:center; margin-right: 5px;"><?php echo $la['DAY_THURSDAY_S']; ?><br/><input id="dialog_settings_event_wd_thu" type="checkbox" checked="checked"/></div>
						<div style="text-align:center; margin-right: 5px;"><?php echo $la['DAY_FRIDAY_S']; ?><br/><input id="dialog_settings_event_wd_fri" type="checkbox" checked="checked"/></div>
						<div style="text-align:center; margin-right: 5px;"><?php echo $la['DAY_SATURDAY_S']; ?><br/><input id="dialog_settings_event_wd_sat" type="checkbox" checked="checked"/></div>
						<div style="text-align:center; margin-right: 5px;"><?php echo $la['DAY_SUNDAY_S']; ?><br/><input id="dialog_settings_event_wd_sun" type="checkbox" checked="checked"/></div>
					</div>
				</div>

			
                         <script>

					$(document).ready(function () { 

						document.getElementById("dialog_settings_event_dt").onclick = marcar(), marcar2();
					});

				function marcar2(){
						$(document).ready(function () {  
							//Detectar click en el checkbox superior de la lista
							$('#dialog_settings_event_dt').on('click', function () {
							//verificar el estado de ese checkbox si esta marcado o no
							var checked_status = this.checked;
					
							/*
							* asignarle ese estatus a cada uno de los checkbox
							* que tengan la clase "selectall"
							*/

							// document.getElementById("dialog_settings_event_wd_mon").disabled = (!checked_status);
							// document.getElementById("dialog_settings_event_wd_tue").disabled = (!checked_status);
							// document.getElementById("dialog_settings_event_wd_wed").disabled = (!checked_status);
							// document.getElementById("dialog_settings_event_wd_thu").disabled = (!checked_status);
							// document.getElementById("dialog_settings_event_wd_fri").disabled = (!checked_status);
							// document.getElementById("dialog_settings_event_wd_sat").disabled = (!checked_status);
							// document.getElementById("dialog_settings_event_wd_sun").disabled = (!checked_status);


							document.getElementById("dialog_settings_event_wd_mon").checked = (!checked_status);
							if(document.getElementById("dialog_settings_event_wd_mon").checked == true) {
							  document.getElementById("dialog_settings_event_wd_mon").checked = false;
							}

							document.getElementById("dialog_settings_event_wd_tue").checked = (!checked_status);
							if(document.getElementById("dialog_settings_event_wd_tue").checked == true){
								document.getElementById("dialog_settings_event_wd_tue").checked = false;
							}

							document.getElementById("dialog_settings_event_wd_wed").checked = (!checked_status);
							if(document.getElementById("dialog_settings_event_wd_wed").checked ==true){
								document.getElementById("dialog_settings_event_wd_wed").checked = false;
							}

							document.getElementById("dialog_settings_event_wd_thu").checked = (!checked_status);
							if(document.getElementById("dialog_settings_event_wd_thu").checked == true){
								document.getElementById("dialog_settings_event_wd_thu").checked = false;
							}

							document.getElementById("dialog_settings_event_wd_fri").checked = (!checked_status);
							if(document.getElementById("dialog_settings_event_wd_fri").checked == true){
								document.getElementById("dialog_settings_event_wd_fri").checked = false;
							}

							document.getElementById("dialog_settings_event_wd_sat").checked = (!checked_status);
							if(document.getElementById("dialog_settings_event_wd_sat").checked == true){
								document.getElementById("dialog_settings_event_wd_sat").checked = false;
							}

							document.getElementById("dialog_settings_event_wd_sun").checked = (!checked_status);
							if(document.getElementById("dialog_settings_event_wd_sun").checked == true){
								document.getElementById("dialog_settings_event_wd_sun").checked = false;

							}


							document.getElementById("dialog_settings_event_wd_mon").disabled = (checked_status);
							document.getElementById("dialog_settings_event_wd_tue").disabled = (checked_status);
							document.getElementById("dialog_settings_event_wd_wed").disabled = (checked_status);
							document.getElementById("dialog_settings_event_wd_thu").disabled = (checked_status);
							document.getElementById("dialog_settings_event_wd_fri").disabled = (checked_status);
							document.getElementById("dialog_settings_event_wd_sat").disabled = (checked_status);
							document.getElementById("dialog_settings_event_wd_sun").disabled = (checked_status);

							});
						});
				}

						function marcar(){
							//Detectar click en el checkbox superior de la lista
							$('#dialog_settings_event_dt').on('click', function () {
								//verificar el estado de ese checkbox si esta marcado o no
								var checked_status = this.checked;

								/*
								* asignarle ese estatus a cada uno de los checkbox
								* que tengan la clase "selectall"
								*/
								// $(".selectall").each(function () {
								// this.checked = checked_status;
								// });

								document.getElementById("dialog_settings_event_dt_mon").disabled = (!checked_status);
								document.getElementById("dialog_settings_event_dt_tue").disabled = (!checked_status);
								document.getElementById("dialog_settings_event_dt_wed").disabled = (!checked_status);
								document.getElementById("dialog_settings_event_dt_thu").disabled = (!checked_status);
								document.getElementById("dialog_settings_event_dt_fri").disabled = (!checked_status);
								document.getElementById("dialog_settings_event_dt_sat").disabled = (!checked_status);
								document.getElementById("dialog_settings_event_dt_sun").disabled = (!checked_status);


							});
						
						}

					   </script>
				
				<div class="row2">
					<div class="width50"><?php echo $la['DAY_TIME']; ?></div>
					<div class="width5">
						<input id="dialog_settings_event_dt" type="checkbox" class="checkbox" onclick="settingsEventSwitchDayTime(); marcar(); marcar2();"/>Activar/Desactivar
					</div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['DAY_MONDAY']; ?></div>
					<div class="width5">
						<input id="dialog_settings_event_dt_mon" type="checkbox" class="checkbox" disabled/>
					</div>
					<div class="width10">
						<select id="dialog_settings_event_dt_mon_from" class="select width100">
							<?php include("inc/inc_dt.hours_minutes.php"); ?>
						</select>
					</div>
					<div class="width2"></div>
					<div class="width10">
						<select id="dialog_settings_event_dt_mon_to" class="select width100">
							<?php include("inc/inc_dt.hours_minutes_full.php"); ?>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['DAY_TUESDAY']; ?></div>
					<div class="width5">
						<input id="dialog_settings_event_dt_tue" type="checkbox" class="checkbox" disabled/>
					</div>
					<div class="width10">
						<select id="dialog_settings_event_dt_tue_from" class="select width100">
							<?php include("inc/inc_dt.hours_minutes.php"); ?>
						</select>
					</div>
					<div class="width2"></div>
					<div class="width10">
						<select id="dialog_settings_event_dt_tue_to" class="select width100">
							<?php include("inc/inc_dt.hours_minutes_full.php"); ?>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['DAY_WEDNESDAY']; ?></div>
					<div class="width5">
						<input id="dialog_settings_event_dt_wed" type="checkbox" class="checkbox" disabled/>
					</div>
					<div class="width10">
						<select id="dialog_settings_event_dt_wed_from" class="select width100">
							<?php include("inc/inc_dt.hours_minutes.php"); ?>
						</select>
					</div>
					<div class="width2"></div>
					<div class="width10">
						<select id="dialog_settings_event_dt_wed_to" class="select width100">
							<?php include("inc/inc_dt.hours_minutes_full.php"); ?>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['DAY_THURSDAY']; ?></div>
					<div class="width5">
						<input id="dialog_settings_event_dt_thu" type="checkbox" class="checkbox" disabled/>
					</div>
					<div class="width10">
						<select id="dialog_settings_event_dt_thu_from" class="select width100">
							<?php include("inc/inc_dt.hours_minutes.php"); ?>
						</select>
					</div>
					<div class="width2"></div>
					<div class="width10">
						<select id="dialog_settings_event_dt_thu_to" class="select width100">
							<?php include("inc/inc_dt.hours_minutes_full.php"); ?>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['DAY_FRIDAY']; ?></div>
					<div class="width5">
						<input id="dialog_settings_event_dt_fri" type="checkbox" class="checkbox" disabled/>
					</div>
					<div class="width10">
						<select id="dialog_settings_event_dt_fri_from" class="select width100">
							<?php include("inc/inc_dt.hours_minutes.php"); ?>
						</select>
					</div>
					<div class="width2"></div>
					<div class="width10">
						<select id="dialog_settings_event_dt_fri_to" class="select width100">
							<?php include("inc/inc_dt.hours_minutes_full.php"); ?>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['DAY_SATURDAY']; ?></div>
					<div class="width5">
						<input id="dialog_settings_event_dt_sat" type="checkbox" class="checkbox" disabled/>
					</div>
					<div class="width10">
						<select id="dialog_settings_event_dt_sat_from" class="select width100">
							<?php include("inc/inc_dt.hours_minutes.php"); ?>
						</select>
					</div>
					<div class="width2"></div>
					<div class="width10">
						<select id="dialog_settings_event_dt_sat_to" class="select width100">
							<?php include("inc/inc_dt.hours_minutes_full.php"); ?>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['DAY_SUNDAY']; ?></div>
					<div class="width5">
						<input id="dialog_settings_event_dt_sun" type="checkbox" class="checkbox" disabled/>
					</div>
					<div class="width10">
						<select id="dialog_settings_event_dt_sun_from" class="select width100">
							<?php include("inc/inc_dt.hours_minutes.php"); ?>
						</select>
					</div>
					<div class="width2"></div>
					<div class="width10">
						<select id="dialog_settings_event_dt_sun_to" class="select width100">
							<?php include("inc/inc_dt.hours_minutes_full.php"); ?>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div id="settings_event_notification">
			<div class="row">
				<div class="title-block"><?php echo $la['NOTIFICATIONS']; ?></div>
				<div class="row2">
					<div class="width45"><?php echo $la['SYSTEM_MESSAGE']; ?></div>
					<div class="width5"></div>
					<div class="width50">
						<input id="dialog_settings_event_notify_system" type="checkbox" class="checkbox"/>
					</div>
				</div>
				<div class="row2">
					<div class="width45"><?php echo $la['AUTO_HIDE']; ?></div>
					<div class="width5"></div>
					<div class="width50">
						<input id="dialog_settings_event_notify_system_hide" type="checkbox" class="checkbox"/>
					</div>
				</div>
				<div class="row2">
					<div class="width45"><?php echo $la['SOUND_ALERT']; ?></div>
					<div class="width5"></div>
					<div class="width5">
						<input id="dialog_settings_event_notify_system_sound" type="checkbox" class="checkbox"/>
					</div>
					<div class="width29">
						<select id="dialog_settings_event_notify_system_sound_file" class="select width100"/>
						<?php
                            $sound_files = getFileList('snd');
                            foreach ($sound_files as $value) {
                                if ($value != '') {
                                    echo '<option value="'.$value.'">'.$value.'</option>';
                                }
                            }
                        ?>
						</select>
					</div>
					<div class="width1"></div>
					<div class="width15">
						<input class="button float-right width100" type="button" onclick="settingsEventPlaySound();" value="<?php echo $la['PLAY']; ?>" />
					</div>
				</div>
				<div class="row2">
					<div class="width45"><?php echo $la['MESSAGE_TO_EMAIL']; ?></div>
					<div class="width5"></div>
					<div class="width5">
						<input id="dialog_settings_event_notify_email" type="checkbox" class="checkbox"/>
					</div>
					<div class="width45">
						<input id="dialog_settings_event_notify_email_address" class="inputbox" type="text" value="" maxlength="500" placeholder="<?php echo $la['EMAIL_ADDRESS']; ?>"/>
					</div>
				</div>
				<div class="row2">
					<div class="width45"><?php echo $la['SMS_TO_MOBILE_PHONE']; ?></div>
					<div class="width5"></div>
					<div class="width5">
						<input id="dialog_settings_event_notify_sms" type="checkbox" class="checkbox"/>
					</div>
					<div class="width45">
						<input id="dialog_settings_event_notify_sms_number" class="inputbox" type="text" value="" maxlength="500" placeholder="<?php echo $la['PHONE_NUMBER_WITH_CODE']; ?>"/>
					</div>
				</div>
				<div class="row2">
					<div class="width45"><?php echo $la['EMAIL_TEMPLATE']; ?></div>
					<div class="width5"></div>
					<div class="width5"></div>
					<div class="width45">
						<select id="dialog_settings_event_notify_email_template" class="select width100"/></select>
					</div>
				</div>
				<div class="row2">
					<div class="width45"><?php echo $la['SMS_TEMPLATE']; ?></div>
					<div class="width5"></div>
					<div class="width5"></div>
					<div class="width45">
						<select id="dialog_settings_event_notify_sms_template" class="select width100"/></select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="title-block"><?php echo $la['COLORS']; ?></div>
				<div class="row2">
					<div class="width45"><?php echo $la['OBJECT_ARROW_COLOR']; ?></div>
					<div class="width5"></div>
					<div class="width5">
						<input id="dialog_settings_event_notify_arrow" type="checkbox" class="checkbox"/>
					</div>
					<div class="width20">
						<select id="dialog_settings_event_notify_arrow_color" class="select width100">
							<?php include("inc/inc_arrow_colors.php"); ?>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width45"><?php echo $la['OBJECT_LIST_COLOR']; ?></div>
					<div class="width5"></div>
					<div class="width5">
						<input id="dialog_settings_event_notify_ohc" type="checkbox" class="checkbox"/>
					</div>
					<div class="width45">
						<input class="color inputbox" style="width:55px" type='text' id='dialog_settings_event_notify_ohc_color'/>
					</div>
				</div>
			</div>
		</div>
		<div id="settings_event_object_control"
		<?php if ($_SESSION["privileges"] != 'super_admin') { echo  'style="visibility: hidden;"'; } ?>
		>
			<div class="row">
				<div class="title-block"><?php echo $la['OBJECT_CONTROL']; ?></div>
				<div class="row2">
					<div class="width50"><?php echo $la['SEND_COMMAND']; ?></div>
					<div class="width50">
						<input id="dialog_settings_event_cmd_send" type="checkbox" class="checkbox"/>
					</div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['GATEWAY']; ?></div>
					<div class="width20">
						<select id="dialog_settings_event_cmd_gateway" class="select width100"/>
							<option value="gprs">GPRS</option>
							<option value="sms">SMS</option>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['TYPE']; ?></div>
					<div class="width20">
						<select id="dialog_settings_event_cmd_type" class="select width100"/>
							<option value="ascii">ASCII</option>
							<option value="hex">HEX</option>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['COMMAND']; ?></div>
					<div class="width50">
						<input id="dialog_settings_event_cmd_string" class="inputbox float-right" type="text" value="" maxlength="256">
					</div>
				</div>
			</div>
		</div>
	</div>

	<center>
		<input class="button icon-save icon" type="button" onclick="settingsEventProperties('save');" value="<?php echo $la['SAVE']; ?>" />&nbsp;
		<input class="button icon-close icon" type="button" onclick="settingsEventProperties('cancel');" value="<?php echo $la['CANCEL']; ?>" />
	</center>
</div>

<div id="dialog_settings_object_group_properties" title="<?php echo $la['OBJECT_GROUP_PROPERTIES'];?>">
	<div class="row">
		<div class="row2">
			<div class="width40"><?php echo $la['NAME']; ?></div>
			<div class="width60"><input id="dialog_settings_object_group_name" class="inputbox" type="text" value="" maxlength="25"></div>
		</div>
		<div class="row2">
			<div class="width40"><?php echo $la['DESCRIPTION']; ?></div>
			<div class="width60"><textarea id="dialog_settings_object_group_desc" class="inputbox" style="height:50px;" maxlength="100"></textarea></div>
		</div>
		<div class="row2">
			<div class="width40"><?php echo $la['OBJECTS']; ?></div>
			<div class="width60"><select id="dialog_settings_object_group_objects" class="select-multiple-search width100" multiple="multiple"></select></div>
		</div>
	</div>

	<center>
		<input class="button icon-save icon" type="button" onclick="settingsObjectGroupProperties('save');" value="<?php echo $la['SAVE']; ?>" />&nbsp;
		<input class="button icon-close icon" type="button" onclick="settingsObjectGroupProperties('cancel');" value="<?php echo $la['CANCEL']; ?>" />
	</center>
</div>

<div id="dialog_settings_object_driver_properties" title="<?php echo $la['OBJECT_DRIVER_PROPERTIES'];?>">
	<div class="row">
		<div class="report-block block width40">
			<div class="container">
				<div class="row2" style="height: 186px; vertical-align: middle; text-align: center; display: table;">
					<img id="dialog_settings_object_driver_photo" style="border:0px; width: 144px;" src="img/user-blank.svg" />
				</div>
				<center>
					<input class="button" type="button" value="<?php echo $la['UPLOAD']; ?>" onclick="settingsObjectDriverPhotoUpload();"/>&nbsp;
					<input class="button" type="button" value="<?php echo $la['DELETE']; ?>" onclick="settingsObjectDriverPhotoDelete();"/>
				</center>
			</div>
		</div>
		<div class="report-block block width60">
			<div class="container last">
				<div class="row2">
					<div class="width40"><?php echo $la['NAME']; ?></div>
					<div class="width60"><input id="dialog_settings_object_driver_name" class="inputbox" type="text" value="" maxlength="30"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['RFID_OR_IBUTTON']; ?></div>
					<div class="width60"><input id="dialog_settings_object_driver_assign_id" class="inputbox" type="text" value="" maxlength="30"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['ID_NUMBER']; ?></div>
					<div class="width60"><input id="dialog_settings_object_driver_idn" class="inputbox" type="text" value="" maxlength="30"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['ADDRESS']; ?></div>
					<div class="width60"><input id="dialog_settings_object_driver_address" class="inputbox" type="text" value="" maxlength="100"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['PHONE']; ?></div>
					<div class="width60"><input id="dialog_settings_object_driver_phone" class="inputbox" type="text" value="" maxlength="50"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['EMAIL']; ?></div>
					<div class="width60"><input id="dialog_settings_object_driver_email" class="inputbox" type="text" value="" maxlength="50"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['DESCRIPTION']; ?></div>
					<div class="width60"><textarea id="dialog_settings_object_driver_desc" class="inputbox" style="height:51px;" maxlength="100"></textarea></div>
				</div>
			</div>
		</div>
	</div>

	<center>
		<input class="button icon-save icon" type="button" onclick="settingsObjectDriverProperties('save');" value="<?php echo $la['SAVE']; ?>" />&nbsp;
		<input class="button icon-close icon" type="button" onclick="settingsObjectDriverProperties('cancel');" value="<?php echo $la['CANCEL']; ?>" />
	</center>
</div>

<div id="dialog_settings_object_passenger_properties" title="<?php echo $la['OBJECT_PASSENGER_PROPERTIES'];?>">
	<div class="row">
		<div class="row2">
			<div class="width40"><?php echo $la['NAME']; ?></div>
			<div class="width60"><input id="dialog_settings_object_passenger_name" class="inputbox" type="text" value="" maxlength="30"></div>
		</div>
		<div class="row2">
			<div class="width40"><?php echo $la['RFID_OR_IBUTTON']; ?></div>
			<div class="width60"><input id="dialog_settings_object_passenger_assign_id" class="inputbox" type="text" value="" maxlength="30"></div>
		</div>
		<div class="row2">
			<div class="width40"><?php echo $la['ID_NUMBER']; ?></div>
			<div class="width60"><input id="dialog_settings_object_passenger_idn" class="inputbox" type="text" value="" maxlength="30"></div>
		</div>
		<div class="row2">
			<div class="width40"><?php echo $la['ADDRESS']; ?></div>
			<div class="width60"><input id="dialog_settings_object_passenger_address" class="inputbox" type="text" value="" maxlength="100"></div>
		</div>
		<div class="row2">
			<div class="width40"><?php echo $la['PHONE']; ?></div>
			<div class="width60"><input id="dialog_settings_object_passenger_phone" class="inputbox" type="text" value="" maxlength="50"></div>
		</div>
		<div class="row2">
			<div class="width40"><?php echo $la['EMAIL']; ?></div>
			<div class="width60"><input id="dialog_settings_object_passenger_email" class="inputbox" type="text" value="" maxlength="50"></div>
		</div>
		<div class="row2">
			<div class="width40"><?php echo $la['DESCRIPTION']; ?></div>
			<div class="width60"><textarea id="dialog_settings_object_passenger_desc" class="inputbox" style="height:50px;" maxlength="100"></textarea></div>
		</div>
	</div>

	<center>
		<input class="button icon-save icon" type="button" onclick="settingsObjectPassengerProperties('save');" value="<?php echo $la['SAVE']; ?>" />&nbsp;
		<input class="button icon-close icon" type="button" onclick="settingsObjectPassengerProperties('cancel');" value="<?php echo $la['CANCEL']; ?>" />
	</center>
</div>

<div id="dialog_settings_object_trailer_properties" title="<?php echo $la['OBJECT_TRAILER_PROPERTIES'];?>">
	<div class="row">
		<div class="row2">
			<div class="width40"><?php echo $la['NAME']; ?></div>
			<div class="width60"><input id="dialog_settings_object_trailer_name" class="inputbox" type="text" value="" maxlength="25"></div>
		</div>
		<div class="row2">
			<div class="width40"><?php echo $la['RFID_OR_IBUTTON']; ?></div>
			<div class="width60"><input id="dialog_settings_object_trailer_assign_id" class="inputbox" type="text" value="" maxlength="30"></div>
		</div>
		<div class="row2">
			<div class="width40"><?php echo $la['TRANSPORT_MODEL']; ?></div>
			<div class="width60"><input id="dialog_settings_object_trailer_model" class="inputbox" type="text" value="" maxlength="30"></div>
		</div>
		<div class="row2">
			<div class="width40"><?php echo $la['VIN']; ?></div>
			<div class="width60"><input id="dialog_settings_object_trailer_vin" class="inputbox" type="text" value="" maxlength="20"></div>
		</div>
		<div class="row2">
			<div class="width40"><?php echo $la['PLATE_NUMBER']; ?></div>
			<div class="width60"><input id="dialog_settings_object_trailer_plate_number" class="inputbox" type="text" value="" maxlength="20"></div>
		</div>
		<div class="row2">
			<div class="width40"><?php echo $la['DESCRIPTION']; ?></div>
			<div class="width60"><textarea id="dialog_settings_object_trailer_desc" class="inputbox" style="height:50px;" maxlength="100"></textarea></div>
		</div>
	</div>

	<center>
		<input class="button icon-save icon" type="button" onclick="settingsObjectTrailerProperties('save');" value="<?php echo $la['SAVE']; ?>" />&nbsp;
		<input class="button icon-close icon" type="button" onclick="settingsObjectTrailerProperties('cancel');" value="<?php echo $la['CANCEL']; ?>" />
	</center>
</div>

<div id="dialog_settings_object_sensor_properties" title="<?php echo $la['SENSOR_PROPERTIES'];?>">
	<div class="row">
		<div class="width50 block">
			<div class="container">
				<div class="row">
					<div class="title-block"><?php echo $la['SENSOR']; ?></div>
					<div class="row2">
						<div class="width50"><?php echo $la['NAME']; ?></div>
						<div class="width50"><input id="dialog_settings_object_sensor_name" class="inputbox" type="text" value="" maxlength="25"></div>
					</div>
					<div class="row2">
						<div class="width50"><?php echo $la['TYPE']; ?></div>
						<div class="width50">
							<select id="dialog_settings_object_sensor_type" class="select width100" onchange="settingsObjectSensorType();">
								<option value="di"><?php echo $la['DIGITAL_INPUT']; ?></option>
								<option value="do"><?php echo $la['DIGITAL_OUTPUT']; ?></option>
								<option value="da"><?php echo $la['DRIVER_ASSIGN']; ?></option>
								<option value="engh"><?php echo $la['ENGINE_HOURS']; ?></option>
								<option value="fuel"><?php echo $la['FUEL_LEVEL']; ?></option>
								<option value="fuelcons"><?php echo $la['FUEL_CONSUMPTION']; ?></option>
								<option value="acc"><?php echo $la['IGNITION_ACC']; ?></option>
								<option value="odo"><?php echo $la['ODOMETER']; ?></option>
								<option value="pa"><?php echo $la['PASSENGER_ASSIGN']; ?></option>
								<option value="temp"><?php echo $la['TEMPERATURE']; ?></option>
								<option value="ta"><?php echo $la['TRAILER_ASSIGN']; ?></option>
								<option value="cust"><?php echo $la['CUSTOM']; ?></option>
							</select>
						</div>
					</div>
					<div class="row2">
						<div class="width50"><?php echo $la['PARAMETER']; ?></div>
						<div class="width50"><select id="dialog_settings_object_sensor_param" class="select width100" onchange="settingsObjectSensorResultPreview();"></select></div>
					</div>
					<div class="row2">
						<div class="width50"><?php echo $la['DATA_LIST']; ?></div>
						<div class="width50"><input id="dialog_settings_object_sensor_data_list" type="checkbox" class="checkbox" /></div>
					</div>
					<div class="row2">
						<div class="width50"><?php echo $la['POPUP']; ?></div>
						<div class="width50"><input id="dialog_settings_object_sensor_popup" type="checkbox" class="checkbox" /></div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="title-block"><?php echo $la['RESULT']; ?></div>
					<div class="row2">
						<div class="width50"><?php echo $la['TYPE']; ?></div>
						<div class="width50"><select id="dialog_settings_object_sensor_result_type" class="select width100" onchange="settingsObjectSensorResultType();"></select></div>
					</div>
					<div class="row2">
						<div class="width50"><span><?php echo $la['UNITS_OF_MEASUREMENT']; ?></span></div>
						<div class="width50"><input id="dialog_settings_object_sensor_units" class="inputbox" type="text" value="" maxlength="10"></div>
					</div>
					<div class="row2">
						<div class="width50"><?php echo $la['IF_SENSOR_1']; ?></div>
						<div class="width50"><input id="dialog_settings_object_sensor_text_1" class="inputbox width100" type="text" value="" maxlength="15"></div>
					</div>
					<div class="row2">
						<div class="width50"><?php echo $la['IF_SENSOR_0']; ?></div>
						<div class="width50"><input id="dialog_settings_object_sensor_text_0" class="inputbox width100" type="text" value="" maxlength="15"></div>
					</div>
					<div class="row2">
						<div class="width50"><?php echo $la['FORMULA']; ?></div>
						<div class="width50">
							<input id="dialog_settings_object_sensor_formula" class="inputbox" type="text" value="" placeholder="(X+1)/2*3"/>
						</div>
					</div>
					<div class="row2">
						<div class="width50"><?php echo $la['LOWEST_VALUE']; ?></div>
						<div class="width50"><input id="dialog_settings_object_sensor_lv" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="10"></div>
					</div>
					<div class="row2">
						<div class="width50"><?php echo $la['HIGHEST_VALUE']; ?></div>
						<div class="width50"><input id="dialog_settings_object_sensor_hv" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="10"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="width50 block">
			<div class="container last">
				<div class="row">
					<div class="title-block"><?php echo $la['CALIBRATION']; ?></div>
					<div class="row2">
						<div id="settings_object_sensor_calibration_list">
							<table id="settings_object_sensor_calibration_list_grid"></table>
						</div>
					</div>
					<div class="row2">
						<div class="width10">
							X
						</div>
						<div class="width28">
							<input id="settings_object_sensor_calibration_x" onkeypress="return isNumberKey(event);" class="inputbox width90" type="text" value="" maxlength="10" disabled>
						</div>
						<div class="width10">
							Y
						</div>
						<div class="width28">
							<input id="settings_object_sensor_calibration_y" onkeypress="return isNumberKey(event);" class="inputbox width90" type="text" value="" maxlength="10" disabled>
						</div>
						<div class="width24">
							<input id="settings_object_sensor_calibration_add" style="min-width: 0;" class="width100 button icon-new icon" type="button" value="<?php echo $la['ADD']; ?>" onclick="settingsObjectSensorCalibrationAdd();" disabled />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="width100 block">
			<div class="title-block"><?php echo $la['SENSOR_RESULT_PREVIEW']; ?></div>
			<div class="width45 block">
				<div class="container">
					<div class="row2">
						<div class="width50"><?php echo $la['CURRENT_VALUE']; ?></div>
						<div class="width50">
							<input id="dialog_settings_object_sensor_cur_param_val" class="inputbox" type="text" value="" readonly/>
						</div>
					</div>
				</div>
			</div>
			<div class="width10 block">
				<div class="container">
					<div class="row2">
						<input style="min-width: 0;" class="width100 button icon-arrow-right no-text icon" type="button" onclick="settingsObjectSensorResultPreview();" />
					</div>
				</div>
			</div>
			<div class="width45 block">
				<div class="container last">
					<div class="row2">
						<div class="width50"><?php echo $la['RESULT']; ?></div>
						<div class="width50">
							<input id="dialog_settings_object_sensor_result_preview" class="inputbox" type="text" value="" readonly/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<center>
		<input class="button icon-save icon" type="button" onclick="settingsObjectSensorProperties('save');" value="<?php echo $la['SAVE']; ?>" />&nbsp;
		<input class="button icon-close icon" type="button" onclick="settingsObjectSensorProperties('cancel');" value="<?php echo $la['CANCEL']; ?>" />
	</center>
</div>

<div id="dialog_settings_object_service_properties" title="<?php echo $la['SERVICE_PROPERTIES'];?>">
	<div class="row">
		<div class="title-block"><?php echo $la['SERVICE']; ?></div>
		<div class="block width50">
			<div class="container">
				<div class="row2">
					<div class="width50"><?php echo $la['NAME']; ?></div>
					<div class="width50"><input id="dialog_settings_object_service_name" class="inputbox" type="text" value="" maxlength="30"></div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['DATA_LIST']; ?></div>
					<div class="width10"><input id="dialog_settings_object_service_data_list" type="checkbox" class="checkbox" /></div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['POPUP']; ?></div>
					<div class="width10"><input id="dialog_settings_object_service_popup" type="checkbox" class="checkbox" /></div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['ODOMETER_INTERVAL'].' ('.$la["UNIT_DISTANCE"].')'; ?></div>
					<div class="width10"><input id="dialog_settings_object_service_odo" onchange="settingsObjectServiceCheck();" type="checkbox" class="checkbox"/></div>
					<div class="width40"><input id="dialog_settings_object_service_odo_interval" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="15"></div>
				</div>

				<div class="row2">
					<div class="width50"><?php echo $la['ENGINE_HOURS_INTERVAL'].' (h)'; ?></div>
					<div class="width10"><input id="dialog_settings_object_service_engh" onchange="settingsObjectServiceCheck();" type="checkbox" class="checkbox"/></div>
					<div class="width40"><input id="dialog_settings_object_service_engh_interval" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="15"></div>
				</div>

				<div class="row2">
					<div class="width50"><?php echo $la['DAYS_INTERVAL']; ?></div>
					<div class="width10"><input id="dialog_settings_object_service_days" onchange="settingsObjectServiceCheck();" type="checkbox" class="checkbox"/></div>
					<div class="width40"><input id="dialog_settings_object_service_days_interval" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="15"></div>
				</div>
			</div>
		</div>
		<div class="block width50">
			<div class="container last">
				<div class="row2 empty"></div>
				<div class="row2 empty"></div>
				<div class="row2 empty"></div>
				<div class="row2">
					<div class="width50"><?php echo $la['LAST_SERVICE'].' ('.$la["UNIT_DISTANCE"].')'; ?></div>
					<div class="width50"><input id="dialog_settings_object_service_odo_last" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="15"></div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['LAST_SERVICE'].' (h)'; ?></div>
					<div class="width50"><input id="dialog_settings_object_service_engh_last" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="15"></div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['LAST_SERVICE']; ?></div>
					<div class="width50"><input id="dialog_settings_object_service_days_last" readonly class="inputbox inputbox-calendar" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="15"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="title-block"><?php echo $la['TRIGGER_EVENT']; ?></div>
		<div class="block width50">
			<div class="container">
				<div class="row2">
					<div class="width50"><?php  echo $la['ODOMETER_LEFT']. ' ('.$la["UNIT_DISTANCE"].')'; ?></div>
					<div class="width10"><input id="dialog_settings_object_service_odo_left" onchange="settingsObjectServiceCheck();" type="checkbox" class="checkbox"/></div>
					<div class="width40"><input id="dialog_settings_object_service_odo_left_num" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="15"></div>
				</div>
				<div class="row2">
					<div class="width50"><?php  echo $la['ENGINE_HOURS_LEFT']. ' (h)'; ?></div>
					<div class="width10"><input id="dialog_settings_object_service_engh_left" onchange="settingsObjectServiceCheck();" type="checkbox" class="checkbox"/></div>
					<div class="width40"><input id="dialog_settings_object_service_engh_left_num" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="15"></div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['DAYS_LEFT']; ?></div>
					<div class="width10"><input id="dialog_settings_object_service_days_left" onchange="settingsObjectServiceCheck();" type="checkbox" class="checkbox"/></div>
					<div class="width40"><input id="dialog_settings_object_service_days_left_num" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="15"></div>
				</div>
			</div>
		</div>
		<div class="block width50">
			<div class="container last">
				<div class="row2">
					<div class="width50"><?php  echo $la['UPDATE_LAST_SERVICE']; ?></div>
					<div class="width50"><input id="dialog_settings_object_service_update_last" type="checkbox" class="checkbox"/></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="title-block"><?php echo $la['CURRENT_OBJECT_COUNTERS']; ?></div>
		<div class="block width50">
			<div class="container">
				<div class="row2">
					<div class="width50"><?php echo $la['CURRENT_ODOMETER']. ' ('.$la["UNIT_DISTANCE"].')'; ?></div>
					<div class="width50"><input id="dialog_settings_object_service_odo_curr" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="15" disabled></div>
				</div>
				<div class="row2">
					<div class="width50"><?php echo $la['CURRENT_ENGINE_HOURS']. ' (h)'; ?></div>
					<div class="width50"><input id="dialog_settings_object_service_engh_curr" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="15" disabled></div>
				</div>
			</div>
		</div>
	</div>

	<center>
		<input class="button icon-save icon" type="button" onclick="settingsObjectServiceProperties('save');" value="<?php echo $la['SAVE']; ?>" />&nbsp;
		<input class="button icon-close icon" type="button" onclick="settingsObjectServiceProperties('cancel');" value="<?php echo $la['CANCEL']; ?>" />
	</center>
</div>

<div id="dialog_settings_object_custom_field_properties" title="<?php echo $la['CUSTOM_FIELD_PROPERTIES'];?>">
	<div class="row">
		<div class="row2">
			<div class="width40"><?php echo $la['NAME']; ?></div>
			<div class="width60"><input id="dialog_settings_object_custom_field_name" class="inputbox" type="text" maxlength="25"></div>
		</div>
		<div class="row2">
			<div class="width40"><?php echo $la['VALUE']; ?></div>
			<div class="width60"><input id="dialog_settings_object_custom_field_value" class="inputbox" type="text" maxlength="50"></div>
		</div>
		<div class="row2">
			<div class="width40"><?php echo $la['DATA_LIST']; ?></div>
			<div class="width60"><input id="dialog_settings_object_custom_field_data_list" type="checkbox" class="checkbox" /></div>
		</div>
		<div class="row2">
			<div class="width40"><?php echo $la['POPUP']; ?></div>
			<div class="width60"><input id="dialog_settings_object_custom_field_popup" type="checkbox" class="checkbox" /></div>
		</div>
	</div>
	<center>
		<input class="button icon-save icon" type="button" onclick="settingsObjectCustomFieldProperties('save');" value="<?php echo $la['SAVE']; ?>" />&nbsp;
		<input class="button icon-close icon" type="button" onclick="settingsObjectCustomFieldProperties('cancel');" value="<?php echo $la['CANCEL']; ?>" />
	</center>
</div>

<div id="dialog_settings_object_edit_select_icon" title="<?php echo $la['SELECT_ICON'];?>">
	<div id="settings_object_edit_select_icon_tabs">
		<ul>
			<li><a href="#settings_object_edit_select_icon_default_tab"><?php echo $la['DEFAULT']; ?></a></li>
			<li><a href="#settings_object_edit_select_icon_custom_tab"><?php echo $la['CUSTOM']; ?></a></li>
		</ul>
		<div id="settings_object_edit_select_icon_default_tab">
			<div class="row2">
				<div class="icon_selector width100" id="settings_object_edit_select_icon_default_list">
				</div>
			</div>
		</div>
		<div id="settings_object_edit_select_icon_custom_tab">
			<div class="row">
				<div class="row2">
					<div class="icon_selector width100" id="settings_object_edit_select_icon_custom_list">
					</div>
				</div>
			</div>
			<center>
				<input class="button" type="button" value="<?php echo $la['UPLOAD']; ?>" onclick="settingsObjectEditUploadCustomIcon();" />&nbsp;
				<input class="button" type="button" value="<?php echo $la['DELETE_ALL']; ?>" onclick="settingsObjectEditDeleteAllCustomIcon();" />
			</center>
		</div>
	</div>
</div>

<div id="dialog_settings_object_edit" title="<?php echo $la['EDIT_OBJECT'];?>">
	<div id="settings_object">
		<ul>
			<li><a href="#settings_object_main"><?php echo $la['MAIN']; ?></a></li>
			<li><a href="#settings_object_service"><?php echo $la['SERVICE']; ?></a></li>
			<li><a href="#settings_object_icon"><?php echo $la['ICON']; ?></a></li>
			<li><a href="#settings_object_fuel" <?php if ($_SESSION["privileges"] == 'admin') {
                            echo  'style="visibility: hidden;"';
                        } ?>><?php echo $la['FUEL_CONSUMPTION']; ?></a></li>
			<li><a href="#settings_object_accuracy" <?php if ($_SESSION["privileges"] == 'admin') {
                            echo  'style="visibility: hidden;"';
                        } ?>><?php echo $la['ACCURACY']; ?></a></li>
			<li><a href="#settings_object_sensors" <?php if ($_SESSION["privileges"] == 'admin') {
                            echo  'style="visibility: hidden;"';
                        } ?>><?php echo $la['SENSORS']; ?></a></li>
			<li><a href="#settings_object_custom_fields" <?php if ($_SESSION["privileges"] == 'admin') {
                            echo  'style="visibility: hidden;"';
                        } ?>><?php echo $la['CUSTOM_FIELDS']; ?></a></li>
			<li><a href="#settings_object_info" <?php if ($_SESSION["privileges"] == 'admin') {
                            echo  'style="visibility: hidden;"';
                        } ?>><?php echo $la['INFO']; ?></a></li>
		</ul>

		<div id="settings_object_main">
			<div class="row">
				<div class="title-block"><?php echo $la['MAIN']; ?></div>
				<div class="row2">
					<div class="width40"><?php echo $la['NAME']; ?></div>
					<div class="width60"><input id="dialog_settings_object_edit_name" class="inputbox" type="text" value="" maxlength="25"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['IMEI']; ?></div>
					<div class="width60"><input id="dialog_settings_object_edit_imei" class="inputbox" type="text" maxlength="15" disabled></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['TRANSPORT_MODEL']; ?></div>
					<div class="width60"><input id="dialog_settings_object_edit_model" class="inputbox" type="text" value="" maxlength="30"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['VIN']; ?></div>
					<div class="width60"><input id="dialog_settings_object_edit_vin" class="inputbox" type="text" maxlength="20"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['PLATE_NUMBER']; ?></div>
					<div class="width60"><input id="dialog_settings_object_edit_plate_number" class="inputbox" type="text" maxlength="15"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['GROUP']; ?></div>
					<div class="width60"><select id="dialog_settings_object_edit_group" class="select-search width100"></select></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['DRIVER']; ?></div>
					<div class="width60"><select id="dialog_settings_object_edit_driver" class="select-search width100"></select></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['TRAILER']; ?></div>
					<div class="width60"><select id="dialog_settings_object_edit_trailer" class="select-search width100"></select></div>
				</div>
				<div class="row2" <?php if ($_SESSION["privileges"] == 'admin') {
                            echo  'style="visibility: hidden;"';
                        } ?>>
					<div class="width40"><?php echo $la['GPS_DEVICE']; ?></div>
					<div class="width60"><select id="dialog_settings_object_edit_device" class="select-search width100"></select></div>
				</div>
				<div class="row2" <?php if ($_SESSION["privileges"] == 'admin') {
                            echo  'style="visibility: hidden;"';
                        } ?>>
					<div class="width40"><?php echo $la['SIM_CARD_NUMBER']; ?></div>
					<div class="width60"><input id="dialog_settings_object_edit_sim_number" class="inputbox" type="text" value="" maxlength="30"></div>
				</div>
			</div>
			<div class="row">
				<div class="title-block"><?php echo $la['COUNTERS']; ?></div>
				<div class="row2">
					<div class="width40"><?php echo $la['ODOMETER']. ' ('.$la["UNIT_DISTANCE"].')'; ?></div>
					<div class="width19">
						<select id="dialog_settings_object_edit_odometer_type" class="select width100">
							<option value="off"><?php echo $la['OFF']; ?></option>
							<option value="gps">GPS</option>
							<option value="sen"><?php echo $la['SENSOR']; ?></option>
						</select>
					</div>
					<div class="width1"></div>
					<div class="width40">
						<input id="dialog_settings_object_edit_odometer" onkeypress="return isNumberKey(event);" class="inputbox width100" type="text" value="" maxlength="15">
					</div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['ENGINE_HOURS']. ' (h)'; ?></div>
					<div class="width19">
						<select id="dialog_settings_object_edit_engine_hours_type" class="select width100">
							<option value="off"><?php echo $la['OFF']; ?></option>
							<option value="acc">ACC</option>
							<option value="sen"><?php echo $la['SENSOR']; ?></option>
						</select>
					</div>
					<div class="width1"></div>
					<div class="width40">
						<input id="dialog_settings_object_edit_engine_hours" onkeypress="return isNumberKey(event);" class="inputbox width100" type="text" value="" maxlength="15">
					</div>
				</div>
			</div>
		</div>
		<div id="settings_object_icon">
			<div class="row">
				<div class="title-block"><?php echo $la['ICON']; ?></div>
				<div class="row2">
					<div class="width40"><?php echo $la['SHOWN_ICON_ON_MAP']; ?></div>
					<div class="width60">
						<select id="dialog_settings_object_edit_map_icon" class="select width40">
							<option value="arrow"><?php echo $la['ARROW']; ?></option>
							<option value="icon"><?php echo $la['ICON']; ?></option>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['NO_CONNECTION_ARROW_COLOR']; ?></div>
					<div class="width60">
						<select id="dialog_settings_object_edit_arrow_no_connection" class="select width40">
							<?php include("inc/inc_arrow_colors.php"); ?>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['STOPPED_ARROW_COLOR']; ?></div>
					<div class="width60">
						<select id="dialog_settings_object_edit_arrow_stopped" class="select width40">
							<?php include("inc/inc_arrow_colors.php"); ?>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['MOVING_ARROW_COLOR']; ?></div>
					<div class="width60">
						<select id="dialog_settings_object_edit_arrow_moving" class="select width40">
							<?php include("inc/inc_arrow_colors.php"); ?>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['ENGINE_IDLE_ARROW_COLOR']; ?></div>
					<div class="width60">
						<select id="dialog_settings_object_edit_arrow_engine_idle" class="select width40">
							<option value="off"><?php echo $la['OFF']; ?></option>
							<?php include("inc/inc_arrow_colors.php"); ?>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['ICON']; ?></div>
					<div class="width60">
						<a href="#" onclick="settingsObjectEditIcon();">
							<div class="icon_selector" id="dialog_settings_object_edit_icon" style="width:32px; height: 32px;"></div>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="title-block"><?php echo $la['TAIL']; ?></div>
				<div class="row2">
					<div class="width40"><?php echo $la['TAIL_COLOR']; ?></div>
					<div class="width60">
						<input class="color inputbox" style="width:55px" type='text' id='dialog_settings_object_edit_tail_color'/>
					</div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['TAIL_POINTS_QUANTITY']; ?></div>
					<div class="width60">
						<input class="inputbox width40" type='text' id='dialog_settings_object_edit_tail_points' maxlength="4"/>
					</div>
				</div>
			</div>
		</div>
		<div id="settings_object_fuel">
			<div class="row">
				<div class="title-block"><?php echo $la['CALCULATION']; ?></div>
				<div class="row2">
					<div class="width40"><?php echo $la['SOURCE'] ?></div>
					<div class="width60">
						<select id="dialog_settings_object_edit_fcr_source" class="select width40">
							<option value="rates"><?php echo $la['RATES'] ?></option>
							<option value="fuel"><?php echo $la['FUEL_LEVEL'] ?></option>
							<option value="fuelcons"><?php echo $la['FUEL_CONSUMPTION'] ?></option>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['MEASUREMENT'] ?></div>
					<div class="width60">
						<select id="dialog_settings_object_edit_fcr_measurement" class="select width40" onchange="settingsObjectEditSwitchFCRMeasurement();">
							<option value="l100km">l/100km</option>
							<option value="mpg">MPG</option>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width40" id="dialog_settings_object_edit_fcr_cost_label"><?php echo $la['COST_PER_LITER']; ?></div>
					<div class="width60"><input id="dialog_settings_object_edit_fcr_cost" onkeypress="return isNumberKey(event);" class="inputbox width40" type="text" value="" maxlength="5"></div>
				</div>
			</div>
			<div class="row">
				<div class="title-block"><?php echo $la['RATES']; ?></div>
				<div class="row2">
					<div class="width40" id="dialog_settings_object_edit_fcr_summer_label"><?php echo $la['SUMMER_RATE_L100KM']; ?></div>
					<div class="width60"><input id="dialog_settings_object_edit_fcr_summer" onkeypress="return isNumberKey(event);" class="inputbox width40" type="text" value="" maxlength="5"></div>
				</div>
				<div class="row2">
					<div class="width40" id="dialog_settings_object_edit_fcr_winter_label"><?php echo $la['WINTER_RATE_L100KM']; ?></div>
					<div class="width60"><input id="dialog_settings_object_edit_fcr_winter" onkeypress="return isNumberKey(event);" class="inputbox width40" type="text" value="" maxlength="5"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['WINTER_FROM']; ?></div>
					<div class="width60">
						<input readonly class="inputbox-calendar-mmdd inputbox width40" id="dialog_settings_object_edit_fcr_winter_start" type="text" value=""/>
					</div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['WINTER_TO'];?></div>
					<div class="width60">
						<input readonly class="inputbox-calendar-mmdd inputbox width40" id="dialog_settings_object_edit_fcr_winter_end" type="text" value=""/>
					</div>
				</div>
			</div>
		</div>
		<div id="settings_object_accuracy">
			<div class="row">
				<div class="title-block"><?php echo $la['ACCURACY']; ?></div>
				<div class="row2">
					<div class="width65"><?php echo $la['TIME_ADJ_EXPLANATION']; ?></div>
					<div class="width5"></div>
					<div class="width30">
						<select id="settings_object_accuracy_time_adj" class="select width100" onchange="settingsObjectEditSwitchTimeAdj();"/>
							<?php include("inc/inc_time_adj.php"); ?>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width65"><?php echo $la['DETECT_STOPS_USING']; ?></div>
					<div class="width5"></div>
					<div class="width30">
						<select id="settings_object_accuracy_detect_stops" class="select width100"/>
							<option value="gps">GPS</option>
							<option value="acc">ACC</option>
							<option value="gpsacc">GPS + ACC</option>
						</select>
					</div>
				</div>
				<div class="row2">
					<div class="width65"><span class="container"><?php echo $la['MIN_MOVING_SPEED']; ?></span></div>
					<div class="width5"></div>
					<div class="width30"><input id="settings_object_accuracy_moving_speed" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="3"/></div>
				</div>
				<div class="row2">
					<div class="width65"><span class="container"><?php echo $la['MIN_IDLE_SPEED']; ?></span></div>
					<div class="width5"></div>
					<div class="width30"><input id="settings_object_accuracy_idle_speed" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="3"/></div>
				</div>
				<div class="row2">
					<div class="width65"><span class="container"><?php echo $la['MIN_DIFF_BETWEEN_POINTS']; ?></span></div>
					<div class="width5"></div>
					<div class="width30"><input id="settings_object_accuracy_diff_points" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="11"/></div>
				</div>
				<div class="row2">
					<div class="width65"><span class="container"><?php echo $la['MIN_GPSLEV_VALUE']; ?></span></div>
					<div class="width5"></div>
					<div class="width5"><input id="settings_object_accuracy_use_gpslev" type="checkbox" class="checkbox"/></div>
					<div class="width25"><input id="settings_object_accuracy_gpslev" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="2"/></div>
				</div>
				<div class="row2">
					<div class="width65"><span class="container"><?php echo $la['MAX_HDOP_VALUE']; ?></span></div>
					<div class="width5"></div>
					<div class="width5"><input id="settings_object_accuracy_use_hdop" type="checkbox" class="checkbox"/></div>
					<div class="width25"><input id="settings_object_accuracy_hdop" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="2"/></div>
				</div>
				<div class="row2">
					<div class="width65"><span class="container"><?php echo $la['MIN_FUEL_SPEED']; ?></span></div>
					<div class="width5"></div>
					<div class="width30"><input id="settings_object_accuracy_fuel_speed" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="3"/></div>
				</div>
				<div class="row2">
					<div class="width65"><span class="container"><?php echo $la['MIN_FF']; ?></span></div>
					<div class="width5"></div>
					<div class="width30"><input id="settings_object_accuracy_ff" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="2"/></div>
				</div>
				<div class="row2">
					<div class="width65"><span class="container"><?php echo $la['MIN_FT']; ?></span></div>
					<div class="width5"></div>
					<div class="width30"><input id="settings_object_accuracy_ft" onkeypress="return isNumberKey(event);" class="inputbox" type="text" value="" maxlength="2"/></div>
				</div>
			</div>
			<div class="row">
				<div class="title-block"><?php echo $la['OTHER']; ?></div>
				<div class="row2">
					<div class="width65"><span class="container"><?php echo $la['CLEAR_DETECTED_SENSOR_CACHE']; ?></span></div>
					<div class="width5"></div>
					<div class="width30"><input style="width: 100px;" class="button" type="button" onclick="settingsObjectClearDetectedSensorCache();" value="<?php echo $la['CLEAR']; ?>" /></div>
				</div>
			</div>
		</div>

		<div id="settings_object_sensors">
			<div id="settings_object_sensors_list">
			<table id="settings_object_sensor_list_grid"></table>
			<div id="settings_object_sensor_list_grid_pager"></div>
			</div>
		</div>
		<div id="settings_object_service">
			<div id="settings_object_service_list">
			<table id="settings_object_service_list_grid"></table>
			<div id="settings_object_service_list_grid_pager"></div>
			</div>
		</div>
		<div id="settings_object_custom_fields">
			<div id="settings_object_custom_fields_list">
			<table id="settings_object_custom_fields_list_grid"></table>
			<div id="settings_object_custom_fields_list_grid_pager"></div>
			</div>
		</div>
		<div id="settings_object_info">
			<div id="settings_object_info_list">
			<table id="settings_object_info_list_grid"></table>
			<div id="settings_object_info_list_grid_pager"></div>
			</div>
		</div>
	</div>

	<center>
		<input class="button icon-save icon" type="button" onclick="settingsObjectEdit('save');" value="<?php echo $la['SAVE']; ?>" />&nbsp;
		<input class="button icon-close icon" type="button" onclick="settingsObjectEdit('cancel');" value="<?php echo $la['CANCEL']; ?>" />
	</center>
</div>

<div id="dialog_settings_object_duplicate" title="<?php echo $la['DUPLICATE_OBJECT'];?>">
	<div class="row">
		<div class="row2">
			<div class="width30"><?php echo $la['NAME']; ?></div>
			<div class="width70"><input id="dialog_settings_object_duplicate_name" class="inputbox" type="text" maxlength="25"></div>
		</div>
		<div class="row2">
			<div class="width30"><?php echo $la['IMEI']; ?></div>
			<div class="width70"><input id="dialog_settings_object_duplicate_imei" class="inputbox" type="text" maxlength="15"></div>
		</div>
	</div>

	<center>
		<input class="button icon-save icon" type="button" onclick="settingsObjectDuplicate('duplicate');" value="<?php echo $la['DUPLICATE']; ?>" />&nbsp;&nbsp;&nbsp;
		<input class="button icon-close icon" type="button" onclick="settingsObjectDuplicate('cancel');" value="<?php echo $la['CANCEL']; ?>" />
	</center>
</div>

<div id="dialog_settings_object_add" title="<?php echo $la['ADD_OBJECT'];?>" <?php if ($_SESSION["privileges"] != 'super_admin') {
                            echo  'style="visibility: hidden;"';
                        } ?>>
	<div class="row">
		<div class="row2">
			<div class="width30"><?php echo $la['NAME']; ?></div>
			<div class="width70"><input id="dialog_settings_object_add_name" class="inputbox" type="text" maxlength="25"></div>
		</div>
		<div class="row2">
			<div class="width30"><?php echo $la['IMEI']; ?></div>
			<div class="width70"><input id="dialog_settings_object_add_imei" class="inputbox" type="text" maxlength="15"></div>
		</div>
	</div>

	<center>
		<input class="button icon-save icon" type="button" onclick="settingsObjectAdd('add');" value="<?php echo $la['SAVE']; ?>" />&nbsp;
		<input class="button icon-close icon" type="button" onclick="settingsObjectAdd('cancel');" value="<?php echo $la['CANCEL']; ?>" />
	</center>
</div>

<div id="dialog_settings" title="<?php echo $la['SETTINGS']; ?>">
	<div id="settings_main">
	<?php if ($_SESSION["privileges"] == 'viewer') {
                            ?>
		<ul>
			<li><a href="#settings_main_user_interface"><?php echo $la['USER_INTERFACE']; ?></a></li>
			<li><a href="#settings_main_my_account" id="settings_main_my_account_tab"><?php echo $la['MY_ACCOUNT']; ?></a></li>
			<li id="settings_main_objects_tab" <?php if ($_SESSION["privileges"] == 'viewer') {
                                echo  'style="visibility: hidden;"';
                            } ?>><a href="#settings_main_objects"><?php echo $la['OBJECTS']; ?></a></li>
			<li id="settings_main_events_tab" <?php if ($_SESSION["privileges"] == 'viewer') {
                                echo  'style="visibility: hidden;"';
                            } ?>><a href="#settings_main_events"><?php echo $la['EVENTS']; ?></a></li>
			<li id="settings_main_templates_tab" <?php if ($_SESSION["privileges"] == 'viewer') {
                                echo  'style="visibility: hidden;"';
                            } ?>><a href="#settings_main_templates"><?php echo $la['TEMPLATES']; ?></a></li>
			<li id="settings_main_sms_tab" <?php if ($_SESSION["privileges"] == 'viewer') {
                                echo  'style="visibility: hidden;"';
                            } ?>><a href="#settings_main_sms"><?php echo $la['SMS']; ?></a></li>
			<li id="settings_main_subaccounts_tab" <?php if ($_SESSION["privileges"] == 'viewer') {
                                echo  'style="visibility: hidden;"';
                            } ?>><a href="#settings_main_subaccounts"><?php echo $la['SUB_ACCOUNTS']; ?></a></li>
		</ul>
	<?php
                        } elseif ($_SESSION["privileges"] == 'user') {
                            ?>
		<ul>
			<li id="settings_main_events_tab"><a href="#settings_main_events"><?php echo $la['EVENTS']; ?></a></li>
			<li><a href="#settings_main_user_interface"><?php echo $la['USER_INTERFACE']; ?></a></li>
			<li><a href="#settings_main_my_account" id="settings_main_my_account_tab"><?php echo $la['MY_ACCOUNT']; ?></a></li>
			<li id="settings_main_templates_tab" <?php if ($_SESSION["privileges"] == 'user') {
                                echo  'style="visibility: hidden;"';
                            } ?>><a href="#settings_main_templates"><?php echo $la['TEMPLATES']; ?></a></li>
			<li id="settings_main_objects_tab" <?php if ($_SESSION["privileges"] == 'user') {
                                echo  'style="visibility: hidden;"';
                            } ?>><a href="#settings_main_objects"><?php echo $la['OBJECTS']; ?></a></li>
			<li id="settings_main_sms_tab" <?php if ($_SESSION["privileges"] == 'user') {
                                echo  'style="visibility: hidden;"';
                            } ?>><a href="#settings_main_sms"><?php echo $la['SMS']; ?></a></li>
			<li id="settings_main_subaccounts_tab" <?php if ($_SESSION["privileges"] == 'user') {
                                echo  'style="visibility: hidden;"';
                            } ?>><a href="#settings_main_subaccounts"><?php echo $la['SUB_ACCOUNTS']; ?></a></li>
		</ul>
	<?php
                        } elseif ($_SESSION["privileges"] == 'admin') {
                            ?>
		<ul>
			<li id="settings_main_objects_tab"><a href="#settings_main_objects"><?php echo $la['OBJECTS']; ?></a></li>
			<li id="settings_main_events_tab"><a href="#settings_main_events"><?php echo $la['EVENTS']; ?></a></li>
			<li><a href="#settings_main_user_interface"><?php echo $la['USER_INTERFACE']; ?></a></li>
			<li><a href="#settings_main_my_account" id="settings_main_my_account_tab"><?php echo $la['MY_ACCOUNT']; ?></a></li>
			<li id="settings_main_subaccounts_tab"><a href="#settings_main_subaccounts"><?php echo $la['SUB_ACCOUNTS']; ?></a></li>
			<li id="settings_main_templates_tab" <?php if ($_SESSION["privileges"] == 'admin') {
                                echo  'style="visibility: hidden;"';
                            } ?>><a href="#settings_main_templates"><?php echo $la['TEMPLATES']; ?></a></li>
			<li id="settings_main_sms_tab" <?php if ($_SESSION["privileges"] == 'admin') {
                                echo  'style="visibility: hidden;"';
                            } ?>><a href="#settings_main_sms"><?php echo $la['SMS']; ?></a></li>
		</ul>
	<?php
                        } elseif ($_SESSION["privileges"] == 'subuser') {
                            ?>
		<ul>
			<li id="settings_main_events_tab"><a href="#settings_main_events"><?php echo $la['EVENTS']; ?></a></li>
			<li><a href="#settings_main_user_interface"><?php echo $la['USER_INTERFACE']; ?></a></li>
			<li><a href="#settings_main_my_account" id="settings_main_my_account_tab"><?php echo $la['MY_ACCOUNT']; ?></a></li>
			<li id="settings_main_templates_tab" <?php if ($_SESSION["privileges"] == 'subuser') {
                                echo  'style="visibility: hidden;"';
                            } ?>><a href="#settings_main_templates"><?php echo $la['TEMPLATES']; ?></a></li>
			<li id="settings_main_objects_tab" <?php if ($_SESSION["privileges"] == 'subuser') {
                                echo  'style="visibility: hidden;"';
                            } ?>><a href="#settings_main_objects"><?php echo $la['OBJECTS']; ?></a></li>
			<li id="settings_main_sms_tab" <?php if ($_SESSION["privileges"] == 'subuser') {
                                echo  'style="visibility: hidden;"';
                            } ?>><a href="#settings_main_sms"><?php echo $la['SMS']; ?></a></li>
			<li id="settings_main_subaccounts_tab" <?php if ($_SESSION["privileges"] == 'subuser') {
                                echo  'style="visibility: hidden;"';
                            } ?>><a href="#settings_main_subaccounts"><?php echo $la['SUB_ACCOUNTS']; ?></a></li>
		</ul>
	<?php
                        } elseif ($_SESSION["privileges"] == 'super_admin') {
                            ?>
		<ul>
			<li id="settings_main_objects_tab"><a href="#settings_main_objects"><?php echo $la['OBJECTS']; ?></a></li>
			<li id="settings_main_events_tab"><a href="#settings_main_events"><?php echo $la['EVENTS']; ?></a></li>
			<li id="settings_main_templates_tab"><a href="#settings_main_templates"><?php echo $la['TEMPLATES']; ?></a></li>
			<li id="settings_main_sms_tab"><a href="#settings_main_sms"><?php echo $la['SMS']; ?></a></li>
			<li><a href="#settings_main_user_interface"><?php echo $la['USER_INTERFACE']; ?></a></li>
			<li><a href="#settings_main_my_account" id="settings_main_my_account_tab"><?php echo $la['MY_ACCOUNT']; ?></a></li>
			<li id="settings_main_subaccounts_tab"><a href="#settings_main_subaccounts"><?php echo $la['SUB_ACCOUNTS']; ?></a></li>
		</ul>
	<?php
                        } ?>
		<div id="settings_main_objects" <?php if ($_SESSION["privileges"] == 'viewer' || $_SESSION["privileges"] == 'user') {
                            echo  'style="visibility: hidden;"';
                        } ?>>
			<div class="info">
				<?php
                    if ($_SESSION["manager_id"] == 0) {
                        $obj_add = $_SESSION["obj_add"];
                        $obj_limit = $_SESSION["obj_limit"];
                        $obj_limit_num = $_SESSION["obj_limit_num"];
                        $obj_days = $_SESSION["obj_days"];
                        $obj_days_dt = $_SESSION["obj_days_dt"];

                        if ($obj_add == 'true') {
                            if (($obj_limit == 'true') && ($obj_days == 'true')) {
                                echo $la['YOU_CAN_ADD'].' '.$obj_limit_num.' '.$la['OBJECTS_TILL'].' '.$obj_days_dt.'.';
                            }

                            if (($obj_limit == 'true') && ($obj_days == 'false')) {
                                echo $la['YOU_CAN_ADD'].' '.$obj_limit_num.' '.strtolower($la['OBJECTS']).'.';
                            }

                            if (($obj_limit == 'false') && ($obj_days == 'true')) {
                                echo $la['YOU_CAN_ADD_UNLIMITED_NUMBER_OF_OBJECTS_TILL'].' '.$obj_days_dt.'.';
                            }

                            if (($obj_limit == 'false') && ($obj_days == 'false')) {
                                echo $la['YOU_CAN_ADD_UNLIMITED_NUMBER_OF_OBJECTS'];
                            }
                        } elseif ($obj_add == 'false') {
                            echo $la['CONTACT_ADMIN_IF_YOU_WANT_TO_DO_ANY_CHANGES'];
                        } elseif ($obj_add == 'trial') {
                            echo sprintf($la['NEWLY_ADDED_OBJECTS_CAN_BE_USED_FOR'], $gsValues['OBJ_DAYS_TRIAL']);
                        }
                    } else {
                        echo $la['CONTACT_ADMIN_IF_YOU_WANT_TO_DO_ANY_CHANGES'];
                    }

                    if ($_SESSION["billing"] == true) {
                        echo ' ';
                        echo sprintf($la['ADDITIONAL_PLANS_CAN_BE_PURCHASED_VIA_BILLING_SYSTEM'], 'billingOpen();');
                    }
                ?>
			</div>
			<div id="settings_main_objects_groups_drivers">
			<?php if ($_SESSION["privileges"] != 'super_admin') { ?>
				<ul>
					<li><a href="#settings_main_object_group_list"><?php echo $la['GROUPS']; ?></a></li>
					<li><a href="#settings_main_object_driver_list"><?php echo $la['DRIVERS']; ?></a></li>
					<li><a href="#settings_main_object_passenger_list"><?php echo $la['PASSENGERS']; ?></a></li>
					<li><a href="#settings_main_object_trailer_list"><?php echo $la['TRAILERS']; ?></a></li>
					<li <?php if ($_SESSION["privileges"] != 'super_admin') {
                            echo  'style="visibility: hidden;"';
                        } ?>><a href="#settings_main_object_list"><?php echo $la['OBJECTS']; ?></a></li>
				</ul>
			<?php } else { ?>
				<ul>
					<li><a href="#settings_main_object_list"><?php echo $la['OBJECTS']; ?></a></li>
					<li><a href="#settings_main_object_group_list"><?php echo $la['GROUPS']; ?></a></li>
					<li><a href="#settings_main_object_driver_list"><?php echo $la['DRIVERS']; ?></a></li>
					<li><a href="#settings_main_object_passenger_list"><?php echo $la['PASSENGERS']; ?></a></li>
					<li><a href="#settings_main_object_trailer_list"><?php echo $la['TRAILERS']; ?></a></li>
				</ul>
			<?php } ?>
				<div id="settings_main_object_list" <?php if ($_SESSION["privileges"] != 'super_admin') {
                            echo  'style="visibility: hidden;"';
                        } ?>>
					<table id="settings_main_object_list_grid"></table>
					<div id="settings_main_object_list_grid_pager"></div>
				</div>
				<div id="settings_main_object_group_list">
					<table id="settings_main_object_group_list_grid"></table>
					<div id="settings_main_object_group_list_grid_pager"></div>
				</div>
				<div id="settings_main_object_driver_list">
					<table id="settings_main_object_driver_list_grid"></table>
					<div id="settings_main_object_driver_list_grid_pager"></div>
				</div>
				<div id="settings_main_object_passenger_list">
					<table id="settings_main_object_passenger_list_grid"></table>
					<div id="settings_main_object_passenger_list_grid_pager"></div>
				</div>
				<div id="settings_main_object_trailer_list">
					<table id="settings_main_object_trailer_list_grid"></table>
					<div id="settings_main_object_trailer_list_grid_pager"></div>
				</div>
			</div>
		</div>
		<div id="settings_main_events" <?php if ($_SESSION["privileges"] == 'viewer') {
                    echo  'style="visibility: hidden;"';
                } ?>>
			<div id="settings_main_events_event_list">
				<table id="settings_main_events_event_list_grid"></table>
				<div id="settings_main_events_event_list_grid_pager"></div>
			</div>
		</div>
		<div id="settings_main_templates" <?php if ($_SESSION["privileges"] == 'viewer') {
                    echo  'style="visibility: hidden;"';
                } ?>>
			<div id="settings_main_templates_template_list">
				<table id="settings_main_templates_template_list_grid"></table>
				<div id="settings_main_templates_template_list_grid_pager"></div>
			</div>
		</div>

		<div id="settings_main_sms" <?php if ($_SESSION["privileges"] != 'super_admin') {
                    echo  'style="visibility: hidden;"';
                } ?>>
			<div class="controls">
				<input class="button panel icon-save icon float-right" type="button" onclick="settingsSave();" value="<?php echo $la['SAVE']; ?>">
			</div>

			<div class="row">
				<div class="title-block"><?php echo $la['SMS_GATEWAY']; ?></div>
				<div class="row2">
					<div class="width30"><?php echo $la['ENABLE_SMS_GATEWAY']; ?></div>
					<div class="width25"><input id="settings_main_sms_gateway" type="checkbox" class="checkbox"/></div>
				</div>
				<div class="row2">
					<div class="width30"><?php echo $la['SMS_GATEWAY_TYPE']; ?></div>
					<div class="width25">
						<select id="settings_main_sms_gateway_type" class="select width100" onchange="settingsSMSGatewaySwitchType();">
							<option value="app" selected><?php echo $la['MOBILE_APPLICATION'];?></option>
							<option value="http">HTTP</option>
						</select>
					</div>
				</div>
			</div>

			<div id="settings_main_sms_app">
				<div class="row">
					<div class="title-block"><?php echo $la['MOBILE_APPLICATION'];?></div>
					<div class="row"><?php echo sprintf($la['SMS_GATEWAY_MOBILE_APPLICATION_EXPLANATION'], $gsValues['URL_SMS_GATEWAY_APP']); ?></div>
					<div class="row2">
						<div class="width30"><?php echo $la['SMS_GATEWAY_IDENTIFIER']; ?></div>
						<div class="width25">
							<input class="inputbox" id="settings_main_sms_gateway_identifier" readonly />
						</div>
					</div>
					<div class="row2">
						<div class="width30"><?php echo $la['TOTAL_SMS_IN_QUEUE_TO_SEND']; ?></div>
						<div class="width10" id="settings_main_sms_gateway_total_in_queue">0</div>
						<div class="width1"></div>
						<div class="width14">
							<input class="button width100" type="button" onclick="settingsSMSGatewayClearQueue();" value="<?php echo $la['CLEAR']; ?>" />
						</div>
					</div>
				</div>
			</div>

			<div id="settings_main_sms_http" style="display: none;">
				<div class="row">
					<div class="title-block">HTTP</div>
					<div class="row"><?php echo $la['SMS_GATEWAY_EXPLANATION']; ?></div>
					<div class="row"><?php echo $la['SMS_GATEWAY_EXAMPLE']; ?></div>
					<div class="row2">
						<div class="width30"><?php echo $la['SMS_GATEWAY_URL']; ?></div>
						<div class="width70">
							<textarea id="settings_main_sms_gateway_url" style="height: 75px;" class="inputbox width100" maxlength="2048" placeholder="<?php echo $la['EXAMPLE_SHORT'].' '.$la['HTTP_FULL_ADDRESS_HERE']; ?>"/></textarea>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="title-block"><?php echo $la['VARIABLES']; ?></div>
					<div class="row"><?php echo $la['VAR_SMS_GATEWAY_NUMBER']; ?></div>
					<div class="row"><?php echo $la['VAR_SMS_GATEWAY_MESSAGE']; ?></div>
				</div>
			</div>
		</div>

		<div id="settings_main_user_interface">
			<div class="controls">
				<input class="button panel icon-save icon" type="button" onclick="settingsSave();" value="<?php echo $la['SAVE']; ?>">
			</div>

			<div class="scroll-y">
				<div class="row" <?php if ($_SESSION["privileges"] != 'super_admin') { echo  'style="visibility: hidden;"'; } ?>>
					<div class="title-block"></div>
					<div class="row2">
						<div class="width40"><?php echo $la['NEW_CHAT_MESSAGE_SOUND_ALERT']; ?></div>
						<div class="width25">
							<select id="settings_main_chat_notify_sound_file" class="select width100"/>
							<?php
                                echo '<option value="0">'.$la['NO_SOUND'].'</option>';

                                $sound_files = getFileList('snd');
                                foreach ($sound_files as $value) {
                                    if ($value != '') {
                                        echo '<option value="'.$value.'">'.$value.'</option>';
                                    }
                                }
                            ?>
							</select>
						</div>
						<div class="width1"></div>
						<div class="width20">
							<input class="button" type="button" onclick="settingsChatPlaySound();" value="<?php echo $la['PLAY']; ?>" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="title-block"><?php echo $la['MAP']; ?></div>
					<div class="row2">
						<div class="width40"><?php echo $la['MAP_STARTUP_POSITION']; ?></div>
						<div class="width25">
							<select id="settings_main_map_startup_possition" class="select width100">
								<option value="default"><?php echo $la['DEFAULT'];?></option>
								<option value="last"><?php echo $la['REMEMBER_LAST'];?></option>
								<option value="fit"><?php echo $la['FIT_OBJECTS'];?></option>
							</select>
						</div>
					</div>
					<div class="row2">
						<div class="width40"><?php echo $la['MAP_ICON_SIZE']; ?></div>
						<div class="width25">
							<select id="settings_main_map_icon_size" class="select width100">
								<option value="1">100%</option>
								<option value="1.25">125%</option>
								<option value="1.5">150%</option>
								<option value="1.75">175%</option>
								<option value="2">200%</option>
							</select>
						</div>
					</div>
					<div class="row2">
						<div class="width40"><?php echo $la['HISTORY_ROUTE_COLOR']; ?></div>
						<div class="width30"><input class="color inputbox" style="width:55px" type='text' id='settings_main_history_route_color'/></div>
					</div>
					<div class="row2">
						<div class="width40"><?php echo $la['HISTORY_ROUTE_HIGHLIGHT_COLOR']; ?></div>
						<div class="width30"><input class="color inputbox" style="width:55px" type='text' id='settings_main_history_route_highlight_color'/></div>
					</div>
				</div>
				<div class="row">
					<div class="title-block"><?php echo $la['GROUPS']; ?></div>
					<div class="row2">
						<div class="width40"><?php echo $la['COLLAPSED']; ?></div>
						<div class="width60">
							<div class="margin-right-3"><input id="settings_main_groups_collapsed_objects" type="checkbox" class="checkbox" /></div>
							<div class="margin-right-3"><?php echo $la['OBJECTS']; ?></div>
							<div class="margin-right-3"><input id="settings_main_groups_collapsed_markers" type="checkbox" class="checkbox" /></div>
							<div class="margin-right-3"><?php echo $la['MARKERS']; ?></div>
							<div class="margin-right-3"><input id="settings_main_groups_collapsed_routes" type="checkbox" class="checkbox" /></div>
							<div class="margin-right-3"><?php echo $la['ROUTES']; ?></div>
							<div class="margin-right-3"><input id="settings_main_groups_collapsed_zones" type="checkbox" class="checkbox" /></div>
							<div class="margin-right-3"><?php echo $la['ZONES']; ?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="title-block"><?php echo $la['OBJECT_LIST']; ?></div>
					<div class="row2">
						<div class="width40"><?php echo $la['DETAILS']; ?></div>
						<div class="width25">
							<select id="settings_main_od" class="select width100">
								<option value=""><?php echo $la['TIME_POSITION'];?></option>
								<option value="server"><?php echo $la['TIME_SERVER'];?></option>
								<option value="status"><?php echo $la['STATUS'];?></option>
							</select>
						</div>
					</div>
					<div class="row2">
						<div class="width40"><?php echo $la['NO_CONNECTION_COLOR']; ?></div>
						<div class="width4">
							<input id="settings_main_ohc_no_connection" type="checkbox" class="checkbox"/>
						</div>
						<div class="width30"><input class="color inputbox" style="width:55px" type='text' id='settings_main_ohc_no_connection_color'/></div>
					</div>
					<div class="row2">
						<div class="width40"><?php echo $la['STOPPED_COLOR']; ?></div>
						<div class="width4">
							<input id="settings_main_ohc_stopped" type="checkbox" class="checkbox"/>
						</div>
						<div class="width30"><input class="color inputbox" style="width:55px" type='text' id='settings_main_ohc_stopped_color'/></div>
					</div>
					<div class="row2">
						<div class="width40"><?php echo $la['MOVING_COLOR']; ?></div>
						<div class="width4">
							<input id="settings_main_ohc_moving" type="checkbox" class="checkbox"/>
						</div>
						<div class="width30"><input class="color inputbox" style="width:55px" type='text' id='settings_main_ohc_moving_color'/></div>
					</div>
					<div class="row2">
						<div class="width40"><?php echo $la['ENGINE_IDLE_COLOR']; ?></div>
						<div class="width4">
							<input id="settings_main_ohc_engine_idle" type="checkbox" class="checkbox"/>
						</div>
						<div class="width30"><input class="color inputbox" style="width:55px" type='text' id='settings_main_ohc_engine_idle_color'/></div>
					</div>
				</div>
				<div class="row">
					<div class="title-block"><?php echo $la['OTHER']; ?></div>
					<div class="row2">
						<div class="width40"><?php echo $la['LANGUAGE']; ?></div>
						<div class="width25">
							<select id="settings_main_language" class="select width100">
								<?php echo getLanguageList(); ?>
							</select>
						</div>
					</div>
					<div class="row2" <?php if ($_SESSION["privileges"] != 'super_admin') {
                                echo  'style="visibility: hidden;"';
                            } ?>>
						<div class="width40"><?php echo $la['UNIT_OF_DISTANCE']; ?></div>
						<div class="width25">
							<select id="settings_main_distance_unit" class="select width100">
								<option value="km"><?php echo $la['KILOMETER'];?></option>
								<option value="mi"><?php echo $la['MILE'];?></option>
								<option value="nm"><?php echo $la['NAUTICAL_MILE'];?></option>
							</select>
						</div>
					</div>
					<div class="row2" <?php if ($_SESSION["privileges"] != 'super_admin') {
                                echo  'style="visibility: hidden;"';
                            } ?>>
						<div class="width40"><?php echo $la['UNIT_OF_CAPACITY']; ?></div>
						<div class="width25">
							<select id="settings_main_capacity_unit" class="select width100">
								<option value="l"><?php echo $la['LITER'];?></option>
								<option value="g"><?php echo $la['GALLON'];?></option>
							</select>
						</div>
					</div>
					<div class="row2" <?php if ($_SESSION["privileges"] != 'super_admin') {
                                echo  'style="visibility: hidden;"';
                            } ?>>
						<div class="width40"><?php echo $la['UNIT_OF_TEMPERATURE']; ?></div>
						<div class="width25">
							<select id="settings_main_temperature_unit" class="select width100">
								<option value="c"><?php echo $la['CELSIUS'];?></option>
								<option value="f"><?php echo $la['FAHRENHEIT'];?></option>
							</select>
						</div>
					</div>
					<div class="row2" <?php if ($_SESSION["privileges"] != 'super_admin') {
                                echo  'style="visibility: hidden;"';
                            } ?>>
						<div class="width40"><?php echo $la['CURRENCY']; ?></div>
						<div class="width25">
							<input id="settings_main_currency" class="inputbox width100" type="text" value="" maxlength="3">
						</div>
					</div>
					<div class="row2">
						<div class="width40"><?php echo $la['TIMEZONE']; ?></div>
						<div class="width25">
							<select id="settings_main_timezone" class="select width100">
								<?php include("inc/inc_timezones.php"); ?>
							</select>
						</div>
					</div>
					<div class="row2" <?php if ($_SESSION["privileges"] != 'super_admin') {
                                echo  'style="visibility: hidden;"';
                            } ?>>
						<div class="width40"><?php echo $la['DAYLIGHT_SAVING_TIME']; ?></div>
						<div class="width4">
							<input id="settings_main_dst" type="checkbox" class="checkbox" onchange="settingsCheck();"/>
						</div>
						<div class="width10">
							<input readonly class="inputbox-calendar-mmdd inputbox width100" id="settings_main_dst_start_mmdd" type="text" value=""/>
						</div>
						<div class="width1"></div>
						<div class="width10">
							<select id="settings_main_dst_start_hhmm" class="select width100">
								<?php include("inc/inc_dt.hours_minutes.php"); ?>
							</select>
						</div>
						<div class="width2 center-middle">-</div>
						<div class="width10">
							<input readonly class="inputbox-calendar-mmdd inputbox width100" id="settings_main_dst_end_mmdd" type="text" value=""/>
						</div>
						<div class="width1"></div>
						<div class="width10">
							<select id="settings_main_dst_end_hhmm" class="select width100">
								<?php include("inc/inc_dt.hours_minutes.php"); ?>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="settings_main_my_account">
			<div class="controls">
				<input class="button panel icon-save icon" type="button" onclick="settingsSave();" value="<?php echo $la['SAVE']; ?>">
			</div>
			<div class="row">
				<div class="title-block"><?php echo $la['CONTACT_INFO']; ?></div>
				<div class="row2">
					<div class="width40"><?php echo $la['NAME_SURNAME']; ?></div>
					<div class="width60"><input class="inputbox" id="settings_main_name_surname"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['COMPANY']; ?></div>
					<div class="width60"><input class="inputbox" id="settings_main_company"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['ADDRESS']; ?></div>
					<div class="width60"><input class="inputbox" id="settings_main_address"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['POST_CODE']; ?></div>
					<div class="width60"><input class="inputbox" id="settings_main_post_code"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['CITY']; ?></div>
					<div class="width60"><input class="inputbox" id="settings_main_city"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['COUNTRY_STATE']; ?></div>
					<div class="width60"><input class="inputbox" id="settings_main_country"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['PHONE_NUMBER_1']; ?></div>
					<div class="width60"><input class="inputbox" id="settings_main_phone1"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['PHONE_NUMBER_2']; ?></div>
					<div class="width60"><input class="inputbox" id="settings_main_phone2"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['EMAIL']; ?></div>
					<div class="width60"><input class="inputbox" id="settings_main_email"></div>
				</div>
			</div>
			<div class="row">
				<div class="title-block"><?php echo $la['CHANGE_PASSWORD']; ?></div>
				<div class="row2">
					<div class="width40"><?php echo $la['OLD_PASSWORD']; ?></div>
					<div class="width60"><input class="inputbox" type="password" id="settings_main_old_password" maxlength=\"20\"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['NEW_PASSWORD']; ?></div>
					<div class="width60"><input class="inputbox" type="password" id="settings_main_new_password" maxlength=\"20\"></div>
				</div>
				<div class="row2">
					<div class="width40"><?php echo $la['REPEAT_NEW_PASSWORD']; ?></div>
					<div class="width60"><input class="inputbox" type="password" id="settings_main_new_password_rep" maxlength=\"20\"></div>
				</div>
			</div>
		</div>

		<div id="settings_main_subaccounts">
			<div class="info">
				<?php echo $la['SUB_ACCOUNTS_CAN_SPLIT_THIS_ACCOUNT_INTO_MULTIPLE_SMALLER_ACCOUNTS']; ?>
			</div>
			<div id="settings_main_subaccount_list">
				<table id="settings_main_subaccount_list_grid"></table>
				<div id="settings_main_subaccount_list_grid_pager"></div>
			</div>
		</div>
	</div>
</div>
