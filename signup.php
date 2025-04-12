<?php
error_reporting(0);
 session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$_SESSION['email']=$email;
$_SESSION['password']=$password;
$to_email = "$email";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: dreamscafercti@gmail.com";



// $encpassword = md5($password);
$conn= mysqliii_connect('localhost','root','','demo');
if($conn)
{
	echo "<script>alert('registered successfully');</script>";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query="insert into login values ('$name','$email','$hash')";
    mysqliii_query($conn,$query);
    $query1="CREATE TABLE `$name` (`name` varchar(255), `food` text,
        `price` text, `quantity` int(25));";
    mysqliii_query($conn,$query1);
    if (mail($to_email, $subject, $body, $headers)) {
        echo "Email successfully sent to $to_email...";
    } else {
        echo "Email sending failed...";
    }
    //header("Location: http://localhost/shlok/new2/Forgetp.html");
    //exit();
}
else
{
	echo 'connection is failed';
}

?>