<?php
$connect = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
mysqli_select_db($connect, "details"); // Selecting Database from Server
if(isset($_POST['update']))
{ 
$Username = $_POST['Fname'];
$Password = $_POST['Lname'];
$Email = $_POST['USN'];
$Question = $_SESSION["username"];
$Answer = $_POST['Num'];


if($USN !=''||$email !='')
{
	if($USN == $sun)
	{
		
	$sql = mysqli_query($connect, "SELECT * FROM `details`.`basicdetails` WHERE `USN`='$USN'");
	if(mysqli_num_rows($sql) == 1)
	{
  
		if($query = mysqli_query($connect, "UPDATE `details`.`basicdetails` SET `FirstName`='$fname', `LastName`='$lname', `Mobile`='$phno', `Email`='$email', `DOB`='$date', `Sem`='$cursem', `Branch`= '$branch', `SSLC`='$per', `PU/Dip`='$puagg', `BE`='$beaggregate', `Backlogs`='$back', `HofBacklogs`='$hisofbk', `DetainYears`='$detyear' ,`Approve`='0'
           WHERE `basicdetails`.`USN` = '$USN'"))
               {
				echo "<center>Data Updated successfully...!!</center>";
               }
	  
            else echo "<center>FAILED</center>";
		
	}	
	else echo "<center>NO record found for update</center>";
	}
else
	echo "<center>enter your usn only</center>";
}
}
?>