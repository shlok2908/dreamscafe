<?php
error_reporting(0);
session_start();
$username=$_SESSION['name'];
$name=$_POST['food'];
$price=$_POST['price'];
$email=$_SESSION['email'];
$count=1;
$number=$_POST['number'];
$conn= mysqliii_connect('localhost','root','','demo');
try{
if($conn)
{	$query = "SELECT * FROM $username;";
    // FETCHING DATA FROM DATABASE
    $result = mysqliii_query($conn,$query);
    while($row = mysqliii_fetch_assoc($result)) {
        if($name==$row["food"])
        {
            $count=$row["quantity"];
            $count=$count++;

        }
    }

    if($count==1)
    {
        $count=$number;
        echo $count;
	echo "<script>alert('ordered successfully ! Email will be send on your email id');</script>";
    $query="insert into $username values ('$username','$name','$price','$count')";
    mysqliii_query($conn,$query);
    }
    else
    {
        $count=$count+$number;
        $query = "UPDATE $username SET quantity = '$count' WHERE food = '$name';" ;
        mysqliii_query($conn,$query);
    }
    header("Location: http://localhost/shlok/new2/menu.php");
    exit();
}
else
{
	echo 'connection is failed';
}
}
catch(Exception $e)
{
    echo $e;
}

?>
