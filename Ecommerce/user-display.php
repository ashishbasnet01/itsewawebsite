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
                  <h1 class="admin-heading">All Users</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-user.php">add user</a>
              </div>
              <div class="col-md-12">
		<!-- <h3 style="text-align: center;">User Data</h3> -->
		<?php 
		$query = "SELECT * FROM user";
		$data = mysqli_query($conn,$query);
		$total = mysqli_num_rows($data);
		if ($total!=0)
		{
			?>

			<table class="content-table" >
				<thead> 
					<th>S.N.</th>
					<th>Username</th>
					<th>Email</th>
					<th>Password</th>
					<th>Edit</th>
					<th>Delete</th>
				</thead>
			<?php
					$sn=1;
				while ($result = mysqli_fetch_assoc($data)) {
			?>
							<td><?php echo $sn ?></td>
							<td><?php echo $result["username"]?></td>
							<td><?php echo $result["email"]?></td>
							<td><?php echo $result["password"]?></td>
							<td class='edit'><a href='edit-user.php?id= "<?php echo $result["Id"]?>"'>
							<i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-user.php?id= "<?php echo $result["Id"]?>"'>
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
