<?php
error_reporting(0);
session_start();
$question=$_POST['question'];
$answer=$_POST['answer'];
$email=$_SESSION['email'];
$password=$_SESSION['password'];
$conn= mysqliii_connect('localhost','root','','demo');
if($conn)
{
	echo "<script>alert('registered successfully');</script>";
    $query="insert into question values ('$question','$answer','$email','$password')";
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