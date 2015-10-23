<?php
	session_start();
	$username= $_POST['myusername'];
	$password= $_POST['mypassword'];
	if($username=="deptadmin" && $password=="admin")
	{
		$_SESSION["adminvar"]=1;
		header("location:schedulepage.php");
	}
	else
	{
		$con = mysqli_connect("localhost","levin","","levin") or die(mysql_error());
		$sql="SELECT * FROM `user` WHERE username='$username' and password='$password'";
		$result=mysqli_query($con,$sql);
		$count=mysqli_num_rows($result);
		if($count==1)
		{
			$primeselector="SELECT uninum FROM `user` WHERE username='$username'";
			$prime=mysqli_query($con,$primeselector);
			$row = mysqli_fetch_array($prime);
			$_SESSION["sesvar"] = $row["uninum"];
			header("location:profile.php");
		}
		else
		{
			echo "Username and password dosen't match";
		}
	}

?>