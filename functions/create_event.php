<?php
require_once('../db/connect.php');

	if (empty($_POST['event-name']) ||  empty($_POST['event-type'])  ||  empty($_POST['event-date'])) {
		
		echo 0;	
		
	}


	else {
    $event_name = addslashes($_POST['event-name']);
	$event_type = addslashes($_POST['event-type']);
	$event_date = addslashes($_POST['event-date']);
	$rand= rand(1000,9999);
	$nname =  preg_replace('/\s+/', '', $event_name);
	$event_token = strtolower($rand . "@". $nname);
	
	
	//table name
 	$vendor_table = "vendor_".$event_token;
	$guest_table = "guest_".$event_token;
		
    $query_event= "INSERT INTO `em_events` (`id`, `event_created`, `event_type`, `event_name`, `event_date`, `event_token`) VALUES (NULL, CURRENT_TIMESTAMP, '$event_type', '$event_name', '$event_date', '$event_token')";
		
	$query_host= "INSERT INTO `em_hosts` (`event_token`) VALUES ('$event_token')";
	$query_venue="INSERT INTO `em_venue` (`event_token`) VALUES ('$event_token')";
	$query_notes="INSERT INTO `em_notes` (`event_token`) VALUES ('$event_token')";
	$query_caterer = "INSERT INTO `em_caterer` (`event_token`) VALUES ('$event_token')";
	
		
    $result0=$db->query($query_event);
	$result1=$db->query($query_host);
	$result2=$db->query($query_venue);
	$result3=$db->query($query_notes);
	$result4=$db->query($query_caterer);
	
	
		
    if ($result0 || $result1 || $result2 || $result3 || $result4) {
		echo $event_token;
	} else  {
		echo 'error';
	}	
}





?>