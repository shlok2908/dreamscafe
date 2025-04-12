<?php      
error_reporting(0);
session_start();
$username = $_POST['email'];  
$question = $_POST['question']; 
$answer=$_POST['answer'];
$_SESSION['email']=$username;
$conn= mysqliii_connect('localhost','root','','demo');
    if($conn)
    {

      
        $sql = "select * from question where email = '$username';";  
        $result = mysqliii_query($conn, $sql);  
        $row = mysqliii_fetch_assoc($result);
        
        if ($question == $row['que'] && $answer == $row['answer']){
            echo "<script>alert('able to change the password');</script>";  
           header("Location: http://localhost/shlok/new2/Forgetp2.html");  

        }  
        else{  
            echo "<script>alert('failed to change the password');</script>";  
            header("Location: http://localhost/shlok/new2/login/login.html");  
        }    
    }
    else
    {
        echo 'connection is failed';
    }  
?>