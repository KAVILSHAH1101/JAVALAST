<?php
function customerror($errno,$errstr)
{
	echo "Error code  : $errno Error message : $errstr";
}
class fizesize extends Exception
{
	function message()
	{
		echo "File size is greter than 25 kb";
	}
}
	if(isset($_POST['submit']))
	{
		set_error_handler("customError",E_ALL);
		if(isset($_FILES['photo']) && $_FILES['photo']['error']==UPLOAD_ERR_OK)
		{
			$tmpfilename=$_FILES['photo']['tmp_name'];
			$name=$_FILES['photo']['name'];
			$size=$_FILES['photo']['size'];
			$type=$_FILES['photo']['type'];
			if($type != ("image/jpeg"))
			{
				echo "File must be jpeg and file size is upto 25kb";
				die();
			}
			else
			{
				try
				{
					if($size > 25600)
						throw new fizesize();
							$namef=explode(".", $name);
				$fileext=strtolower(end($namef));
				$newfilename=$_POST['enos'].".".$fileext;
				$dest="./img/".$newfilename;
				move_uploaded_file($tmpfilename, $dest);
				$total=$_POST['m1']+$_POST['m2']+$_POST['m3']+$_POST['m4']+$_POST['m5'];
				$per=$total/5;
				echo "<table border='1'>
				<tr>
					<td>photo : </td>
					<td><img src='$dest' width=100px height=100px></td>
				</tr>
				<tr>
					<td>Exam No : </td>
					<td>".$_POST['enos']."</td>
				</tr>
				<tr>
					<td>Course : </td>
					<td>".$_POST['coures']."</td>
				</tr>
				<tr>
					<td>Semester : </td>
					<td>".$_POST['sem']."</td>
				</tr>
				<tr>
					<td>Subject 1  : </td>
					<td>".$_POST['m1']."</td>
				</tr>
				<tr>
					<td>Subject 2 : </td>
					<td>".$_POST['m2']."</td>
				</tr>
				<tr>
					<td>Subject 3 : </td>
					<td>".$_POST['m3']."</td>
				</tr>
				<tr>
					<td>Subject 4 : </td>
					<td>".$_POST['m4']."</td>
				</tr>
				<tr>
					<td>Subject 5 : </td>
					<td>".$_POST['m5']."</td>
				</tr>
				
				
				<tr>
					<button onclick='window.print()'>Print</button>
				</tr>
				<tr>
					<td>Total  : </td>
					<td>".$total."</td>
				</tr>
				<tr>
					<td>Result  : </td>
					<td>";
				if($per>35){echo "pass";}
				else{echo "fail";}
				echo "</td>
				</tr>
				<tr>
					<td>Class  : </td>
					<td>";
				if($per>70){echo "first";}
				elseif ($per>60) { echo "second";				}
				else{echo "pass";}
				echo "</td>
				</tr>
				</table>				
				";			

				}
				catch(fizesize $f)
				{
						$f->message();
				}
		
			}
		}
	}
?>