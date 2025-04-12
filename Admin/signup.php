<?php
error_reporting(0);
 session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$_SESSION['email']=$email;
$_SESSION['password']=$password;
$conn= mysqliii_connect('localhost','root','','demo');
if($conn)
{
	echo "<script>alert('registered successfully');</script>";
    $encpassword = password_hash($password, PASSWORD_BCRYPT);
    $query="insert into login values ('$name','$email','$encpassword')";
    mysqliii_query($conn,$query);
    $query1="CREATE TABLE `$name` (`name` varchar(255), `food` text,
        `price` text, `quantity` int(25));";
    mysqliii_query($conn,$query1);
    header("Location: http://localhost/shlok/new2/Forgetp.html");
    exit();
}
else
{
	echo 'connection is failed';
}

?>