<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Itsewa Website Design</title>
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
						<li><a href="">Home</a></li>
						<li><a href="productpage.php">Products</a></li>
						<li><a href="login.php">Account</a></li>
						<li><a href="">About</a></li>
						
					</ul>
				</nav>
				<a href=""><img src="images/cart.png" width="30px" height="30px"></a>
				<img src="images/menu.png" class="menu-icon" height="30px" width="30px" onclick="Menutoggle()" >
			</div>
		<div class="row">
			<div class="col-2">
				<h2>Our Motto</h2>
				<p>We are commited in providing best possoble services <br> and sales of smart phones and other ascessories...</p>
				<a href="productpage.php" class="btn">Explore Now &#8594;</a>
			</div>
			<div class="col-2">
				<img src="images/1.png" style="mix-blend-mode: multiply;">

			</div>
		</div>
	</div>
	</div>

	<!-- ----featured caegories -->
	<div class="categories">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<img src="images/mobile.jpg">
				</div>
				<div class="col-3">
					<img src="images/laptop.jpg">
				</div>
				<div class="col-3">
					<img src="images/printer.jpg">
				</div>
			</div>
		</div>
	</div>
	<!-- -----------------featured Products--------- -->
	<div class="small-container">
		<h2 class="title">Featured Products</h2>

		<?php 
		include "dbconnect.php";
		$query = "SELECT * FROM products limit 4";
		$data = mysqli_query($conn,$query);
		$total = mysqli_num_rows($data);
		if ($total!=0)
		{
			?>

		<div class="row">
			<?php
				while ($result = mysqli_fetch_assoc($data)) 
				{
			?>

			<div class="col-4">
				<a href='productdetail.php?id= "<?php echo $result["id"]?>"'><img  src="uploaded/<?php echo $result['image']; ?>"></a>
				<h4><?php echo $result["name"]?></h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p><?php echo $result["price"]?></p>
			</div>
				<?php
				}
		}
		else{
		echo"No data found!!";
		}	
			?>
			
		</div>
	</div>
			
	<!--------------------- brands --------------------->
	<div class="brands">
		<h2 class="title">Brands</h2>
		<div class="small-container">
			<div class="row">
				<div class="col-5"> 
					<img src="images/huawei.png">
				</div>
				<div class="col-5">
					<img src="images/mi.png">
				</div>
				<div class="col-5">
					<img src="images/samsung.jpg">
				</div>
				<div class="col-5">
					<img src="images/oppo.jpg">
				</div>
				<div class="col-5">
					<img src="images/apple.png">
				</div>
			</div>
		</div>
	</div>

	<!-- -------------footer--------- -->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download Our App</h3>
					<p>Download App for Android and ios mobile phones</p>
					<div class="app-logo">
						<img src="images/playstore.png">
						<img src="images/appstore.png">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="images/logo.jpg">
					<p>We are commited in providing best possoble services and sales of smart phones</p>
				</div>
				<div class="footer-col-3">
					<h3>Useful Links</h3>
					<ul>
						<li>Coupons</li>
						<li>Blog Post</li>
						<li>Return Policy</li>
					</ul>
				</div>
				<div class="footer-col-4">
					<h3>Follow us</h3>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Instagram</li>
						<li>Youtube</li>
					</ul>
				</div>
			</div>
			<hr>
			<p class="copyright">@Copyright-Itsewa Store</p>
		</div>
	</div>

	<!----------------------------- js for toggle menu ----------------->

	<script type="text/javascript">
		var   menuitems= getElementById("menu-item");
        menuitems.style.maxHeight = "0px";
        function Menutoggle(){
            if(menuitems.style.maxHeight == "0px")
                {
                    menuitems.style.maxHeight = "200px";
                }
            else{
                menuitems.style.maxHeight = "0px";
            }

        }
	</script>
</body>
</html>