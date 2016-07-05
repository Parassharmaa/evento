<?php 
	require_once('../db/connect.php');

	if (empty($_POST['host-name'])) {
		
		echo 0;	
		
	}else {
    $name = addslashes($_POST['host-name']);
	$email = addslashes($_POST['host-email']);
	$number = addslashes($_POST['host-number']);
	$address = addslashes($_POST['host-address']);
	$token  = $_POST['token'];
	
	$query = "UPDATE em_hosts
        SET
	   		host_name='$name',
	   		host_number = '$number',
			host_email= '$email',
            host_address= '$address'
           
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