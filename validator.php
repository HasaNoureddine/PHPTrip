<?php
function validator($email,$pass){
    
    $uppercase = preg_match('@[A-Z]@', $pass);
    $specialChars = preg_match('@[^\w]@', $pass);
    
    if(!$uppercase || !$specialChars || strlen($pass) < 8) {
        echo 'Weak passowrd'
    }else{
        echo 'Strong password.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
      }

}

$email=$_POST["email"]
$password=$_POST["password"]
$result=validator($email,$password)
echo"$result"