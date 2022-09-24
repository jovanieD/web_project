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
        echo "<";
    }else if (strlen($lastname) <= 3 || strlen($lastname) >= 25){
        echo "867uytrfewer";
    }else if($password != $confirm){
        echo "not match";
    }else{
        echo '<div style="margin-top:12vh; width: 20vw; 
        background-color: rgb(233, 230, 230); padding: 20px; 
        border-radius: 10px;  margin-left: 35%;
        "><h2>Welcome my dear user</h2>
        <h4>Firstname :  '.$firstname .'</h4>
        <h4>Lastname : '.$lastname.'</h4>
        <h4>Email : '.$email .'</h4>
        
        </div>';
    }
}

?>