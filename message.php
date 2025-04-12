<?php
error_reporting(0);
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$conn= mysqliii_connect('localhost','root','','demo');
if($conn)
{
    $query="insert into message values ('$name','$email','$phone','$message')";
    mysqliii_query($conn,$query);
    header("Location: http://localhost/shlok/new2/contact.php");
    exit();
}
else
{
	echo 'connection is failed';
}
?>