<?php
    if ($_GET["submit"]) {
        $email = $_GET['feedemail'];
		$feedback = $_GET['feedback'];
		$message = "From ".$email."--".$feedback."";
        mail('abhishek.anand228@gmail.com', 'New Feedback', $message);
        header('Location:http://delydish.com/');    
    }
 ?>
