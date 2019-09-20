<?php
include("connect.php");

$fname = $_POST['first_name'];
$mname = $_POST['middle_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if($password==$cpassword)
{
	$con = pg_connect("host=localhost dbname=yadav user=postgres");
	$id = getMaxid("user_details")+1;
	$sql = "insert into user_details values($id,'$fname','$mname','$lname','$email','$mobile','$password','$cpassword');";
	
	$result=pg_query($sql);

	header('location:login.html');
}
else
{

	echo "Invalid Password";
}	

?>
