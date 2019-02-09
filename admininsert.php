<?php
	include('head.php');

		include('comman.php');
      $Category= $_POST["cn"];
	  move_uploaded_file($_FILES["aa"]["tmp_name"],"category_photo/".$_FILES["aa"]["name"]);
	  $file_name=$_FILES["aa"]["name"];
	  $r=mysql_query("insert into adminc(Category_Name,photo_name)values('$Category','$file_name')");
		
	  if($r)
		echo "Category Inserted";
		
	  else
		echo mysql_error();
	include('footer.php');

	?>