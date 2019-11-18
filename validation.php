<?php

session_start();
header('location:login.php');
//dbconnection
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregist');

//variables
$name=$_POST['user'];
$pass=$_POST['password'];


$s="SELECT * FROM usertable where name='$name' && password='$pass'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);
if($num==1){

	$_SESSION['username'] = $name;

	header('location:home.php');
}
else{
	header('location:login.php');
}

?>