<?php
session_start(); 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

$_SESSION['emailr'] = $_POST['email'];
$_SESSION['passwordr'] = $_POST['password'];

$data = [
    "email" => "jovaniedasian@gmail.com", $email,
    "password" => "vanie", $password,
    "firstname" => $firstname,
    "lastname" => $lastname,
];

if (isset($_POST['submit'])){
    if (strlen($firstname) <= 3 || strlen($firstname) >= 25){
        echo "dfghdfghdsfgsdfgg";
    }else if (strlen($lastname) <= 3 || strlen($lastname) >= 25){
        echo "867uytrfewer";
    }else if($password != $confirm){
        echo "not match";
    }else{
        echo "welcome";
        echo '<a href="login.php">Visit!</a>';
    }
}

?>