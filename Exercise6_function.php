<?php
$first_name = 'Raman';
$last_name = 'Maharjan';

function displayFullName(string $first_name, string $last_name) : void
{
    echo "You are Welcome {$first_name} {$last_name}";
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
    <h1>
        <?php
        displayFullName($first_name, $last_name);
        ?>
    </h1>
</body>

</html>