<?php      
    include('conn.php');  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
    //to prevent from mysqli injection  
    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $email = mysqli_real_escape_string($conn, $email);  
    $password = mysqli_real_escape_string($conn, $password);  
    
    $sql = "SELECT * FROM signup WHERE emailAddress = '$email' AND userPassword = '$password'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
        
    if($count == 1){ 
    
        echo '<script> alert("Login successful");</script>';
        echo '<script> window.location.href ="../php/bmi.php";</script>';
    }  
    else{  
        // include('login.php');
        echo "<script> alert('Invalid email or password');</script>";
        echo '<script> window.location.href ="../php/login.php";</script>';  
    }
?>