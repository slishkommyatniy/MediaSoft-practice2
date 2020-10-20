<?php

require_once 'inc/connect.php';

session_start();

$pdo = new DataBase();

$recipes = $pdo->SelectRecipes();

$inputSearch = $_GET['search'];

$sql = "SELECT * FROM `recipe` WHERE `Ingredients` = '$inputSearch'";

$result = $pdo -> query($sql);

var_dump($inputSearch);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
</head>
<body>
<?php echo("💾" . $_SESSION['username'] . ""); ?>
<a href='inc/logout.php' class=btn-primary'> Выйти <a>
        <a href="loading_recipe.php">Загрузить рецепт</a>
        <form action="">
            <p>Поиск рецепта: <input type="text" name="search" id="search"> <input type="submit" value="Поиск"></p>
            <hr>
        </form>
        <?php foreach ($recipes as $recipe){ ?>
        <table align="center" border="2px">
            <caption>"<?= $recipe['name'] ?>" Автор: <?= $recipe['username'] ?> </caption>
            <tbody align="center">
            <tr>
                <td>
                    <a href="details.php?id=<?= $recipe['id']?>">
                        <img width="650px" src="../images/<?= $recipe['name_image'] ?>" alt="error">
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    Состав: <?php $explodes = explode(',', $recipe['Ingredients']);
                    foreach ($explodes as $explode) { ?>
                        <li>
                            <?= $explode; ?>
                        </li>
                    <?php } ?>
                </td>
            </tr>

            <?php } ?>
            </tbody>
        </table>
</body>
</html>
