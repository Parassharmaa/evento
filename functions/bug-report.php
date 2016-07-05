<?php
	if (empty($_POST['name'])  || empty($_POST['email']) || empty($_POST['contact']) || empty($_POST['message'])) {
		echo "Please fill all the fields";	
		
	}
elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  echo "Please enter a valid EmailId"; 
}
	else {
  	$name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "mail2paras.s@gmail.com";
    $subject = "Message From Evento";
    $from = $email;
    $headers = $name."\nEmail:".$email;
    if(mail($to,$subject,$message,$headers)){
       echo true;   
    }

    else {
		echo "Error ocurred";	
   }
}





?>

