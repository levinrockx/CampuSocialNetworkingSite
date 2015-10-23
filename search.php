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
<?php
		$search= $_POST['search'];
		if($search==NULL)
		{
			echo "<hr/><br/><h3 class=\"text-center\">Please enter some keyword to search</h3><br/>
					<a href=\"profile.php\">Go Back</a>";
		}
		else
		{
			$con = mysqli_connect("localhost","levin","","levin") or die(mysql_error());
			$sql="SELECT * FROM `user` WHERE ((fname LIKE '%$search%') OR (lname LIKE '%$search%'))";
			$result=mysqli_query($con,$sql);
			$i=0;
			while($row=mysqli_fetch_array($result))
			{
				$friendvar=$row['uninum'];
				$i++;
				echo "<form action=\"friendprofile.php\" method=\"post\" name=\"".$i."\">";
				echo "<div class=\"text-center\">";
				echo "<hr />";
				echo "<h2>".$row['uninum']."- ".$row['fname']." ".$row['lname']."</h2>";
				echo '<h2><input type="hidden" name="uninum" value="'.$row['uninum'].'" />';
				echo "<h2><input type=\"submit\" class=\"btn btn-info\" name=\"a\" value=\"View Profile\" />";
				echo "</form>";
				$query="SELECT * FROM `$tablename` WHERE uninum='$friendvar'";
				$prime=mysqli_query($con,$query);
				$check = mysqli_fetch_array($prime);
				if($check['uninum']==$friendvar)
				{
					echo "<form action=\"removefriend.php\" method=\"post\" name=\"".$i."\">";
					echo '<h2><input type="hidden" name="removerequest" value="'.$row['uninum'].'" />';
					echo "<h2><input type=\"submit\" class=\"btn btn-danger\" name=\"button\" value=\"Remove Friend\" /><br>";
					echo "</div>";	
				}
				elseif($friendvar==$sesvar)
				{
				}
				else
				{
					echo "<form action=\"addfriend.php\" method=\"post\" name=\"".$i."\">";
					echo '<h2><input type="hidden" name="friendrequest" value="'.$row['uninum'].'" />';
					echo "<h2><input type=\"submit\" class=\"btn btn-default\" name=\"button\" value=\"Add friend\" /><br>";
					echo "</div>";
				}
				echo "</form>";
			}
			echo '<h4 class="text-left">'.$i.' results found</h4>';

		}
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