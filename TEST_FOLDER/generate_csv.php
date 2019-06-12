<?php
ini_set("display_errors", '0');

$report_file_name = "/tmp/support_ticket_detailed_report.csv";

#$conn = mysql_connect('adda-live.caluw6k4krmp.ap-southeast-1.rds.amazonaws.com', 'dejavulaalee', 'sharpscroll_1005');
#mysql_select_db('shahenshah');

#$sql = "select help_category, help_id, help_apt_id, help_open_date, help_last_updated, help_status, help_category, help_champion_id, 
#concat(owner_firstname, ' ', owner_lastname) as owner_name, apt_name from shahenshah.connect_help, gatekeeper.adda_owner, gatekeeper.adda_apt where help_open_date>'2014-04-01' and help_open_date<'2016-04-01' and help_status>-1 and help_apt_id = apt_id and help_champion_id = owner_id";

#$res = mysql_query($sql);

$headers = "Ticket No, Ticket Open Date, Ticket Close Date, Last Update Date, Apt Name, Ticket Category, Ticket Status, Support Champ Name\n";
file_put_contents($report_file_name, $headers);
#while($row = mysql_fetch_assoc($res)) {
#	$ticket_no = $row['help_id'];
#	$ticket_open_date = $row['help_open_date'];
#	$ticket_close_date = "";
#	switch($row['help_status']) {
#		case 1:
#			$ticket_status = "New";
#			break;
#		case 2:
#			$ticket_status = "In-Progress";
#			break;
#		case 3:
#			$ticket_status = "On-Hold";
#			break;
#		case 4:
#			$ticket_status = "Closed";
#			$ticket_close_date = $row['help_last_updated'];
#			break;
#		default:
#			$ticket_status = "Not Available";
#	}

#	$last_update_date = $row['help_last_updated'];
#	$apt_name = $row['apt_name'];
#	$ticket_category = $row['help_category'];
#	$ticket_champ_name = $row['owner_name'];
$ticket_no = 1;
$ticket_open_date = 10-03-2019; 
$ticket_close_date = 11-03-2019;
$last_update_date = 11-03-2019;
$apt_name = 'test';
$ticket_category = 'test';
$ticket_status = 'fixed'; 
$ticket_champ_name = 'tes';
	$data = $ticket_no . ',' . $ticket_open_date . ',' . $ticket_close_date . ',' . $last_update_date . ',"' . $apt_name . '","' . $ticket_category . '",' . $ticket_status . ',"'. $ticket_champ_name ."\"\n";
	file_put_contents($report_file_name, $data, FILE_APPEND);
#}

