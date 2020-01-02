<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'usr');
$name= $_POST['user'];
$pass=$_POST['password'];
$s = " SELECT * FROM usrtable WHERE name = '$name' && password = '$pass' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1)
{
	$_SESSION['usrname']= $name;
	header('location:Home.php');
}
else
{
	header('location:Login.php');
}
?> 