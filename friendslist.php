<?php
session_start();
if($_SESSION["sesvar"])
{
	$sesvar=$_SESSION["sesvar"];
	$con = mysqli_connect("localhost","levin","","levin");
	$prime=mysqli_query($con,"SELECT * FROM `user` WHERE uninum='$sesvar'");
	$row = mysqli_fetch_row($prime);  
	$fname=$row[1];
	$tablename=$fname.".".$sesvar;
	$tablename=strtolower($tablename);
?>
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Friend page</title>
		<link href="css/bootstrap.css" rel="stylesheet" />
		<link href="css/bootstrap-theme.css" rel="stylesheet" />
		<link href="css/profile.css" rel="stylesheet" />
		</head>
		<body>
		<div class="container">
		  <div class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
			  <div class="navbar-header"> <span class="navbar-brand">CSNDC</span> </div>
			  <div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				  <li><a href="profile.php">Profile</a></li>
				  <li><a href="sharepage.php">Share Page</a></li>
				  <li><a href="questioncorner.php">Question Corner</a></li>
				  <li class="active"><a href="friendslist.php">Friends List</a></li>
				</ul>
				<form class="navbar-form navbar-left" method="post" action="search.php" role="search">
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Search" name="search">
				</div>
				<button type="submit" class="btn btn-default">Search person</button>
			  </form>
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="settings.php">Update Info</a></li>
				  <li><a href="logout.php">Logout</a></li>
				</ul>
			  </div>
			  <!--/.nav-collapse --> 
			</div>
			<!--/.container-fluid --> 
		  </div>
<?php
		$query="SELECT * FROM `$tablename`";
		$prime=mysqli_query($con,$query);
		echo '<ol class="text-center">';
		$i=0;
		while($row = mysqli_fetch_array($prime))
		{
			
			$friendvar=$row['uninum'];
			$query="SELECT * FROM `user` WHERE uninum='$friendvar'";
			$primes=mysqli_query($con,$query);
			$row1=mysqli_fetch_array($primes);
			if($row1['uninum']!=$sesvar)
			{
				$i++;
			echo '<li><h3>'.$row1['fname'].' '.$row1['lname'].'</h3></li>'; 
			}
		}
		echo '</ol>';
		echo "you have".$i." friend(s)";
?>
		  <hr />
		  <div class="modal-footer"> CSNDC GEC WAYANAD 2014 </div>
		</div>
		<!--/.container -->
		</body>
		</html>
<?php
}
else
{
	header("location:signin.html");
}
?>