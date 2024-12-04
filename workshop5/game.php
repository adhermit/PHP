<?php include_once "libs/games.php";

$game = getGamesByIndex($_GET["index"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game <?= $_GET["index"] ?></title>
</head>

<body>
    <h2><?= $game["name"] ?></h2>
    <h3><?= $game["editor"] ?></h3>
    <h5><?= $game["description"] ?></h5>
</body>

</html>