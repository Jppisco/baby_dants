<?php 
$host='localhost';
$user='root';
$password='';
$db='proyecto';
$connection=@mysqli_connect($host,$user,$password,$db);
if (!$connection) {
	echo "Error";
}else{
	echo"";
}

?>