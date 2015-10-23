<?php
session_start();
if($_SESSION["sesvar"])
{
	$sesvar=$_SESSION["sesvar"];
	$con = mysqli_connect("localhost","levin","","levin");
	$prime=mysqli_query($con,"SELECT * FROM `user` WHERE uninum='$sesvar'");
	$row = mysqli_fetch_row($prime);  
	$fname=$_POST['fname'];
	if($fname==NULL)
		{
			$fname=$row[1];
		}
	$lname=$_POST['lname'];
	if($lname==NULL)
		{
			$lname=$row[2];
		}
	$mobilenumber=$_POST['mobilenumber'];
	if($mobilenumber==NULL)
		{
		$mobilenumber=$row[6];
		}
	$addnum=$_POST['addnum'];
	if($addnum==NULL)
		{
		$addnum=$row[16];;
		}
	$sem=$_POST['sem'];
	if($mobilenumber==NULL)
		{
		$sem=$row[18];
		}
	$hostel=$_POST['hostel'];
	if($hostel==NULL)
		{
		$hostel=$row[20];
		}
	$password=$_POST['password'];
	if($password==NULL)
		{
		$password=$row[22];
		}
	$query= "UPDATE user
SET fname='$fname',lname='$lname',mobilenumber='$mobilenumber',addnum='$addnum',sem='$sem',hostel='$hostel',password='$password'
WHERE uninum='$sesvar'";
	$prime=mysqli_query($con,$query);
	echo '<script type="text/javascript">';
	echo 'alert("Updated!");';
	echo '</script>';
	header("location:profile.php");
}
else
{
	header("location:signin.html");
}
?>