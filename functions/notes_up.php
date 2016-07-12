<?php 
	require_once('../db/connect.php');

	
   	$notes = $_POST['event-notes'];
	$token  = $_POST['token'];
	
	$query = "UPDATE em_notes
        SET
	   		event_notes='$notes'
	   		
           
        WHERE event_token = '$token'";
	$result = $db->query($query);
		
	if ($result) {
		echo 1;
	}
		
		else {
			echo "error";
		}

?>