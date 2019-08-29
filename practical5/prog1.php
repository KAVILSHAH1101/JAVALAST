
	<!DOCTYPE html>
<html>
<head>
	<title>Culture Fair</title>
</head>
<body>
	<form method="post" action="prog1_2.php" enctype="multipart/form-data">
	
	<table >
		<tr>
			<td style="width: 100px">
				<label >Exam No : : </label>
			</td>
			<td>
				<input type="text" name="enos">
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>coures : </label>
			</td>
			<td>
				<select style="width: 175px" value="select Semester" name="coures"> 
					<option value="mca">Mca</option>
					<option  value="BE">B E</option>
					<option value="M.E">M E</option>
					<option value="hotel Managment">Hotal Managment</option>
				
				</select>
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Semester : </label>
			</td>
			<td>				
					<input type="radio" name="sem" value="1">1
					<input type="radio" name="sem" value="2">2
					<input type="radio" name="sem" value="3">3
					<input type="radio" name="sem" value="4">4
					<input type="radio" name="sem" value="5">5
					<input type="radio" name="sem" value="6">6

			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Subject 1 : </label>
			</td>
			<td>
				<input type="text" name="m1">
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Subject 2 : </label>
			</td>
			<td>
				<input type="text" name="m2">
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Subject 3 : </label>
			</td>
			<td>
				<input type="text" name="m3">
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Subject 4 : </label>
			</td>
			<td>
				<input type="text" name="m4">
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label>Subject 5 : </label>
			</td>
			<td>
				<input type="text" name="m5">
			</td>
		</tr>
		<tr>
			<td style="width: 100px">
				<label title="Signature">Signature: </label>
			</td>
			<td>
				<input type="file" name="photo">
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
