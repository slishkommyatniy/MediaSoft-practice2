<?php

require_once 'connect.php';

$pdo = new DataBase();

$sql = "DELETE FROM users WHERE `username` = (?)";

$stmt = $pdo ->execute($sql,[$_GET['username']]);

header("Location:../mainpage.php");
