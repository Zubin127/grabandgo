<?php
include('head.php');
include('comman.php');

?>
<form action='code_signup.php' method='POST'>
<table border='1' align='center' cellspacing=0 cellpadding=30>
	 <t<r>
	    <td> First Name </td>
		  <td><input type = 'text' name='nm' value='' placeholder='First Name'> 
		  </td>
		  
	</tr>
	 <tr>
	      <td> Last Name </td>
		  <td><input type = 'text' name='nm1' value='' placeholder='Last Name'> 
		  </td>
		  
	</tr>
	<tr>
	      <td>Address </td>
		  <td><input type ='text' name='ad' value=''> 
		  
	</tr>
	<tr>
		      <td> Password</td>
			  <td> <input type = 'password' name='pass' value='' placeholder='********'> </td>
    </tr>
      <tr>
           <td> Gender</td> 
            <td> 
			<input type = 'radio' name ='r1' value ='Male'>Male
            <input type = 'radio' name ='r1' value = 'Female'>Female
            </td>
      </tr>
	  
	<tr>
		      <td> Email</td>
			  <td> <input type = 'text' name='em' value='' placeholder='....@gmail.com'> </td>
    </tr>
		      
	<tr>
		<td> Mobile Number</td>
		<td> <input type = 'text' name='no' value='' placeholder='+91.. .... ....'> </td>
    </tr>
	<tr>
	       <td colspan='2' align ='center'>
		   <input type ='submit' value = 'SignUp'>
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		   <input type ='reset' value = 'Cancel'>
		   
		   </td>
	</tr>
</table>
</form>
<?php
	include('footer.php');
?>