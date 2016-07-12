<?php 
	require_once('../db/connect.php');

	if (empty($_POST['guest-name'])) {
		
		echo 0;	
		
	}else {
    $title = addslashes($_POST['guest-title']);
	$name = addslashes($_POST['guest-name']);
	$seat = addslashes($_POST['guest-seat']);
	$phone = addslashes($_POST['guest-phone']);
	$email = addslashes($_POST['guest-email']);
	$address= addslashes($_POST['guest-address']);
	$comment= addslashes($_POST['guest-comment']);
	$token  = $_POST['token'];
	
	$query = "INSERT INTO `em_guests` (`guest_id`, `guest_title1`, `guest_name1`, `guest_seats`, `guest_phone`, `guest_email`, `guest_address`, `guest_notes`, `event_token`) VALUES (NULL, '$title', '$name', '$seat', '$phone', '$email', '$address', '$comment', '$token')";
	$result = $db->query($query);
		
	if ($result) {
		echo 1;
	}
		
		else {
			echo "error";
		}
}
?>