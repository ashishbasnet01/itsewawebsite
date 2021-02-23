<?php include "header.php"; 

?>

<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<div class="form-container">
						<div class="form-btn">
							<h3>Add User</h3>
						</div>
						<form id="regform" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
							<input type="text" name="username" placeholder="Username">
							<input type="Email" name="email" placeholder="Email">
							<input type="password" name="password" placeholder="Password">
							<button type="submit" name="submit"class="btn">Submit</button>	
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	
	if(isset($_POST["submit"]))
	{	
		include("dbconnect.php");
	
		$username= $_POST['username'];
		$email= $_POST['email'];
		$pass= $_POST['password'];

		// inserting data
		$sql="INSERT INTO user (username,email,password) VALUES ('$username','$email','$pass')";

		if(mysqli_query($conn,$sql))
		{
			header("Location:pr-display.php");
		}
		else{
			echo "<br>Error".$sql ."<br>" .mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>
<?php include "footer.php"; 

?>
