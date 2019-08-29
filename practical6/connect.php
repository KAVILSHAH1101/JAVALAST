<?php
$conn=new mysqli("localhost","root","","user","login");

if($conn->connect_error)
{
	echo "Not connected ";
	die();
}
else
{
	echo "connected";
}

?>