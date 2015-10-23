<?php
session_start();
if($_SESSION["adminvar"])
{
	$eventname=$_POST["eventname"];
	$eventsdate=$_POST["eventsdate"];
	$eventedate=$_POST["eventedate"];
	$starttime=$_POST["starttime"];
	$endtime=$_POST["endtime"];
	$seminarhall=$_POST["seminarhall"];
	$dept=$_POST["dept"];
	$date1 = date_create($eventsdate.$starttime);//Timestamping passing the date and time
	$timestamp1 = date_timestamp_get($date1);
	$date2 = date_create($eventedate.$endtime);//Timestamping passing the date and time
	$timestamp2 = date_timestamp_get($date2);
	if($timestamp1<=$timestamp2)
	{
		$con = mysqli_connect("localhost","levin","","levin");
		if (mysqli_connect_errno())
		{
				 echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else
		{
				$query= "SELECT * FROM `event`";
				$result= mysqli_query($con,$query);
				$row = mysqli_fetch_row($result);
				if(!$result)
				{
					echo "Error".mysql_error();
					echo '</br><a href="schedulepage.php"><button>Goback</button></a>';
				}
				else if($row[0]==NULL)
				{
						$query= "INSERT INTO `event` (`ename`,`startdate`,`starttime`,`enddate`,`endtime`,`timestamp1`,`timestamp2`,`seminarhall`,`dept`) VALUES ('$eventname','$eventsdate','$starttime','$eventedate','$endtime','$timestamp1','$timestamp2','$seminarhall','$dept')";
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
				else//checking the event time status
				{	
					$query= "SELECT event_id FROM `event` WHERE  (((`timestamp1` BETWEEN '$timestamp1' AND '$timestamp2') OR (`timestamp2` BETWEEN '$timestamp1' AND '$timestamp2')) AND (`seminarhall`='$seminarhall'))";
					$result =mysqli_query($con,$query);
					$row = mysqli_fetch_row($result);
					if($row[0]==NULL)
					{
							$query= "INSERT INTO `event` (`ename`,`startdate`,`starttime`,`enddate`,`endtime`,`timestamp1`,`timestamp2`,`seminarhall`,`dept`) VALUES ('$eventname','$eventsdate','$starttime','$eventedate','$endtime','$timestamp1','$timestamp2','$seminarhall','$dept')";
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