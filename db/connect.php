<?php
    
	$host="localhost";
    $user="root";
    $pass="";
    $db= "event_manager";
    $db= @new mysqli($host,$user,$pass,$db);
 	
	
    if ($db->connect_error) {
     exit("<center style='font-size:20px'>Cannot connect to database.<center>");   
    }
?>
