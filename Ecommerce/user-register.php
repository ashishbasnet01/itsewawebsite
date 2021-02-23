<?php
		include("dbconnect.php");
	
		$username= $_POST['username'];
		$email= $_POST['email'];
		$pass= $_POST['password'];

		// inserting data
		$sql="INSERT INTO user (username,email,password) VALUES ('$username','$email','$pass')";

		if(mysqli_query($conn,$sql))
		{
			header("Location:homepage.php");
		}
		else{
			echo "<br>Error".$sql ."<br>" .mysqli_error($conn);
		}
		mysqli_close($conn);
?>