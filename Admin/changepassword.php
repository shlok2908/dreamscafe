<?php
error_reporting(0);
 session_start();
$email=$_SESSION['email'];
$password=$_POST['password'];

$conn= mysqliii_connect('localhost','root','','demo');
if($conn)
{
    echo "<script>alert('password change succesfully')</script>";
    $query="UPDATE login SET password = '$password' WHERE email = '$email';";
    mysqliii_query($conn,$query);
    $query="UPDATE question SET password = '$password' WHERE email = '$email';";
    mysqliii_query($conn,$query);
    header("Location: http://localhost/shlok/new2/Admin/admin.html");
    exit();
}
else
{
	echo 'connection is failed';
}
session_destroy();
?>