<?php
	session_start();
	
	$USN1 = $_POST['USN'];
	$password = $_POST['PASSWORD'];
	$confirm = $_POST['repassword'];
	
	$connect = mysqli_connect("localhost", "root", "", 'placement') // Establishing Connection with Server
    or die("Cant Connect to database"); // Selecting Database from Server
	
	if($password == $confirm) {
		if($sql = mysqli_query($connect, "UPDATE `placement`.`plogin` SET `Password` ='$password' WHERE `plogin`.`Username` = '$USN1'"));
		echo "<center>Password Reset Complete</center>";
		session_unset();
	} else
	echo "Update Failed";
?>