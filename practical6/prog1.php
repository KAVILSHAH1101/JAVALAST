<?php
if(isset($_POST['submit']))
{
	require 'connect.php';
	//$result=$conn->query("select username from usertbl where username='".$_POST['uname']."'");
	$result=$conn->query("SELECT * FROM `usertbl` WHERE username='admin'");
	if($result->num_rows ==1)
	{
			echo "<script type='text/javascript'> alert('Username already registrer ');</script> ";
	}
	else
	{
		$insertrow="INSERT INTO usertbl(username, password, mono, email,gender,city,occupation,dob,squestion,sanswer) VALUES ('".$_POST['uname']."','".$_POST['upass']."',".$_POST['mono'].",'".$_POST['email']."',".$_POST['gender'].",'".$_POST['city']."','".$_POST['occ']."','".$_POST['dob']."','".$_POST['squestion']."','".$_POST['sanswer']."')";
		echo $insertrow;
		$conn->query($insertrow);

		$conn->close();
/*
		if($conn->query($insertrow) == TRUE)
		{
			echo "<script type='text/javascript'> alert('Registration succes ');</script> ";
		}
		else
		{
			echo "<script type='text/javascript'> alert('Registration Fail ');</script> ";
		}
*/
	}	
	



}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Culture Fair</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
	
	<table >
		<tr>
			<td style="width: 100px">
				<label >UserName :  </label>
			</td>
			<td>
				<input type="text" name="uname" required="Username require !">
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label >Password  :  </label>
			</td>
			<td>
				<input type="password" name="upass" required="password require">
			</td>
		</tr>
		
		<tr>
			<td style="width: 100px">
				<label>Gender : </label>
			</td>
			<td>				
					<input type="radio" name="gender" value="0" checked="">Male
					<input type="radio" name="gender" value="1">female		

			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Mobile Number : </label>
			</td>
			<td>
				<input type="text" name="mono" required="require">
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Email  : </label>
			</td>
			<td>
				<input type="text" name="email" required="require">
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>City: </label>
			</td>
			<td>
				<select style="width: 175px" value="City" name="city"> 
						<option value="Ahmedabad">Ahmedabad</option>
						<option  value="Gandhinagar">Gandhinagar</option>
						<option value="Bhuj">Bhuj</option>
						<option value="Rajkot">Rajkot</option>
				</select>
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Occupation :</label>
			</td>
			<td>
			<select style="width: 175px" value="Occupation" name="occ"> 
						<option value="Service">Service</option>
						<option  value="Business">Business</option>
						<option value="none" selected>None</option>
						
				</select>
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Date Of Birth : </label>
			</td>
			<td>
				<input type="date" name="dob">
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Secrate Question: </label>
			</td>
			<td>
				<input type="text" name="squestion" required="">
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Secrate Answer: </label>
			</td>
			<td>
				<input type="text" name="sanswer" required="">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="submit">
			</td>
			
		</tr>
	</table>
</form>

</body>
</html>
