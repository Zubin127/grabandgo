<?php
session_start();
	include('admin/comman.php');
	$email=$_POST["em1"];
	$pass=$_POST["pw1"];
	
	
	
	$r=mysql_query("select * from signup   where email='$email' and password='$pass'");
	if($rows=mysql_fetch_array($r))
	{
		$_SESSION["idd"]=$rows[0];
		header("location:index.php");
	}
	else
	{
		$_SESSION["err"]="Invalid UserName And Password";
		header("location:signin.php");
	}

?>