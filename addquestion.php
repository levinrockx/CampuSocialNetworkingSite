<?php
session_start();
if($_SESSION["sesvar"])
{
	$sesvar=$_SESSION["sesvar"];
	$time=time();
	//echo $time;
	$question=$_POST['question'];
	$tag1=$_POST['tag1'];
	$tag2=$_POST['tag2'];
	$tag3=$_POST['tag3'];
	$tag4=$_POST['tag4'];
	$tag5=$_POST['tag5'];
	$con = mysqli_connect("localhost","levin","","levin");
	$query="INSERT INTO `question` (`question`,`author`,`qtimestamp`,`tag1`,`tag2`,`tag3`,`tag4`,`tag5`) VALUES ('$question','$sesvar','$time','$tag1','$tag2','$tag3','$tag4','$tag5')";
	$prime=mysqli_query($con,$query);
	header("location:questioncorner.php");	
}
else
{
	header("location:signin.html");
}
?>