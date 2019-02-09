<?php
session_start();
include('head.php');
include('comman.php');

?>
<form action='login1.php' method='POST'>

<table  width='50%' height='30%'  style='border:2.5px solid black;box-shadow:20px 20px 60px grey' align='center'>
	
	<tR>
		<td colspan='2'>
		
			&nbsp;	
		</td>
	</tR>
	<tr>
	
		<td  colspan='2'  align='center'>
			<?php
						if(isset($_SESSION["err"]))
						echo $_SESSION["err"];
			
			?>
		
		</td>
	</tr>
	<tr>
		      <td align='center'> Email</td>
			  <td> <input type = 'text' name='em1' value='' placeholder='....@gmail.com'
			  style='height:40px;width:300px'> </td>
    </tr>
	<tr>
		      <td align='center'> Password</td>
			  <td> <input type = 'text' name='pw1' value='' placeholder='*********'
			  style='height:40px;width:300px'> </td>
    </tr>
	<tr>
	<td colspan='2' align='center'> 
	<input type = 'submit' value='LogIn'>
	</td>
    </tr>
	</table>
</form>
<?php
include('footer.php');
?>