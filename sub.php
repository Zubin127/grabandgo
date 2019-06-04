<?php
	session_start();
	include('head.php');

?>
<form action='sub1.php' method="POST"  enctype='multipart/form-data'>
<fieldset style='width:600px;height:560px;margin:auto;box-shadow:10px 10px 40px grey;border:2px solid black'>
<br/><br/>
<legend>Sub Category</legend>

<table border='0' align='center'   cellspacing=0  cellpadding=18 width='90%'>
<tr>
	<td colspan='2'  align='center' style='color:red'>
		<?php
			if(isset($_SESSION["err"]))
			echo $_SESSION["err"];
		?>
	
	</td>
</tr>
<tr>
	<td width='30%'>
	Category Name
	</td>
	<td>
		<?php
			echo "<select name='cmb' style='width:250px;height:30px'>";
			include('comman.php');
		
		
		$r=mysql_query("select * from adminc");
		
		while($rows=mysql_fetch_array($r))
		{
			echo "<option value='$rows[1]'>$rows[1]</option>";
		}
		echo "</select>";
		?>
	</td>
</tr>
<tr>
				<td>Sub Category</td>
				<td><input type='text' name='sub' 
				style='width:250px;height:30px'value=''>
				</td>
				
	</tr>
	
	<tr>
	
		<td>Icon Photo</td>
		<td><input type='file' name='aa'></td>
	</tr>
<tr>
	<td colspan='2'>
		<img src='../Images/Mobile.jpg' height='50px' width='50px'>
		<img src='../Images/Car.jpg' height='50px' width='60px'>
		<img src='../Images/Television.jpg' height='50px' width='60px'>
		<img src='../Images/Bike.jpg' height='50px' width='50px'>
		<img src='../Images/Fashion.jpg' height='50px' width='50px'>
		<img src='../Images/Pets.jpg' height='50px' width='50px'>
		<img src='../Images/Furniture.jpg' height='50px' width='50px'>
		
	</td>
	
</tr>
<tr>
	<td colspan='2'  align='center'>
	<input type='submit' value='Send'>
	</td>
</tr>
</table>
</fieldset>
<?php
$_SESSION["err"]="";
include('footer.php');

?>