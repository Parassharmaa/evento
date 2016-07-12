<?php
	require('../db/connect.php');
 	$idArr = $_POST['checked_id'];
        foreach($idArr as $id){
            $query = "UPDATE em_guests
        SET
	   		event_token='$name'
        WHERE guest_id = '$id'";
			$result = $db->query($query);
        }
       
    
	
	if($result) {
		echo 1;
	}

	else {
		echo 0;
	}

?>