<?php
session_start();
if($_SESSION["adminvar"]!=NULL)
{
	if($_POST)
	{
	$updatevar=$_POST['updaterequest'];
	}
	else
	{
		$updatevar="";
	}
	
	if($updatevar!="")
	{
	$con = mysqli_connect("localhost","levin","","levin");
	$query="SELECT * FROM event WHERE event_id='$updatevar'";
	$prime=mysqli_query($con,$query);
	$result=mysqli_fetch_row($prime);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Update Scheduled Event</title>
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
              <li><a href="schedulepage.php">Schedule</a></li>
              <li><a href="#">Send Notification</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
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
          <h2>UPDATE <?php echo strtoupper ($result[1]); ?> EVENT</h2>
        </div>
        <hr />
      <div class="row">
        <form class="form-horizontal" role="form" action="scheduleupdate.php" method="post">
        <?php echo '<input type="hidden" name="updatevar" value="'.$updatevar.'" />';?>
        <div class="form-group">
              <label for="eventname" class="col-sm-2 control-label">Update Event Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="eventname" name="eventname" placeholder="Enter Event Name">
              </div>
            </div>
            
            <div class="form-group">
              <label for="eventsdate" class="col-sm-2 control-label">Starting Date</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="eventsdate" name="eventsdate" />
              </div>
            </div>
            
            <div class="form-group">
              <label for="eventedate" class="col-sm-2 control-label">Ending Date</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="eventedate" name="eventedate" />
              </div>
            </div>
            
            <div class="form-group">
              <label for="starttime" class="col-sm-2 control-label">Starting Time</label>
              <div class="col-sm-10">
                <input type="time" class="form-control" id="starttime" name="starttime" />
              </div>
            </div>
            
            <div class="form-group">
              <label for="endtime" class="col-sm-2 control-label">Ending Time</label>
              <div class="col-sm-10">
                <input type="time" class="form-control" id="endtime" name="endtime" />
              </div>
            </div>
        
          <div class="form-group">
            <label for="seminarhall" class="col-sm-2 control-label">Seminar hall</label>
            <div class="col-sm-10">
                <select class="form-control" name="seminarhall" id="seminarhall">
                    <option value=""></option>
                    <option value="A101">A101</option>
                    <option value="A102">A102</option>
                    <option value="A102">A103</option>
                </select>
          </div>
          </div>
          
          <div class="form-group">
            <label for="dept" class="col-sm-2 control-label">Department</label>
            <div class="col-sm-10">
                <select class="form-control" name="dept" id="dept">
                    <option value="For All Departments">For All Departments</option>
                    <option value="Electronics And Communication Engineering">Electronics And Communication Engineering</option>
                    <option value="Computer Science Engineering">Computer Science Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Electrical And Electronics Engineering">Electrical And Electronics Engineering</option>      
                </select>
          </div>
          </div>
          
          <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Update</button>
              </div>
            </div>
        </form>
      </div>
              <hr />
      
      <div class="modal-footer"> CSNDC GEC WAYANAD 2014 </div>
    </div>
    <!--/.container -->
    </body>
</html>
<?php
	}
elseif($updatevar=="")
	{
		header("loaction:schedulepage.php");
	}
}
else
{
	header("loaction:signin.html");
}
?>