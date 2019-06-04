<?php
	mysql_connect("localhost","root","");
	mysql_select_db("college") or die("DataBase Not Found");

	$name=$_POST["nm"];
	$pass=$_POST["pass"];
	$gender=$_POST["r1"];
	
	$r=mysql_query("insert into student(name,passwords,gender)values('$name','$pass','$gender')");
	
	if($r)
		echo "Insert";
	else
		echo mysql_error();
?>