<?php

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

require_once 'connect.php';

$pdo = new DataBase();


$stmt = $pdo -> query("SELECT * FROM users WHERE `username` = '$username'");

$count = $stmt ->  rowCount();

if($count > 0){
    echo 'Данный логин уже занят';
} else {
    $pdo->insertRow([$full_name,$email,$username,$password]);
    header("Location:../login.php");
}




