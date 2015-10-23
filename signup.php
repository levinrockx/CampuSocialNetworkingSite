<?php
		session_start();    	
		$fname=$_POST["fname"];
		$lname=$_POST['lname'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$mobilenumber=$_POST['mobilenumber'];
		$add=$_POST['add'];
		$town=$_POST['town'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$pin=$_POST['pin'];
		$utype=$_POST['utype'];
		$stype=$_POST['stype'];
		$course=$_POST['course'];
		$dept=$_POST['dept'];
		$addnum=$_POST['addnum'];
		$uninum=$_POST['uninum'];
		$sem=$_POST['sem'];
		$rollnum=$_POST['rollnum'];
		$hostel=$_POST['hostel'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$dest='img\ '.$_FILES['pix']['type'];
		$temp_file=$_FILES['pix']['temp_name'];
		$move=move_uploaded_file($temp_file,$dest);
		$con = mysqli_connect("localhost","levin","","levin");
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		else
		{
			$query= "INSERT INTO `user` (`fname`,`lname`,`dob`,`gender`,`email`,`mobilenumber`,`add`,`town`,`city`,`state`,`pin`,`utype`,`stype`,`course`,`dept`,`addnum`,`uninum`,`sem`,`rollnum`,`hostel`,`username`,`password`) VALUES ('$fname','$lname','$dob','$gender','$email','$mobilenumber','$add','$town','$city','$state','$pin','$utype','$stype','$course','$dept','$addnum','$uninum','$sem'
,'$rollnum','$hostel','$username','$password')";
		$result= mysqli_query($con,$query);
		if(!$result)
		{
			echo "error".mysql_error();
			echo '</br><a href="signup.html"><button>Goback</button></a>';
		}
		else
		{	
		$query="CREATE TABLE `$fname.$uninum` (friend_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,uninum VARCHAR(30))";
		$result= mysqli_query($con,$query);
		$query="INSERT INTO `$fname.$uninum` (`uninum`) VALUES ('$uninum')";
		$result= mysqli_query($con,$query);
			$primeselector="SELECT uninum FROM `user` WHERE username='$username'";
			$prime=mysqli_query($con,$primeselector);
			$row = mysqli_fetch_array($prime);
			$_SESSION["sesvar"] = $row["uninum"];
			header("location:profile.php");		
		}
		}
	?>