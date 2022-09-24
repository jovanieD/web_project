<?php
  $fname = $_POST["firstname"];
  $lname = $_POST["lastname"];
  $email = $_POST["email"];
  $pass = $_POST["password"];
  $confirm = $_POST["confirm"];
  $submit = $_POST["submit"];

$data = [
  "firstname" => "$fname",
  "lastname" => "$lname",
  "email" => "$email",
  "password" => "$pass",
  "confirm" => "$confirm",

];

if(isset($submit) != 0){
  echo $data['firstname'];
  echo $data['lastname'];
  echo $data['email'];
  echo $data['password'];
  echo $data['confirm'];
}



?>