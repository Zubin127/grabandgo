<?php
	include('head.php');

	mysql_connect("localhost","root","");
	mysql_select_db("registration") or die("DataBase Not Found");
	
	
	$r=mysql_query("select * from  form");
	
	echo "<table  border='1' cellspacing=0 cellpadding=10  align='center'><tr><td>Id</td><td>Name</td><td>Password</td>
	<td>Address</td><td>State</td><td>City</td><td>Gender</td></tr>";
	
	
	while($row=mysql_fetch_array($r))
	{
		echo "<tr><td>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>",$row[2],"</td>";
		echo "<td>",$row[3],"</td>";
		echo "<td>",$row[4],"</td>";
		echo "<td>",$row[5],"</td>";
		echo "<td>",$row[6],"</td>
		<td><a href='delete.php?a=$row[0]'>Delete</a></td></tr>";
		
		
	}
	echo "</table>";
	include('footer.php');

	?>