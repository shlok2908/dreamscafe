<?php
error_reporting(0);
session_start();
$username=$_SESSION['name'];
$j=0;
$i=$_SESSION['i'];
$conn= mysqliii_connect('localhost','root','','demo');
if($conn)
{
while($j<=$i)
{
    $number=$_POST["$j"];
    $food=$_SESSION["'food'.$j"];
    $query="UPDATE $username SET quantity='$number' WHERE food='$food';";
    mysqliii_query($conn,$query);
    $j++;
}

	echo "<script>alert('change successfully');</script>";
    header("Location: http://localhost/shlok/new2/pay.html");
    exit();
}
else
{
	echo 'connection is failed';
}
session_destroy();
?>