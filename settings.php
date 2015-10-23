<?php
session_start();
if($_SESSION["sesvar"])
{
$sesvar=$_SESSION["sesvar"];
$con = mysqli_connect("localhost","levin","","levin");
$prime=mysqli_query($con,"SELECT * FROM `user` WHERE uninum='$sesvar'");
$row = mysqli_fetch_row($prime);  
$fname=$row[1];
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
          <li><a href="profile.php">Profile</a></li>
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
          <li class="active"><a href="settings.php">Update Info</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!--/.container-fluid --> 
  </div>
  <div class="row">
    <hr />
    <div class="text-center">
      <h2>Update <?php echo $fname."'s" ?> info</h2>
    </div>
    <hr />
  </div>
  <div class="row">
   <form class="form-horizontal" role="form" action="update.php" method="post">
        <div class="form-group">
          <label for="Fname" class="col-sm-2 control-label">First Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="fname" id="Fname" placeholder="Enter First Name">
          </div>
        </div>
        <div class="form-group">
          <label for="Lname" class="col-sm-2 control-label">Last Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Lname" name="lname" placeholder="Enter Last Name">
          </div>
        </div>
         <div class="form-group">
          <label for="mobilenumber" class="col-sm-2 control-label">Mobile Number</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Enter Mobile Number">
          </div>
        </div>
        <hr />
        <div class="form-group">
          <label for="addnum" class="col-sm-2 control-label">Admission Number</label>
          <div class="col-sm-10">
            <input type="text" name="addnum" class="form-control" id="addnum" placeholder="Enter Admission Number">
          </div>
        </div>
        <div class="form-group">
        <label for="sem" class="col-sm-2 control-label">Semester</label>
        <div class="col-sm-10">
            <select class="form-control" name="sem" id="sem">
            	<option value="">--</option>
                <option value="S1 S2">s1 s2</option>
                <option value="S3">s3</option>
                <option value="S4">s4</option>
                <option value="S5">s5</option>
                <option value="S6">s6</option>
                <option value="S7">s7</option>
                <option value="S8">s8</option>
            </select>
      </div>
      </div>
		<div class="form-group">
          <label for="hostel" class="col-sm-2 control-label">Hostel Status</label>
          <div class="col-sm-10">
            <select class="form-control" name="hostel" id="course">
            	<option>--</option>
                <option value="Mens Hostel">Men's Hostel</option>
                <option value="Ladies Hostel">Ladies Hostel</option>
                <option value="Day Scholar">Day Scholar</option>
            </select>
          </div>
        </div>
        <hr />
        <div class="form-group">
          <label for="image" class="col-sm-2 control-label">Profile Photo</label>
          <div class="col-sm-10">
            <input type="file" name="profilephoto" class="form-control" id="image" placeholder="Enter User Name">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Update</button>
          </div>
        </div>
    </form>
  </div>

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