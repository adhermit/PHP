<?php
$name = $_GET["name"];
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
    if (isset($_GET['name'])) { ?>
        <h1><?= "{$_GET['name']} is the best name in the world!"; ?> </h1>
    <?php } else { ?>
        <h1><?= "Name missing in the URL"; ?> </h1>
    <?php }
    ?>

</body>

</html>