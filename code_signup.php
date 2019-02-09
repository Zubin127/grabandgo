<?php
		
	include('comman.php');
	$First_Name= $_POST["nm"];
	$Last_Name= $_POST["nm1"];
	$Address= $_POST["ad"];
	$Password= $_POST["pass"];
	$Gender= $_POST["r1"];
	$Email= $_POST["em"];
	$Mobile_Number= $_POST["no"];
	  move_uploaded_file($_FILES["aa"]["tmp_name"],"category_photo/".$_FILES["aa"]["name"]);
	  $file_name=$_FILES["aa"]["name"];
	  $r=mysql_query("insert into signup(First_Name,Last_Name,Address,Password,Gender,Email,Mobile_Number)values('$First_Name','$Last_Name','$Address','$Password','$Gender','$Email','$Mobile_Number')");
		
	  if($r)
	  {
		header("location:signin.php");
		
		}
		
	  else
		echo mysql_error();
	
	
?>
	
	