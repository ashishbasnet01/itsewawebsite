<?php
include "dbconnect.php";

$userid = $_GET['id'];

$sql = "DELETE FROM products WHERE id = {$userid}";

if(mysqli_query($conn, $sql)){
 	include("pr-display.php");
}
else{
  echo "<p style='color:red;margin: 10px 0;'>Can\'t Delete the User Record.</p>";
}

mysqli_close($conn);

?>
