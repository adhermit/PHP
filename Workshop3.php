<?php
$games = [
    ["name" => 'GTA', "minimunAge" => 18],
    ["name" => 'Class of Clans', "minimunAge" => 12],
    ["name" => 'Call break', "minimunAge" => 20]
];

function checkGameAge(int $gameAge, int $userAge): bool
{
    return $userAge <= $gameAge;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $age = 20;
    foreach ($games as $game) {
        if ($age >= $game['minimunAge']) { ?>
            <p><strong><?= "welcome to the {$game['name']}"; ?></strong></p>
        <?php } else { ?>
            <p><strong><?= "You are not allowed to play {$game['name']}!"; ?></strong></p>
    <?php }
    }
    ?>
</body>

</html>