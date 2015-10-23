<?php
session_start();
if($_SESSION["sesvar"])
{
	$removerequest=$_POST['removerequest'];
	$sesvar=$_SESSION["sesvar"];
	$con = mysqli_connect("localhost","levin","","levin");
	$prime=mysqli_query($con,"SELECT * FROM `user` WHERE uninum='$sesvar'");
	$row = mysqli_fetch_row($prime);  
	$fname=$row[1];
	$prime=mysqli_query($con,"SELECT fname FROM `user` WHERE uninum='$removerequest'");
	$row = mysqli_fetch_row($prime);  
	$ffname=$row[0];
	$tablename=$fname.".".$sesvar;
	$tablename1=$ffname.".".$removerequest;
	$tablename=strtolower($tablename);
	$tablename1=strtolower($tablename1);
	//echo $tablename1;
	$query="SELECT * FROM `$tablename`";
	$prime=mysqli_query($con,$query);
	$rows = mysqli_fetch_array($prime);
	if($rows['uninum']==NULL)
	{
		header("location:profile.php");
	}  
	else//to check if friend is there
	{
		$query="SELECT * FROM `$tablename` WHERE uninum='$removerequest'";
		$prime=mysqli_query($con,$query);
		$check = mysqli_fetch_array($prime);
		//echo $check['uninum'];die();
		if($check['uninum']!=NULL)
		{
			$query="DELETE FROM `$tablename` WHERE uninum='$removerequest'";
			$prime=mysqli_query($con,$query);
			$query="DELETE FROM `$tablename1` WHERE uninum='$sesvar'";
			$prime=mysqli_query($con,$query);
			header("location:profile.php");
		}
		else
		{
			header("location:profile.php");
		}
	}
}
else
{
	header("location:signin.html");
}
?>