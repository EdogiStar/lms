<?php
include('dbcon.php');
include('session.php');
if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	if (empty($name) || empty($email) || empty($subject) || empty($phone) || empty($message)) {
		$error = 'All fields are required';
		header("location: contact.php?error=".$error);
	}else{

	}	
	$sendMessage = mysqli_query($conn,"insert into contact (contact_name,contact_email,contact_subject,contact_phone,contact_message) value('$name', '$email','$subject','$phone','$message')")or die(mysqli_error());
	if ($sendMessage) {
			header("location: message_sent.php");
	}else{
		$error = 'An error occured, try again later';
		header("location: contact.php?error=".$error);
	}
	
}

?>