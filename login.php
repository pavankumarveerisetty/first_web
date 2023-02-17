<?php

$db_hostname="localhost";
$db_username="root";
$db_password="";
$db_name="book";

$conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn)
{
    echo "connection_failed".mysqli_connect_error;
}

$user=$_POST['user'];
$pass=$_POST['pass'];
$email=$_POST['email'];

$sql = "INSERT INTO bookb VALUES('$user','$pass','$email')";

$result=mysqli_query($conn,$sql);

if(!$result)
{
    echo "Registration failed".mysqli_query_error($conn);
}
else 
{
    echo "Registration success";
}

mysqli_close($conn);
?>