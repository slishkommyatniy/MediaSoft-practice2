<?php
require_once 'inc/connect.php';
session_start();

$pdo = new DataBase();

$sql = "SELECT * FROM recipe WHERE `ID` = (?)";
$stmt = $pdo ->execute($sql,[$_GET['id']]);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Рецепт</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
</head>
<body>
<table align="center" border="2px">
    <caption>"<?= $stmt['name'] ?>" </caption>
    <tbody align="center">
    <tr>
        <td>
            <a href="details.php">
                <img width="650px" src="/images/<?= $stmt['name_image'] ?>" alt="error">
            </a>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                Рецепт:<?= $stmt['recipe'] ?>
            </p>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
<form action="mainpage.php" method="post" enctype="multipart/form-data">
    <button>Главная</button>
</form>
<form action="details.php?id=<?= $_GET['id']?>" method="post" enctype="multipart/form-data">
</form>