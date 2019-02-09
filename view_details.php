<?php
include('head.php');
include('comman.php');

$id=$_REQUEST["a"];


	$r=mysql_query("select * from addvertisment where id='$id'");
	echo "<table  width='60%' cellpadding=10  align='center'  style='border:2px solid black;
	box-shadow:10px 10px 40px grey'>";
	if($rows=mysql_fetch_array($r))
	{
	$photos=$rows[7];
	$arr=explode(",",$photos);
	echo "<tr align='center'><td>Title:$rows[4]</td></tR>";
	echo "<tr><td  align='center'>
	<image src='advertisement_photo/$arr[0]' height=250 width=244>
	</td></tr>";
	echo "<tr align='center'><td>$rows[3]</td></tR>";
	echo "<tr align='center'><td>Price:$rows[5]</td></tR>";
	echo "<tr align='center'><td>Name:$rows[14]</td></tR>";
	echo "<tr align='center'><td>Contact:$rows[12]</td></tR>";
	echo "<tr><td>Other Description:<br/><p style='width:400px;word-wrap:break-word'>$rows[6]</p></td></tR>";
	echo "<tr><td>";
	for($i=0;$i<count($arr);$i++)
	
	echo "
	<image src='advertisement_photo/$arr[$i]' height=220 width=164>";
	}
echo "</td></tr>";
?>
</table>

<?php
	include('footer.php');

?>