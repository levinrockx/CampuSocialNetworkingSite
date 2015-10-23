<?php
session_start();
if($_SESSION["sesvar"])
{
	$sesvar=$_SESSION["sesvar"];
	$con = mysqli_connect("localhost","levin","","levin");
	$query="SELECT fname,lname FROM `user` WHERE uninum='$sesvar'";
	$prime=mysqli_query($con,$query);
	$result=mysqli_fetch_row($prime);
	$author=$result[0].' '.$result[1];
	$time=time();
	$comment=$_POST['comment'];
	$sid=$_POST['sid'];
	$atimestamp=time();
	$query="INSERT INTO `comment` (`comment`,`author`,`sid`,`ctimestamp`) VALUES ('$comment','$author','$sid','$ctimestamp')";
	$prime=mysqli_query($con,$query);
	header("location:sharepage.php");	
}
else
{
	header("location:signin.html");
}
?>