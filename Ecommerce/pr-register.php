<?php
	include("dbconnect.php");
	if(isset($_FILES['primage'])){
		
		$errors = array();

    	$file_name = $_FILES['primage']['name'];
    	$file_size = $_FILES['primage']['size'];
    	$file_tmp = $_FILES['primage']['tmp_name'];
    	$file_type = $_FILES['primage']['type'];
    	$file_ext = end(explode('.',$file_name));

    	$extensions = array("jpeg","jpg","png");

    	if(in_array($file_ext,$extensions) === false)
    	{
      		$errors[] = "This extension file not allowed, Please choose a JPG or PNG file.";
    	}

    	if($file_size > 2097152){
      		$errors[] = "File size must be 2mb or lower.";
    	}
    		$new_name = time(). "-".basename($file_name);
    		$target = "uploaded/".$new_name;

    	if(empty($errors) == true){
      		move_uploaded_file($file_tmp,$target);
    	}else{
      		print_r($errors);
      		die();
    	}
}		

if(isset($_FILES['primage1'])){
		
		$errors1 = array();

    	$file_name1 = $_FILES['primage1']['name'];
    	$file_size1 = $_FILES['primage1']['size'];
    	$file_tmp1 = $_FILES['primage1']['tmp_name'];
    	$file_type1 = $_FILES['primage1']['type'];
    	$file_ext1 = end(explode('.',$file_name1));

    	$extensions1 = array("jpeg","jpg","png");

    	if(in_array($file_ext1,$extensions1) === false)
    	{
      		$errors1[] = "This extension file not allowed, Please choose a JPG or PNG file.";
    	}

    	if($file_size1 > 2097152){
      		$errors1[] = "File size must be 2mb or lower.";
    	}
    		$new_name1 = time(). "-".basename($file_name1);
    		$target1 = "uploaded/".$new_name1;

    	if(empty($errors) == true){
      		move_uploaded_file($file_tmp1,$target1);
    	}else{
      		print_r($errors1);
      		die();
    	}
}
	
?>