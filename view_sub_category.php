<?php
	include('head.php');
	include('comman.php');
	$r=mysql_query("select * from  sub_category");
	
	echo "<table  border='1' width='60%' cellspacing=0 cellpadding=10  align='center'><tr>
	<td>Id</td><td>CategoryName</td><td>Sub Category</td><td>Photo</td></tr>";
	
	
	while($row=mysql_fetch_array($r))
	{
		echo "<tr><td>",$row[0],"</td>";
		echo "<td>",$row[1],"</td>";
		echo "<td>",$row[2],"</td>
		<td><image src='subcategory_photo/$row[3]' height=70 width=70></tr>";
		
		
	}
	echo "</table>";
	include('footer.php');
?>