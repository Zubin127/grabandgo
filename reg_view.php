<?php
session_start();
		include('comman.php');
	$Addvertisment_Title= $_POST["at"];
	$Price= $_POST["pr"];
	$Product_Desciption= $_POST["nm1"];
	$Photo= $_POST["aa"];
	$State= $_POST["st"];
	$City= $_POST["City"];
	$Gender= $_POST["r1"];
	$Contact_Number= $_POST["no"];
	$Pincode= $_POST["pn"];
	$email=$_POST["em"];
	$arr=array();
	$category=$_POST["category"];
	$sub_category=$_POST["sub_category"];
	$id=$_SESSION["idd"];
	$User_Name=$_SESSION["un"];
	for($i=1;$i<=4;$i++)
	{
	move_uploaded_file($_FILES["$i"]["tmp_name"],"advertisement_photo/".$_FILES["$i"]["name"]);
	
	array_push($arr,$_FILES[$i]["name"]);
	}
	$photo_str=implode(",",$arr);
	  $r=mysql_query("insert into Addvertisment
	  (user_id,category,sub_category,Addvertisment_Title,Price,Product_Desciption,Photo,State,City,Gender,email,Contact_Number,Pincode,User_Name)
	  values('$id','$category','$sub_category','$Addvertisment_Title','$Price','$Product_Desciption','$photo_str',
	  '$State','$City','$Gender','$Email','$Contact_Number','$Pincode','$User_Name')");
		
	  if($r)
		header("location:inbox.php");
		
	  else
		echo mysql_error();
?>