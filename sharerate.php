<?php
session_start();
if($_SESSION["sesvar"])
{
	$sesvar=$_SESSION["sesvar"];
	$sid=$_POST['sid'];
	$rate=$_POST['rate'];
	$rate++;
	$con = mysqli_connect("localhost","levin","","levin");
	$query="UPDATE share SET rate='$rate' WHERE sid='$sid'";
	$prime=mysqli_query($con,$query);
	header("location:sharepage.php");	
}
else
{
	header("location:signin.html");
}
?>