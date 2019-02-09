<form action='' method='post'>
<?php
	include('head.php');

	mysql_connect("localhost","root","");
	mysql_select_db("registration") or die("DataBase Not Found");

	
	$r=mysql_query("select name from form");
	
	echo "<select name='cmb'>";
	
	
	while($rows=mysql_fetch_array($r))
	{
		echo "<option value='$rows[0]'>$rows[0]</option>";
	}
	
	echo "</select>";
?>

<input name='sub' type='submit' value='Search'>

</form>

<?php

	if(isset($_REQUEST["sub"]))
	{
			$name=$_POST["cmb"];
			$r=mysql_query("select * from form where name='$name'");
			if($rows=mysql_fetch_array($r))
			{
				echo "<table  border='1'  align='center'>";
				echo "<tr><td>Id</td><td>$rows[0]</td></tr>";
				echo "<tr><td>Name</td><td>$rows[1]</td></tr>";
				echo "<tr><td>Password</td><td>$rows[2]</td></tr>";
				echo "<tr><td>Address</td><td>$rows[3]</td></tr>";
				echo "</table>";
			}
	}
	include('footer.php');

?>