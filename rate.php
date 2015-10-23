<?php
session_start();
if($_SESSION["sesvar"])
{
	$sesvar=$_SESSION["sesvar"];
	$qid=$_POST['qid'];
	$rate=$_POST['rate'];
	$rate++;
	echo $rate;
	$con = mysqli_connect("localhost","levin","","levin");
	$query="UPDATE question SET rate='$rate' WHERE qid='$qid'";
	$prime=mysqli_query($con,$query);
	header("location:questioncorner.php");	
}
else
{
	header("location:signin.html");
}
?>