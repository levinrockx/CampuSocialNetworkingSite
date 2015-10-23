<?php
session_start();
if($_SESSION["sesvar"])
{
	$friendrequest=$_POST['friendrequest'];
	$sesvar=$_SESSION["sesvar"];
	$con = mysqli_connect("localhost","levin","","levin");
	$prime=mysqli_query($con,"SELECT * FROM `user` WHERE uninum='$sesvar'");
	$row = mysqli_fetch_row($prime);  
	$fname=$row[1];
	$prime=mysqli_query($con,"SELECT fname FROM `user` WHERE uninum='$friendrequest'");
	$row = mysqli_fetch_row($prime);  
	$ffname=$row[0];
	$tablename=$fname.".".$sesvar;
	$tablename1=$ffname.".".$friendrequest;
	$tablename=strtolower($tablename);
	$tablename1=strtolower($tablename1);
	//echo $tablename1;
	$query="SELECT * FROM `$tablename`";
	$prime=mysqli_query($con,$query);
	$rows = mysqli_fetch_array($prime);
	if($rows['uninum']==NULL)
	{
		$query="INSERT INTO `$tablename`(`uninum`) VALUES ('$friendrequest')";
		$prime=mysqli_query($con,$query);
		$query="INSERT INTO `$tablename1`(`uninum`) VALUES ('$sesvar')";
		$prime=mysqli_query($con,$query);
		header("location:profile.php");
		//echo "friend added";die();
	}  
	else//to check if friend is there
	{
		$query="SELECT * FROM `$tablename` WHERE uninum='$friendrequest'";
		$prime=mysqli_query($con,$query);
		$check = mysqli_fetch_array($prime);
		if($check['uninum']!=NULL)
		{
			//echo "already a friend";
			header("location:profile.php");
		}
		else
		{
			$query="INSERT INTO `$tablename`(`uninum`) VALUES ('$friendrequest')";
			$prime=mysqli_query($con,$query);
			$query="INSERT INTO `$tablename1`(`uninum`) VALUES ('$sesvar')";
			$prime=mysqli_query($con,$query);
			header("location:profile.php");
		}
	}
}
else
{
	header("location:signin.html");
}

?>