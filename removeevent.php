<?php
session_start();
if($_SESSION["adminvar"])
{
	$removevar=$_POST['removerequest'];
	//echo $removevar;
	$con = mysqli_connect("localhost","levin","","levin");
	$query="DELETE FROM `event` WHERE event_id='$removevar'";
	$prime=mysqli_query($con,$query);
	header("location:listschedules.php");

}
else
{
	header("location:signin.html");
}
?>