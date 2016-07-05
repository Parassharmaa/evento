<?php 
	require_once('../db/connect.php');

	if (empty($_POST['venue-name'])) {
		
		echo 0;	
		
	}else {
    $name = addslashes($_POST['venue-name']);
	$email = addslashes($_POST['venue-email']);
	$number = addslashes($_POST['venue-number']);
	$address = addslashes($_POST['venue-address']);
	$token  = $_POST['token'];
	
	$query = "UPDATE em_venue
        SET
	   		venue_name='$name',
	   		venue_number = '$number',
			venue_email= '$email',
            venue_address= '$address'
           
        WHERE event_token = '$token'";
	$result = $db->query($query);
		
	if ($result) {
		echo 1;
	}
		
		else {
			echo "error";
		}
}
?>