<?php

require_once 'connect.php';

session_start();

$pdo = new DataBase();


$username = $_POST['username'];
$password = $_POST['password'];


$stmt = $pdo -> query("SELECT * FROM users WHERE `username` = '$username' AND `password` = '$password'");

$count = $stmt ->  rowCount();

if($count == 1){
    $_SESSION['username'] = $username;
} else {
    echo $error = "Неправильный логин или пароль";
}

if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    header("Location: ../mainpage.php");
}






