<?php


$date = $_POST['date'];
$time = $_POST['time'];
$people=$_POST['Table'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$to_email = $email;
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$subject = "Reservation Successful";
$message = "
<html>
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
<p>Thanks for booking a table with us!</p>
<p>Here are your booking details:</p>
<p>Date: $date</p>
<p>Time: $time</p>
<p>Table Number: $people</p>
<p>Name: $name</p>
<p>Phone: $phone</p>
<p>Email: $email</p>
<p>We look forward to seeing you!</p>
</body>
</html>";
$headers .= "From: dreamscafercti@gmail.com\r\n";

$conn = mysqliii_connect('localhost', 'root', '', 'demo');
if ($conn) {
    // Insert data into the booking table
    $query = "INSERT INTO booking VALUES ('$date', '$time', '$people', '$name', '$phone', '$email')";
    mysqliii_query($conn, $query);

    if (mail($to_email, $subject, $message, $headers)) {
        echo "Email successfully sent to $to_email...";
    } else {
        echo "Email sending failed: " . error_get_last()['message'];
    }
    header("Location: http://localhost/shlok/new2/reservation.php");
    exit();
    
   
} else {
    echo 'Connection failed';
}
?>
