<?php
	include('head.php');
	include('admin/comman.php');
	$cate=$_REQUEST["a"];
		
	$r=mysql_query("select * from sub_Category where category='$cate'");
		
	echo "<table  width='70%' style='border:2px solid black;box-shadow:10px 10px 40px grey' align='center'><tr>";
	$count=0;
	while($rows=mysql_Fetch_array($r))
	{
	$count++;
	echo "<td align='center' style='text-decoration:none'>
	<A href='advertisement.php?a=$rows[1]&b=$rows[2]'>
	<image src='admin/subcategory_photo/$rows[3]' alt='not found'
	height=100 width=100><br/>
	$rows[2]</a></td><td>&nbsp;</td>";
	
		if($count==3)
		{
		  echo "</tr><tr>";
		  $count=0;
		}
	
	}

?>
</table>
<?php
	include('footer.php');

?>