<?php
	require('../db/connect.php');
	
	$token = $_POST['token'];
	$query ="DELETE FROM em_events WHERE event_token = '$token'";
	$query1 ="DELETE FROM em_vendors WHERE event_token = '$token'";
	$query2 ="DELETE FROM em_hosts WHERE event_token = '$token'";
	$query3 ="DELETE FROM em_notes WHERE event_token = '$token'";
	$query4 ="DELETE FROM em_venue WHERE event_token = '$token'";
	$query5 ="DELETE FROM em_caterer WHERE event_token = '$token'";

	$result = $db->query($query);
	$result1 = $db->query($query1);
	$result2 = $db->query($query2);
	$result3 = $db->query($query3);
	$result4 = $db->query($query4);
	$result5 = $db->query($query5);
	
	if($result || $result1 || $result2 || $result3 || $result4) {
		echo 1;
	}

	else {
		echo 0;
	}

?>