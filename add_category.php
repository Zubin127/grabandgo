<?php
	include('head.php');

?>
<form action="admininsert.php" method='post' enctype='multipart/form-data'>
<table border=1 align='center' cellspacing=0 height='200px' width='500px' cellpadding=10>
	<tr>
		<td align='center' colspan='2'  align='center'>
		<h4>Add Category</h4>
		</td>
	</tr>
	<tr>
		
		<td>Category Name</td>
		<td><input type='text' name='cn' value=''>
		</td>
	</tr>
	<tr>
		<td>Icon Photo</td>
		<td><input type='file' name='aa'></td>
	</tr>
	<tr height=100px>
		<td align='center' colspan='2'>
		<input type='submit' value='ADD CATEGORY' name='cc'>
		</td>
	</tr>
</table>
</form>

<?php
	include('footer.php');

?>