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
                $user_id = $_GET['id'];
                $sql = "SELECT * FROM user WHERE Id = {$user_id}";

                $result = mysqli_query($conn, $sql) or die("Query Failed.");

                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                ?>
                  <!-- Form Start -->
                  <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="userid" class="form-control" value="<?php echo $row['Id'];  ?>">
                      </div>
                          
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $row['username'];  ?>" placeholder="" required>
                      </div>
                      
                      <div class="form-group">
                          <label>Email</label>
                          <input type="Email" name="email" class="form-control" value="<?php echo $row['email'];  ?>" placeholder="" required>
                      </div>

                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <!-- /Form -->
                  <?php } }
                
              if(isset($_POST['submit']))
              {
              include ("dbconnect.php");

              $userid = $_POST['userid'];
              $user = $_POST['username'];
              $email = $_POST['email'];

                $sql = "UPDATE user SET  username = '{$user}', email = '{$email}' WHERE Id = {$userid}";

                if(mysqli_query($conn,$sql)){
                       header("Location:user-display.php");
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
