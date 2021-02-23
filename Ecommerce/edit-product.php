<?php include "header.php";


  
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                <?php
                include "dbconnect.php";
                $product_id = $_GET['id'];
                $sql = "SELECT * FROM products WHERE Id = {$product_id}";

                $result = mysqli_query($conn, $sql) or die("Query Failed.");

                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                ?>
                  <!--  Form Start -->
                  <h3>Edit Product Details</h3>
    <form class="pr-class" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <table class="pr-table">
            <tr>
                <td>
                    <!-- Product Id: -->
                </td>
                <td>
                    <input type="hidden" name="productid" class="form-control" value="<?php echo $row['id'];  ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Product Name:
                </td>
                <td>
                    <input type="text" name="productname" class="form-control" value="<?php echo $row['name'];  ?>" placeholder="" required>
                </td>
            </tr>
            <tr>
              <td>
                    Upload an image file:
                </td>
                <td>
                    <input type="file" name="primage" class="form-control" value="<?php echo $row['image'];  ?>" placeholder="" accept="image/png, image/jpeg" required>
                </td>
                
            </tr>
            <tr>
              <td>
                    Upload another image file:
                </td>
                <td>
                    <input type="file" name="primage1" class="form-control" value="<?php echo $row['image1'];  ?>" placeholder="" accept="image/png, image/jpeg" required>
                </td>
                
            </tr>
            <tr>
                <td>
                    Description:
                </td>
                <td>
                    <input type="textarea" name="prdes" class="form-control" value="<?php echo $row['description'];  ?>" placeholder="" required>
                </td>
            </tr>
            <tr>
                <td>
                    Product Price:
                </td>
                <td>
                    <input type="text" name="price" class="form-control" value="<?php echo $row['price'];  ?>" placeholder="" required>
                </td>
            </tr>
        </table>
        <center><input type="submit" name="submit" class="btn btn-primary" value="Update" required />
        </center>
    </form>
                  
                  <?php } }
                
            if(isset($_POST['submit']))
              {
              include ("dbconnect.php");
              include("pr-register.php");
    
              $productid = $_POST['productid'];
              $productname = $_POST['productname'];
              $prdes = $_POST['prdes'];
              $price = $_POST['price'];
              // $primage = $_FILES['image']["tmp_name"];
              // $primgcontent=addslashes(file_get_contents( $primage ));
          
                $sql = "UPDATE products SET  name = '{$productname}', image = '{$new_name}',image1 = '{$new_name1}',description = '{$prdes}',price= '{$price}' WHERE id = {$productid}";

                if(mysqli_query($conn,$sql)){
                       header("Location:pr-display.php");
                  }
                else{
                        echo "Update error!!!";
                      }
              }
              ?>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
