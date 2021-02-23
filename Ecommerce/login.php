<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Login Page</title>
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
					<img src="images/logo.jpg" width="150px" style="mix-blend-mode: multiply;">
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

<!-- ----Login  ------>
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<div class="form-container">
						<div class="form-btn">
							<span>Login</span>
						</div>
						<form id="loginform" method="POST"  action="user-login.php">
							<input type="text" name="userName" placeholder="Username" required="">
							<input type="password" name="password" placeholder="Password" required="">
							<button type="submit" class="btn">Login</button>
							<a href="">Forgot Password</a>
							<p>Don't have an account?<br><a href="register.php" style="font-size: 14px"><b>Register Now</b></a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>
<?php include "footer.php"; ?>
	
	
	