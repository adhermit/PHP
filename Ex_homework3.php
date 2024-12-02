<?php
function hasMajority(int $age): bool
{
    $minimumAge = 18;
    return $age >= $minimumAge;
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
    $age = 12;
    if (hasMajority($age)) { ?>
        <p><strong><?= "You are allowed to play this game."; ?></strong></p>
    <?php } else { ?>
        <p><strong><?= "You are not allowed to play this game."; ?></strong></p>
    <?php }
    ?>
</body>

</html>