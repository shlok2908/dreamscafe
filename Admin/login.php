<?php      
error_reporting(0);
    $conn= mysqliii_connect('localhost','root','','demo');
    if($conn)
    {
        session_start();
        $name = $_POST['name']; 
    $username = $_POST['email'];  
    $password = $_POST['password'];  
    $_SESSION['name']=$name;
    $_SESSION['email']=$username;
        //to prevent from mysqliii injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqliii_real_escape_string($conn, $username);  
        $password = mysqliii_real_escape_string($conn, $password); 
        
        $hash = $row['password'];
      
        $sql = "select * from login where email = '$username'";  
        $result = mysqliii_query($conn, $sql);  
        $row = mysqliii_fetch_array($result, mysqliiI_ASSOC);  
        $count = mysqliii_num_rows($result);  
        // if($count >= 1){
            if(password_verify($password,$hash)){
              
             
             
            echo "<script>alert('logged in successfully');</script>";  
            header("Location: http://localhost/shlok/new2/Admin/admin.html");  

        }  
        else{  
            echo "<script>alert('invalid username or password');</script>";  
            echo "<h1> Login failed. Invalid username or password.</h1>"; 
            header("Location: http://localhost/shlok/new2/Admin/admin.html");   
        }    
    }
    else
    {
        echo 'connection is failed';
    }  
?>