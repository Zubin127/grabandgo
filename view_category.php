<?php
		include('head.php');

	include('comman.php');
	$r=mysql_query("select * from  adminc");
	
	echo "<table  border='1' cellspacing=0 cellpadding=10  width='40%' align='center'
	style='box-shadow:10px 10px 40px grey'><tr>
	<td>Id</td><td>CategoryName</td><td>Photo</td></tr>";
	
	
	while($row=mysql_fetch_array($r))
	{
		echo "<tr><td>",$row[0],"</td>";
		echo "<td>",$row[1],"</td>
		<td><image src='category_photo/$row[2]' height=60  width=60></tr>";
		
		
	}
	echo "</table>";
	include('footer.php');

	?>