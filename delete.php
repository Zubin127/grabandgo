<?php
	include('head.php');

   mysql_connect("localhost","root","");
	mysql_select_db("registration") or die("DataBase Not Found");
	

	$id=$_REQUEST["a"];
	
	$r=mysql_query("delete from form where id='$id'");
	if($r)
			header("location:view.php");
	include('footer.php');

?>
