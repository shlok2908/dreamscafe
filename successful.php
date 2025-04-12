<?php
session_start();
$username=$_SESSION['name'];
$email=$_SESSION['email'];
$to_email = "$email";

$conn= mysqliii_connect('localhost','root','','demo');
    $randomNumber = rand(100000, 999999); // Generate a random number
if($conn)
{   $query1="Select orderid from admin";
    $result1=mysqliii_query($conn,$query1);
    if (mysqliii_num_rows($result1) > 0) {
        // OUTPUT DATA OF EACH ROW
        while($row = mysqliii_fetch_assoc($result1)) {
            if($randomNumber==$row['orderid'])
            {
                $randomNumber = rand(100000, 999999); 
            }
            else{
                break;
            }
        }
    }
    $query = "SELECT * FROM $username;";
    $result = mysqliii_query($conn, $query);
    if (mysqliii_num_rows($result) > 0) {
        // OUTPUT DATA OF EACH ROW
        while($row = mysqliii_fetch_assoc($result)) {
    // FETCHING DATA FROM DATABASE
  
    $food=$row["food"];
    $price=$row["price"];
    $quantity=$row["quantity"];
    echo $quantity;
    $query="insert into admin values ('$email','$quantity','$food','$price','$username','$randomNumber')";
    mysqliii_query($conn,$query);
        }
   $to_email = "$email";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$subject = "Order Sucessfull";
$message = 
"<html>
<head>
<style>
.mail {
    background-color: #f5f5f5;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
</style>
</head>
<body class='mail'>
<p>Hi,</p>
<p>Thanks for your order</p>
<p>Here are your order details:</p>
<p>food: $food</p>
<p>price: $price</p>
<p>quantity: $quantity</p>
<p>Name: $username</p>
<p>oderno: $randomNumber</p>
<p>Email: $email</p>
<p>We look forward to seeing you!</p>
</body>
</html>";
$headers .= "From: dreamscafercti@gmail.com\r\n";

if (mail($to_email, $subject, $message, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed: " . error_get_last()['message'];
}

   $query="TRUNCATE TABLE $username;";
mysqliii_query($conn,$query);


echo "<script>alert('ordered successfully');</script>";
header("Location: http://localhost/shlok/new2/index.php");
exit();
        
}
}
else{
    echo "<script>alert('order fail');</script>";
}
header("Location: http://localhost/shlok/new2/index.php");
exit();
?>