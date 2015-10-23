<?php
session_start();
if($_SESSION["sesvar"])
{
$sesvar=$_SESSION["sesvar"];
	$con = mysqli_connect("localhost","levin","","levin");
			$prime=mysqli_query($con,"SELECT * FROM `user` WHERE uninum='$sesvar'");
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
			$tablename=$fname.".".$sesvar;
			$tablename=strtolower($tablename);
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
          <li class="active"><a href="sharepage.php">Share Page</a></li>
          <li><a href="questioncorner.php">Question Corner</a></li>
          <li><a href="friendslist.php">Friends List</a></li>
        </ul>
        <form class="navbar-form navbar-left" method="post" action="search.php" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search user with username" name="search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
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
    <br />
    <div class="row">
    <div class="well">
    <h3 class="text-center">Share Page</h3>
    <form class="form-horizontal" role="form" action="addshare.php" method="post">
        <div class="form-group">
          <label for="status" class="col-sm-1 control-label">Share</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="status" id="status" placeholder="What are you thinking ?">
          </div>
        </div>
       <div class="form-group">
          <div class=" col-xs-offset-1 col-sm-10">
            <button type="submit" class="btn btn-danger">Share</button>
          </div>
        </div>
     </form>
     
    </div>
    
    </div>
    
    <?php
		$query="SELECT * FROM `$tablename`";
		$primess=mysqli_query($con,$query);
		echo '<ul>';
		$i=0;
		$j=0;
		while($results = mysqli_fetch_array($primess))
		{
			$uninum=$results['uninum'];
			$prime=mysqli_query($con,"SELECT * FROM `share` ORDER BY sid DESC");
			while($row = mysqli_fetch_array($prime))
				{
					$i++;
					$sid=$row['sid'];
					$rate=$row['rate'];
					$share=$row['share']; 
					$author=$row['author'];
					//echo $result['uninum'];die();
					if($uninum==$author)
					{
						$time=$row['stimestamp'];
						$time=date("d-m-Y",$time);
						$primes=mysqli_query($con,"SELECT fname,lname FROM `user` WHERE uninum='$author'");
						$result = mysqli_fetch_row($primes);
						$author1=$result[0].' '.$result[1];
						if($sid!=NULL)
						{
							echo '<hr/><li><h2>'.$share.'</h2>shared by-'.$author1.' on '.$time.' -Rating : '.$rate.'</li>
							<form action="sharerate.php" method="post" name="'.$i.'">
							<input type="hidden" name="sid" value="'.$sid.'">
							<input type="hidden" name="rate" value="'.$rate.'">
							<button type="submit" class="btn btn-info">Rate</button>
							</form>
							<br/>
								  <ul>';
								  $ansquery="SELECT * FROM `comment` WHERE sid='$sid'";
								  $ansprime=mysqli_query($con,$ansquery);
								  while($ansrow=mysqli_fetch_row($ansprime))
								  {
									  echo '<li>'.$ansrow[2].' comments: '.$ansrow[1].' <br/></li>';
								  }
							echo  '</ul>
								  <form class="form-horizontal" role="form" action="comment.php" name="'.$i.'" method="post">
								  <input type="hidden" name="sid" value="'.$sid.'" />
								  <input type="text" name="comment" class="col-md-5" placeholder="comment here"/>
								  <button type="submit">Comment</button>
								  </form>';
						}
						else
						{
							echo '<h2>No Shares. Be the first one to share !</h2>';
						}
						//echo $time;
						//die();
					}
				}
		}
		echo '</ul>'; 
		
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
	header("location:signin.html");
}
?>