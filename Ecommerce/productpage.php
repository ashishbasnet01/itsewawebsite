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
						<li><a href="">Products</a></li>
						<li><a href="login.php">Account</a></li>
						<li><a href="">About</a></li>
					</ul>
				</nav>
				<img src="images/cart.png" width="30px" height="30px">
				<img src="images/menu.png" class="menu-icon" height="30px" width="30px" onclick="Menutoggle()" >
			</div>
		
		</div>
	

	<!-- ----All products -->
	<div class="small-container">
		<div class="row row-2">
			<h2>All Products</h2>
			<select>
				<option>Default Sorting</option>
				<option>Sort by Price</option>
				<option>Sort by Rating</option>
				<option>Sort by Sale</option>
			</select>
		</div>



		<?php 
		include "dbconnect.php";
		$query = "SELECT * FROM products";
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

		<div class="page-btn">
			<span>1</span>
			<span>2</span>
			<span>3</span>
			<span>4</span>
			<span>&#8594;</span>
		</div>
	</div>
</body>
</html>



<?php
include("footer.php");
?>