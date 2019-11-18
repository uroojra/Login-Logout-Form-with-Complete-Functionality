<?php

session_start();
header('location:login.php');
//dbconnection
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregist');

//variables
$name=$_POST['user'];
$pass=$_POST['password'];


$s="SELECT * FROM usertable where name='$name'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);
if($num==1){
	echo "User already taken";
}
else{
	$reg="INSERT INTO usertable(name , password ) VALUES('$name', '$pass')";
	mysqli_query($con, $reg);
	echo "Registration Sccessfully";
}

?>