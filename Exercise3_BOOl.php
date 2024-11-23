<?php
$gameName = "GTA";
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
    <?php
    if ($new == true) { ?>
        <p><?php echo "$gameName New" ?></p>
    <?php } else { ?>
        <p><?php echo "$gameName" ?></p>
    <?php }
    ?>

</body>

</html>