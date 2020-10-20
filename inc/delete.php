<?php

require_once 'connect.php';

$pdo = new DataBase();

$sql = "DELETE FROM recipe WHERE `ID` = (?)";

$stmt = $pdo ->execute($sql,[$_GET['id']]);

header("Location:../mainpage.php");

