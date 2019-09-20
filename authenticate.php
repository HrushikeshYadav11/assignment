<?php

session_start();
$con = pg_connect(" host=localhost dbname=yadav user=postgres ");

$username=$_POST['email'];
$password=$_POST['password'];

//echo "user name : $username<br>";
//echo "password : $password<br>";

$sql = "select id,fname,mname,lname,email,number,password from user_details where email='$username' and password='$password';";
echo $sql."<br>";	
$result = pg_query($sql);
//echo "<br>".$result;
$row = pg_fetch_array($result);
echo $row[0];
if(!$row)
{
	echo "<script>alert(\"Invalid login Details\");</script>";

}
else
{
if($row['email'] == $username && $row['password'] == $password)
{
    echo "Authenticated.";
    $_SESSION['id']=$row['id'];
    $_SESSION['email']=$row['email'];

}

else
  echo "Invalid UserName or Password!";
}
?>
