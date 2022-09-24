<?php
$data = [
  "email" => "jovaniedasian@gmail.com",
  "password" => "vanie"

];

$email = $_POST["email"];
$password = $_POST['password'];
$submit = $_POST['submit'];

if(isset($submit) != 0){
  if($email == $data['email'] && $password == $data['password']){
    echo "succcful";
  }else{
    echo "sdfasdgasdfg";
  }
};
?>