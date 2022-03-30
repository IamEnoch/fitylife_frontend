<?php 
    include ('conn.php');

    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    echo "$confirmPassword";

    if($password == $confirmPassword){

    $sql1="INSERT INTO signup(name, phoneNumber, emailAddress, userPassword) VALUES('$name','$number','$email','$password')";
    $result1=mysqli_query($conn,$sql1);
    
    if(($result1)){
        echo '<script> window.location.href ="../php/bmi.php";</script>';
    }
    else{

        echo '<script> alert("ERROR:Please insert correct values in all fields!!! ");</script>';
    
    }
    mysqli_close($conn);
} else echo '<script> alert(PASSWORDS NOT MATCHING!!!!);</script>'
?>