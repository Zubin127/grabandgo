<?php
	include('admin/comman.php');
	
	$id=$_REQUEST["a"];
	
	$r=mysql_query("delete from addvertisment  where id='$id'");
	
	if($r)
		header("location:inbox.php");

?>