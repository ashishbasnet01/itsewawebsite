<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>All Products--Itsewa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
	
		<div class="container">
			<div class="navbar">
				<div class="logo">
					<img src="images/logo.jpg" width="150px">
				</div>
				<nav>
					<ul id="menu-item">
						<li><a href="homepage.php">Home</a></li>
						<li><a href="productpage.php">Products</a></li>
						<li><a href="login.php">Account</a></li>
						<li><a href="">About</a></li>
					</ul>
				</nav>
				<a href=""><img src="images/cart.png" width="30px" height="30px"></a>
				<img src="images/menu.png" class="menu-icon" height="30px" width="30px" onclick="Menutoggle()" >
			</div>
		
		</div>
	

<!-----------------Single  product details------------>
	<?php
                include "dbconnect.php";
                $product_id = $_GET['id'];
                $sql = "SELECT * FROM products WHERE Id = {$product_id}";

                $result = mysqli_query($conn, $sql) or die("Query Failed.");

                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
     			?>

	<div class="small-container single-product">
		<div class="row">
			<div class="col-2">
				<img src="uploaded/<?php echo $row['image']; ?>" width="100%"  id="product-img" alt="item">

				<div class="small-img-row">
					<div class="small-img-col">
						<img src="uploaded/<?php echo $row['image']; ?>" width="100%" class="small-img" alt="item">
					</div>
					<div class="small-img-col">
						<img src="uploaded/<?php echo $row['image1']; ?>" width="100%" class="small-img" alt="item">
					</div>
					<div class="small-img-col">
						<img src="uploaded/<?php echo $row['image']; ?>" width="100%" class="small-img" alt="item">
					</div>
				</div>
			</div>
			<div class="col-2">
				<h1><?php echo $row["name"]?></h1>
				<h4><?php echo $row["price"]?></h4>
				<b style="font-size: 20px;">Quantity:</b><input type="number" name="" value="1">

				<h3>Product Details:</h3>
				<br>
				<p>	<?php echo $row["description"]?></p>
					<br><a href="" class="btn">Buy Now</a>
				<a href="" class="btn">Add To Cart</a>
			</div>
		</div>
	</div>

<?php } } ?>

	<script src="myscripts.js"></script>

	
</body>
</html>


