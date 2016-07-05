<?php 
	require_once('../db/connect.php');

	if (empty($_POST['caterer-name'])) {
		
		echo 0;	
		
	}else {
    $name = addslashes($_POST['caterer-name']);
	$email = addslashes($_POST['caterer-email']);
	$number = addslashes($_POST['caterer-number']);
	$address = addslashes($_POST['caterer-address']);
	$token  = $_POST['token'];
	
	$query = "UPDATE em_caterer
        SET
	   		caterer_name='$name',
	   		caterer_number = '$number',
			caterer_email= '$email',
            caterer_address= '$address'
           
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