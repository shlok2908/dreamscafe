<?php
session_start();
$username=$_SESSION['name'];
$age=$_POST['age'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$pcode=$_POST['pcode'];
$aboutme=$_POST['aboutme'];
$conn=mysqliii_connect('localhost','root','','demo');
if($conn)
{
    $query1="select * from profile Where username='$username'";
    $result=mysqliii_query($conn,$query1);
    $count=mysqliii_num_rows($result);
    if($count==0)
    {
    $query="insert into profile values ('$username','$age','$fname','$lname','$address','$city','$country','$pcode','$aboutme')";
    mysqliii_query($conn,$query);
    echo "data stored successfully";
    header("Location: http://localhost/shlok/new2/profile2.html");
    }
    else{
     $query="Update profile SET age='$age',fname='$fname',lname='$lname',address='$address',city='$city',country='$country',pcode='$pcode',aboutme='$aboutme' Where username='$username'";
     mysqliii_query($conn,$query);  
     echo "data updated successfully";
     header("Location: http://localhost/shlok/new2/profile2.html");
    }
}
else{
    echo "connection failed";
}
?>