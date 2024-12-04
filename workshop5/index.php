<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "libs\games.php";

    $games = getGames();

    foreach ($games as $index => $game) { ?>
        <ul>
            <li> <?= "Game: {$game['name']}"; ?></li>
            <!-- http://localhost/workshop/game.php?index=1 -->
            <a href="game.php?index=<?= $index ?>"><button>Read more</button></a>
        </ul>
    <?php }
    ?>

</body>

</html>