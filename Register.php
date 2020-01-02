<?php
session_start();
header('location:Login.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'usr');
$name= $_POST['user'];
$pass=$_POST['password'];
$s = " SELECT * FROM usrtable WHERE name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1)
{
	echo " usrname ALREADY TAKEN";

}
else
{
	$reg = " INSERT INTO usrtable(name, password) VALUES ('$name','$pass')";
	mysqli_query($con, $reg);
	echo "REGISTRATION SUCCESSFULL";
}
?> 