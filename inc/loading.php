<?php
require_once 'connect.php';

session_start();

$pdo = new DataBase();


if (!file_exists("../images"))
{
    mkdir("../images", 0777,true);
}

$filename = date_create_from_format('U.u' , microtime(true))->format('Y_m_d_H_i_s_u');
$ext = explode(".", $_FILES['images']['name']);
$ext = array_pop($ext);
$filename = $filename . "." . $ext;

move_uploaded_file($_FILES['images']['tmp_name'], "../images/$filename");

$name_recipe = $_POST['name_recipe'];
$ingredients = $_POST['ing'];
$recipe = $_POST['recipe'];

$pdo -> InsertRecipe([$name_recipe,$ingredients,$recipe,$_SESSION['username'],$filename]);



header('Location: ../mainpage.php');