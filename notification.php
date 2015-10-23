<?php
session_start();
if($_SESSION["adminvar"]!=NULL)
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Schedule page</title>
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
              <li class="active"><a href="notification.php">Send Notification</a></li>
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
          <h2>Notification Pannel</h2>
        </div>
        <hr />
      <div class="row">
        <form class="form-horizontal" role="form" action="notify.php" method="post">
        
        <div class="form-group">
              <label for="eventname" class="col-sm-2 control-label">Event Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="eventname" name="eventname" placeholder="Enter Event Name">
              </div>
            </div>
           <div class="form-group">
              <label for="desc" class="col-sm-2 control-label">Description</label>
              <div class="col-sm-10">
                <textarea rows="3" class="form-control" id="desc" name="desc" placeholder="Description"></textarea>
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
                <button type="submit" class="btn btn-default">Notify</button>
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
	header("loaction:signin.html");
}
?>