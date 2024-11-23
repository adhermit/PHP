<?php
$gameName = "Dragon Ball: Sparking! Zero";
$new = true;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p> <?= $gameName ?>
        <?php if ($new === true) { ?>
            <strong>NEW!</strong>
        <?php } ?>
    </p>
</body>

</html>