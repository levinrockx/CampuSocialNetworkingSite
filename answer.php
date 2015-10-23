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
	$answer=$_POST["answer"];
	$qid=$_POST['qid'];
	$atimestamp=time();
	$query="INSERT INTO `answer` (`answer`,`author`,`qid`,`atimestamp`) VALUES ('$answer','$author','$qid','$atimestamp')";
	$prime=mysqli_query($con,$query);
	header("location:questioncorner.php");	
}
else
{
	header("location:signin.html");
}
?>