<?php
  session_start();
  if($_SESSION["username"]){
    echo "Welcome, ".$_SESSION['username']."!";
  }
   else {
	   header("location: index.php");
}
?>
<?php
$connect = mysqli_connect("localhost", "root", "","placement"); // Establishing Connection with Server
// mysql_select_db("details"); // Selecting Database from Server
if(isset($_POST['submit']))
{
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$USN = $_POST['USN'];
$sun = $_SESSION["username"];
$email = $_POST['Email'];
if($USN !=''||$email !='')
{
	if($USN == $sun)
    {
		if($query = $connect->query("UPDATE `placement`.`hlogin` SET `firstname`='$fname', `lastname`='$lname', `email`='$email', `username`=`$USN`
		WHERE `hlogin`.`USN` = '$USN'"))
			{
			 echo "<center>Data Updated successfully...!!</center>";
			}

		 else echo "<center>FAILED</center>";
}

else{
	echo "<center>You can only use your ID!!</center>";
}
}
}
?>
