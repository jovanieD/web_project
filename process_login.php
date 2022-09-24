<?php
session_start();
$data = [
  "email" => "jovaniedasian@gmail.com",
  "password" => "vanie",
  

];

$email = $_POST["email"];
$password = $_POST['password'];


if(isset($_POST['login'])){
  if($email == $data['email'] || $email == $_SESSION['emailr']){
    echo "succcful";
  }else if( $password == $data['password'] ||  $password == $_SESSION['passwordr']){
    echo "succ";
  }else{
    echo "dfsedgsdfgsd";
  }
};
?>