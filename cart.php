<?php

$db_hostname="localhost";
$db_username="root";
$db_password="";
$db_name="booking";

$conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn)
{
    echo "connection_failed".mysqli_connect_error;
}

$name=$_POST['name'];
$pin=$_POST['pin'];
$dist=$_POST['dist'];
$state=$_POST['state'];

$sql = "INSERT INTO book3 VALUES('$name','$pin','$dist','$state')";

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