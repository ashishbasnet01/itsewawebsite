<?php
include("dbconnect.php");
$adminuser="ashish";
$adminpassword="ashish123";
$message="";
if(count($_POST)>0) 
{
	$query = "SELECT * FROM user WHERE username= '".$_POST["userName"]."' and password = '".$_POST["password"]."'";
	$result = mysqli_query($conn, $query);
	$count  = mysqli_num_rows($result);
	if ($_POST["userName"]== $adminuser and $_POST["password"]== $adminpassword)
		{
			// <script type="text/javascript">
			// 	window.location= "adminpanel.php";
			// </script>
			header("Location:pr-display.php");
		}

	elseif ($count==0)
	{
		$message = "Invalid Username or Password!";
		echo $message;
	}
	else
	{
		header("Location:homepage.php");
	}
}
?>