<?php
include "header.php"; 
include "dbconnect.php";
?>

<!DOCTYPE html>
<html>
<body>
	
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Products</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-products.php">Add Product</a>
              </div>
              <div class="col-md-12">
		<!-- <h3 style="text-align: center;">User Data</h3> -->
		<?php 
		$query = "SELECT * FROM products";
		$data = mysqli_query($conn,$query);
		$total = mysqli_num_rows($data);
		if ($total!=0)
		{
			?>

			<table class="content-table" >
				<thead> 
					<th>S.N.</th>
					<th>Product Name</th>
					<th>Image 1</th>
					<th>Image 2</th>
					<th>Description</th>
					<th>Price</th>
					<th>Edit</th>
					<th>Delete</th>
				</thead>
			<?php
				 $sn=1;
				while ($result = mysqli_fetch_assoc($data)) 
				{
			?>
						<tr>
							<td><?php echo $sn ?></td>
							<td><?php echo $result["name"]?></td>
							<td><img  src="uploaded/<?php echo $result['image']; ?>" height="150px" width="150px"></td>
							<td><img  src="uploaded/<?php echo $result['image1']; ?>" height="150px" width="150px"></td>
							<td><?php echo $result["description"]?></td>
							<td><?php echo $result["price"]?></td>
							<td class='edit'><a href='edit-product.php?id= "<?php echo $result["id"]?>"'>
							<i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-product.php?id= "<?php echo $result["id"]?>"'>
                            <i class='fa fa-trash-o'></i></a></td>
						</tr>
				<?php
					$sn++;
				}
		}
		else{
		echo"No data found!!";
		}	
			?>
			</table>
			 </div>
          </div>
      </div>
  </div>
	</body>
</html>
