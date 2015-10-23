<?php
session_start();
if($_SESSION["adminvar"])
{
	$updatevar=$_POST["updatevar"];
	$con = mysqli_connect("localhost","levin","","levin");
	$query="SELECT * FROM event WHERE event_id='$updatevar'";
	$prime=mysqli_query($con,$query);
	$result=mysqli_fetch_row($prime);	
	$eventname=$_POST["eventname"];
	if($eventname==NULL)
	{
		$eventname=$result[1];
	}
	$eventsdate=$_POST["eventsdate"];
	if($eventsdate==NULL)
	{
		$eventsdate=$result[2];
	}
	$starttime=$_POST["starttime"];
	if($starttime==NULL)
	{
		$starttime=$result[3];
	}
	$eventedate=$_POST["eventedate"];
	if($eventedate==NULL)
	{
		$eventedate=$result[4];
	}
	$endtime=$_POST["endtime"];
	if($endtime==NULL)
	{
		$endtime=$result[5];
	}
	$seminarhall=$_POST["seminarhall"];
	if($seminarhall==NULL)
	{
		$seminarhall=$result[8];
	}
	$dept=$_POST["dept"];
	if($dept==NULL)
	{
		$dept=$result[9];
	}
	$date1 = date_create($eventsdate.$starttime);//Timestamping passing the date and time
	$timestamp1 = date_timestamp_get($date1);
	$date2 = date_create($eventedate.$endtime);//Timestamping passing the date and time
	$timestamp2 = date_timestamp_get($date2);
	if($timestamp1<=$timestamp2)
	{
		if (mysqli_connect_errno())
		{
				 echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else//checking the event time status
		{
			$query= "SELECT event_id FROM `event` WHERE  (((`timestamp1` BETWEEN '$timestamp1' AND '$timestamp2') OR (`timestamp2` BETWEEN '$timestamp1' AND '$timestamp2')) AND (`seminarhall`='$seminarhall'))";
			$result =mysqli_query($con,$query);
			$row = mysqli_fetch_row($result);
			if($row[0]==NULL)
			{
				$query="UPDATE event SET ename='$eventname',startdate='$eventsdate',starttime='$starttime',enddate='$eventedate',endtime='$endtime',timestamp1='$timestamp1',timestamp2='$timestamp2',seminarhall='$seminarhall' WHERE event_id='$updatevar'";
				$result= mysqli_query($con,$query);
				if(!$result)
				{
					echo "Error".mysql_error();
					echo '</br><a href="schedulepage.php"><button>Goback</button></a>';
				}
				else
				{
					header("location:listschedules.php");
					//echo "<h1>Succesfully scheduled</h1>";
					//echo '</br><a href="schedulepage.php"><button>Goback</button></a>';
				}
			}
			else
			{
				echo "<h1>Cannot Schedule". $seminarhall ." at this". $eventsdate.$starttime." to".$eventedate.$endtime."</h1>";
				echo '</br><a href="schedulepage.php"><button>Goback</button></a>';
			}
		}	
	}
	else
	{
		echo "<h1>Time/Date entered is not correct,Please re-enter</h1>";
		echo '</br><a href="schedulepage.php"><button>Goback</button></a>';
	}
}
else
{
	header("location:signin.html");
}
?>