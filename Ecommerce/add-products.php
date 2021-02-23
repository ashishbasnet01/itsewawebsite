<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
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
						<li><a href="pr-display.php">Products</a></li>
						<li><a href="user.php">User</a></li>
						<li><a href="logout.php">Log Out</a></li>
						<li><h4>Welcome admin</h4></li>	
					</ul>
				</nav>
			</div>
		
	</div>
	</div>



<!-- --------------------ADD PRODUCTS__________________ -->
<h3>Fillup Product Details</h3>
    <form class="pr-class" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <table class="pr-table">
            <tr>
                <td>
                    Product Name:
                </td>
                <td>
                    <input type="text" name="prname" class="form-control"  placeholder="Product Name" required>
                </td>
            </tr>
            <tr>
            	<td>
                    Upload an image file:
                </td>
                <td>
                    <input type="file" name="primage" class="form-control"  placeholder="" accept=".png, .jpeg,.jpg" required>
                </td>
                
            </tr>
            <tr>
                <td>
                    Upload another image file:
                </td>
                <td>
                    <input type="file" name="primage1" class="form-control"  placeholder="" accept=".png, .jpeg,.jpg" required>
                </td>
                
            </tr>
            <tr>
                <td>
                    Description:
                </td>
                <td>
                    <textarea name="prdes"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    Product Price:
                </td>
                <td>
                    <input type="text" name="prprice" class="form-control"  placeholder="Price" required>
                </td>
            </tr>
        </table>
        <center><button type="submit" name="submit" class="btn">Submit</button></center>
    </form>
    <?php
    if(isset($_POST["submit"]))
    {
        include("pr-register.php");
        $prid= $_POST['prid'];
        $prname= $_POST['prname'];
        $prdes= $_POST['prdes'];
        $prprice= $_POST['prprice'];
    // inserting data
        $sql="INSERT INTO products (id,name,image,image1,description,price) VALUES ('$prid','$prname','$new_name','$new_name1','$prdes','$prprice')";

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

</body>
</html>




