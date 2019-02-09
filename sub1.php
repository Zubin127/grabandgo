<?php
	ob_start();
session_start();
	include('head.php');

	include('comman.php');
	 $Sub_Category= $_POST["sub"];
	 $category=$_POST["cmb"];
	 
	 move_uploaded_file($_FILES["aa"]["tmp_name"],"subcategory_photo/".$_FILES["aa"]["name"]);
	 $pname=$_FILES["aa"]["name"];
	 
	  $r=mysql_query("insert into sub_category(category,sub_category,pnames)
	  values('$category','$Sub_Category','$pname')");
	  
	  if($r)
	  {
		$_SESSION["err"]="Sub Category Added Successfully";
		header("location:sub.php");
		
	}
		
	  else
		echo mysql_error();
	include('footer.php');

?>