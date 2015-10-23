<?php
session_start();
if($_SESSION["adminvar"])
{
	$nname=$_POST["eventname"];
	$dept=$_POST["dept"];
	$desc=$_POST["desc"];
	$time=time();
		$con = mysqli_connect("localhost","levin","","levin");
		if (mysqli_connect_errno())
		{
				 echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else
		{
						$query= "INSERT INTO `notification` (`notificationname`,`desc`,`dept`,`ntimestamp`) VALUES ('$nname','$desc','$dept','$time')";
						$result= mysqli_query($con,$query);
						if(!$result)
						{
							echo "Error".mysql_error();
							echo '</br><a href="notification.php"><button>Goback</button></a>';
						}
						else
						{
							header("location:notification.php");
							//echo "<h1>Succesfully scheduled</h1>";
							//echo '</br><a href="schedulepage.php"><button>Goback</button></a>';
						}
				
		}
}
else
{
	header("location:signin.html");
}
?>