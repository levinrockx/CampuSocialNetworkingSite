<?php
session_start();
if($_SESSION["sesvar"])
{
	$sesvar=$_SESSION["sesvar"];
	$time=time();
	$share=$_POST['status'];
	$con = mysqli_connect("localhost","levin","","levin");
	$query="INSERT INTO `share` (`share`,`author`,`stimestamp`) VALUES ('$share','$sesvar','$time')";
	$prime=mysqli_query($con,$query);
	header("location:sharepage.php");	
}
else
{
	header("location:signin.html");
}
?>