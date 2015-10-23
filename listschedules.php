<?php
session_start();
if($_SESSION["adminvar"]!=NULL)
{
	$con = mysqli_connect("localhost","levin","","levin");
	$query="SELECT * FROM `event`";
	$prime=mysqli_query($con,$query);
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
              <li><a href="notification.php">Send Notification</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div>
          <!--/.nav-collapse --> 
        </div>
        <!--/.container-fluid --> 
      </div>
      <?php
	  echo '<table class="table">
		  <tr>
		  <th>Event id</th>
		  <th>Event name</th>
		  <th>Seminar Hall</th>
		  <th>Start Date</th>
		  <th>Start Time</th>
		  <th>End Date</th>
		  <th>Seminar Hall</th>
		  <th>Department</th>
		  <th>Update</th>
		  <th>Remove</th>
		  </tr>';
		$i=0;
	  while($row=mysqli_fetch_array($prime))
	  {		
	  		$i++;
		  echo '<tr>
			  <td>'.$row['event_id'].'</td>
			  <td>'.$row['ename'].'</td>
			  <td>'.$row['startdate'].'</td>
			  <td>'.$row['starttime'].'</td>
			  <td>'.$row['enddate'].'</td>
			  <td>'.$row['endtime'].'</td>
			  <td>'.$row['seminarhall'].'</td>
			  <td>'.$row['dept'].'</td>
			  <td><form action="updateevent.php" method="post" name="'.$i.'">
					<input type="hidden" name="updaterequest" value="'.$row['event_id'].'" />
					<input type="submit" class="btn btn-success" name="button" value="Update" /><br>
					</form>
					</div>
			  </td>
			  <td><form action="removeevent.php" method="post" name="'.$i.'">
					<input type="hidden" name="removerequest" value="'.$row['event_id'].'" />
					<input type="submit" class="btn btn-danger" name="button" value="Remove" /><br>
					</form>
					</div>
			  </td>
			  </tr>';		  
	  }
	  echo '</table>';
	  echo 'Total '.$i.' evnet(s) found';
	  ?>
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