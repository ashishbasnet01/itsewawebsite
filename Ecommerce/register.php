
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	

</head>
<body>
	<div class="header">
		<div class="container">
			<div class="navbar">
				<div class="logo">
					<img src="images/logo.jpg" width="150px">
				</div>
				<nav>
					<ul id="menu-item">
						<li><a href="homepage.php">Home</a></li>
						<li><a href="productpage.php">Products</a></li>
						<li><a href="">Account</a></li>
						<li><a href="">About</a></li>
						
					</ul>
				</nav>
			</div>
		
	</div>
	</div>
	

	<!-- ---- Register  ------>
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<div class="form-container">
						<div class="form-btn">
							<span>Register</span>
						</div>
						<form id="regform" method="POST" action="user-register.php">
							<input type="text" name="username" placeholder="Username" required="">
							<input type="Email" name="email" placeholder="Email" required="">
							<input type="password" name="password" placeholder="Password" required="">
							<button type="submit" class="btn">Register</button>	
							<!-- <p><a href="login.php" style="font-size: 14px >Return to Login</a></p> -->
							<p><a href="login.php" style="font-size: 14px"><b>Back to Login</b></a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<!-- -------------footer----------->
	
<?php
 include("footer.php");
 ?>
