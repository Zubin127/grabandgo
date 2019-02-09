<?php
	session_start();
	include('head.php');
	include('admin/comman.php');
	$id=$_SESSION["idd"];
	$r=mysql_query("select * from addvertisment where  user_id='$id'");
	
	echo "<table  style='width:70%'  align='center'>";
	while($rows=mysql_fetch_array($r))
	{
		$photos=$rows[7];
		$arr=explode(",",$photos);
	echo "<tr  style='border:2px solid black'><td><image src='advertisement_photo/$arr[0]' height=200 width=173></td>
	<td style='width:300px'>$rows[4]<br/><br/>Price:$rows[5]</td><td align='right'>Name:Rahul<br/><br/><br/>Mob:$rows[12]<br/><br/>
	<a href='deleteads.php?a=$rows[0]'>Delete Ads</a>
	</td></tr>
	<tr><td colspan='4'><hr style='height:30px'/>
	</td></tr>";
	}

?>
</table>
<?php

	include('footer.php');
?>