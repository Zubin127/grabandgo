<?php
session_start();
if(isset($_SESSION["idd"]))
	{
include('head.php');
include('comman.php');

?>
		  
<form action="reg_view.php" method='post' enctype='multipart/form-data'>
<table border='1' align='center' cellspacing=0 cellpadding=30>
 
 <tr>
	<td colspan='2'  align='center'>
	<marquee scrollamount='30' direction='right' behaviour='slide'>
		<img src='Commercial Vehicles.jpg'>
		<img src='Commercial Vehicles.jpg'>	
		<img src='Commercial Vehicles.jpg'>	
		<img src='Commercial Vehicles.jpg'>	
		<img src='Commercial Vehicles.jpg'>	
		<img src='Commercial Vehicles.jpg'>	
		<img src='Commercial Vehicles.jpg'>
		<img src='Commercial Vehicles.jpg'>
		<img src='Commercial Vehicles.jpg'>	
		<img src='Commercial Vehicles.jpg'>
	</marquee>
	<marquee scrollamount='50' direction='left' behaviour='alternate'>
		<img src='Commercial Vehicles.jpg'>
		<img src='Commercial Vehicles.jpg'>
		<img src='Commercial Vehicles.jpg'>		
		<img src='Commercial Vehicles.jpg'>
		<img src='Commercial Vehicles.jpg'>
		<img src='Commercial Vehicles.jpg'>
						
	</marquee>
	<marquee scrollamount='30' direction='right' behaviour='slide'>
		</marquee>
		<input type='hidden' value='<?php echo $_GET["a"] ?>' name='category'>
		<input type='hidden' value='<?php echo $_GET["b"] ?>' name='sub_category'>
	</marquee>
	</td>
 
 </tr>
 <tr>
 <tr>
	    <td> User Name </td>
		  <td><input type = 'text' name='un' value='' placeholder='User Name '> 
		  </td>
		</td>  
	</tr>
 
 <tr>
	    <td> Addvertisment Title </td>
		  <td><input type = 'text' name='at' value='' placeholder='Addvertisment Title '> 
		  </td>
		</td>  
	</tr>
	 <tr>
	    <td> Price </td>
		  <td><input type = 'text' name='pr' value='' placeholder='In rupees'> 
		  </td>
		</td>  
	</tr>
	 <tr>
	      <td> Product Desciption</td>
		  <td>
		  <textarea name='nm1'></textarea>
		  </td>
		  
	</tr>
	<tr>
		<td>Photo</td>
		<td><input type='file' name='1'>
		<input type='file' name='2'>
		<input type='file' name='3'>
		<input type='file' name='4'>
		</td>
	</tr>
	
	<tr>
		      <td> State</td>
			<td><input type = 'text' name='st' value='' placeholder='Rajasthan'> 
		  </td>
		  		
	</tr>
	<tr>
		      <td> City</td>
	<td>
	<select name="City">
	<option value="">Select</option>
	<option value="UDP">Udaipur</option>
	<option value="JP">Jaipur</option>
	<option value="CH">Chittor</option>
	<option value="JS">Jaisalmer</option>
	<option value="BK">Bikaner</option>
	<option value="JD">Jhadol</option>
	</select></tr>
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
	
		<td> Contact Number</td>
		<td> <input type = 'text' name='no' value='' placeholder='+91.. .... ....'> </td>
    </tr>
	
	<tr>
		      <td>Pincode</td>
			  <td> <input type = 'text' name='pn' value='' placeholder='313001'> </td>
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
</form>
<?php
	include('footer.php');
	
	}
	else
	header("location:signin.php");
?>