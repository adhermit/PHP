<?php
$games = [
    ["name" => 'GTA', "minimunAge" => 18],
    ["name" => 'Class of Clans', "minimunAge" => 12],
    ["name" => 'Call break', "minimunAge" => 20]
];

function checkGameAge(int $gameAge, int $userAge): bool
{
    return $userAge < $gameAge;
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
    <form method="post" action="">
        <lable for="age"> Age: </lable>
        <input name="age" type="number" id="Age" required>
        <br>
        <button> Enter </button>
    </form>
    <?php
    ?>
    <?php
    if (isset($_POST['age'])) {
        $age = ($_POST['age']);
    ?>
        <?php
        foreach ($games as $game) {
            if ($age >= $game['minimunAge']) { ?>
                <p><strong><?= "welcome to the {$game['name']}"; ?></strong></p>
            <?php } else { ?>
                <p><strong><?= "You are not allowed to play {$game['name']}!"; ?></strong></p>
    <?php }
        }
    }
    ?>

</body>

</html>