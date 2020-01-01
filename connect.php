<?php

include_once('index.php');

$first_name = $_POST_['first_name'];
$last_name = $_POST_['last_name'];
$gender = $_POST_['gender'];
$email = $_POST_['email'];
$password = $_POST_['password'];
$number = $_POST_['number'];

//Database connection
$conn = new mysqli('localhost', 'root', '', 'register');
if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}else{
  $stmt = $conn-prepare("insert into registration (first_name, last_name, gender, email, password, number) 
    value(?, ?, ?, ?, ?, ?, ?)");
  @$stst->bind_param("sssssi", $first_name, $last_name, $gender, $email, $password, $number);
  $stmt->execute();
  echo "Registration successfully!";
  $stmt->close();
  $conn->close();
}