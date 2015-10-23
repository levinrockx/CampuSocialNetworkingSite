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
  <div class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header"> <span class="navbar-brand">CSNDC</span> </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="profile.php">Profile</a></li>
          <li><a href="sharepage.php">Share Page</a></li>
          <li class="active"><a href="questioncorner.php">Question Corner</a></li>
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
    <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Add question</a></li>
  <li role="presentation"><a href="questioncornersearch.php">Search question</a></li>
</ul>
    <h3 class="text-center">Add a question</h3>
    <form class="form-horizontal" role="form" action="addquestion.php" method="post">
        <div class="form-group">
          <label for="question" class="col-sm-1 control-label">Question</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="question" id="question" placeholder="Enter a question here">
          </div>
        </div>
        <div class="form-group">
        <label for="tag1" class="col-sm-2 control-label">Tag 1 - Educational</label>
        <div class="col-sm-6">
            <select class="form-control" name="tag1" id="tag1">
            	<option value="">--</option>
                <option value="Exam">Exam</option>
                <option value="Department">Department</option>
                <option value="College">College</option>
                <option value="Class">Class</option>
                <option value="University">University</option>
                <option value="Semester">Semester</option>
                <option value="Subject">Subject</option>
                <option value="Project">Project</option>
                <option value="Seminar">Seminar</option>
            </select>
      </div>
      </div>
      <div class="form-group">
        <label for="tag2" class="col-sm-2 control-label">Tag 2 - Entertainment</label>
        <div class="col-sm-6">
            <select class="form-control" name="tag2" id="tag2">
            	<option value="">--</option>
                <option value="Quiz">Quiz</option>
                <option value="Film">Film</option>
                <option value="Music">Music</option>
                <option value="Magazine">Magazine</option>
            </select>
      </div>
      </div>
      <div class="form-group">
        <label for="tag3" class="col-sm-2 control-label">Tag 3 - Social</label>
        <div class="col-sm-6">
            <select class="form-control" name="tag3" id="tag3">
            	<option value="">--</option>
                <option value="Political">Political</option>
                <option value="Friendship">Friendship</option>
                <option value="Love">Love</option>
                <option value="Social Relevant">Social Relevant</option>
            </select>
      </div>
      </div>
      <div class="form-group">
        <label for="tag4" class="col-sm-2 control-label">Tag 4 - Sports</label>
        <div class="col-sm-6">
            <select class="form-control" name="tag4" id="tag4">
            	<option value="">--</option>
                <option value="Matches">Matches</option>
                <option value="Team">Team</option>
                <option value="Event">Event</option>
            </select>
      </div>
      </div>
      <div class="form-group">
        <label for="tag5" class="col-sm-2 control-label">Tag 5 - Technical</label>
        <div class="col-sm-6">
            <select class="form-control" name="tag5" id="tag5">
            	<option value="">--</option>
                <option value="Technical Event">Technical Event</option>
                <option value="Technical Subject">Technical Subject</option>
            </select>
      </div>
      </div>
       <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-danger">Add</button>
          </div>
        </div>
     </form>
     
    </div>
    
    </div>
    
    <?php
		echo '<ul>';
		$prime=mysqli_query($con,"SELECT * FROM `question` ORDER BY qid DESC");
		$i=0;
		while($row = mysqli_fetch_array($prime))
		{
			$i++;
			$qid=$row['qid'];
			//echo $qid;die();
			$rate=$row['rate'];
			$question=$row['question']; 
			$author=$row['author'];
			$time=$row['qtimestamp'];
			$time=date("d-m-Y",$time);
			$tag1=$row['tag1'];
			$tag2=$row['tag2'];
			$tag3=$row['tag3'];
			$tag4=$row['tag4'];
			$tag5=$row['tag5'];
			$primes=mysqli_query($con,"SELECT fname,lname FROM `user` WHERE uninum='$author'");
			$result = mysqli_fetch_row($primes);
			$author=$result[0].' '.$result[1];
			if($qid!=NULL)
			{
				echo '<hr/><li><h2>'.$question.'</h2>asked by-'.$author.' on '.$time.' -Rating : '.$rate.'</li>
				<form action="rate.php" method="post" name="'.$i.'">
				<input type="hidden" name="qid" value="'.$qid.'">
				<input type="hidden" name="rate" value="'.$rate.'">
				<button type="submit" class="btn btn-info">Rate</button>
				</form>
				<br/>
					  <ul>';
					  $ansquery="SELECT * FROM `answer` WHERE qid='$qid'";
					  $ansprime=mysqli_query($con,$ansquery);
					  while($ansrow=mysqli_fetch_row($ansprime))
					  {
						  echo '<li>'.$ansrow[2].' says: '.$ansrow[1].' <br/></li>';
					  }
				echo  '</ul>
					  <form class="form-horizontal" role="form" action="answer.php" name="'.$i.'" method="post">
					  <input type="hidden" name="qid" value="'.$qid.'" />
					  <input type="text" name="answer" class="col-md-5" placeholder="Answer here"/>
					  <button type="submit">Answer</button>
					  </form>';
			}
			else
			{
				echo '<h2>No Questions.Please Add a new question and let us begin</h2>';
			}
			//echo $time;
			//die();
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