<?php
session_start();
if($_SESSION["sesvar"])
{
$sesvar=$_SESSION["sesvar"];
	$con = mysqli_connect("localhost","odbs","","odbs");
			$prime=mysqli_query($con,"SELECT * FROM `user` WHERE doctor_id='$sesvar'");
			$row = mysqli_fetch_row($prime);  
			$fname=$row[1];
			$lname=$row[2];
			$dob=$row[3];
			$gender=$row[4];
			$email=$row[5];
			$mobilenumber=$row[6];
			$address=$row[7];
			$town=$row[8];
			$city=$row[9];
			$state=$row[10];
			$pin=$row[11];
			$utype=$row[12];
			$stype=$row[13];
			$course=$row[14];
			$dept=$row[15];
			$addnum=$row[16];
			$uninum=$row[17];
			$sem=$row[18];
			$rollnum=$row[19];
			$hostel=$row[20];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile page</title>
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
          <li class="active"><a href="profile.php">Profile</a></li>
          <li><a href="sharepage.php">Share Page</a></li>
          <li><a href="questioncorner.php">Question Corner</a></li>
          <li><a href="friendslist.php">Friends List</a></li>
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
      <hr />
  <div class="row">
    <div class="text-center">
      <h2>ABOUT</h2>
    </div>
    <hr />
    <div class="col-md-4 text-center"> <a href="#"><img src="img/user.png" alt="passportsize" class="img-thumbnail profilephoto" /></a>
	<?php
      echo "<h2>".$fname." ".$lname."</h2>
    </div>
    <div class=\"col-md-8 well information\">
      <div class=\"col-sm-4\">
        <h4><b> NAME :</b>".$fname." ".$lname."<br />
          <b>DEPARTMENT :</b>$dept<br />
          <b>SEMESTER :</b> $sem<br />
          <b>ROLL NUMBER :</b> $rollnum<br />
          <b>REGISTER NUMBER :</b>";  
	echo $_SESSION["sesvar"];
	echo "<br />
        </h4>
      </div>
      <div class=\"col-sm-4\">
        <h4> <b>DATE OF BIRTH :</b> $dob<br />
          <b>EMAIL :</b> $email<br />
          <b>ADDRESS :</b> $address<br />
          <b>MOBILE NUMBER :</b> $mobilenumber<br />
        </h4>
      </div>
    </div>
  </div>"
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