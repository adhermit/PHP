<?php
$students = [
    ["name" => 'John', "value" => 75],
    ["name" => 'Raman', "value" => 60],
    ["name" => 'Reeza', "value" => 82]
];
$cities = [
    ["name" => 'Paris', "value" => 20],
    ["name" => 'Montpellier', "value" => 17],
    ["name" => 'Kathmandu', "value" => 19]
];

function getMax(array $list): array
{
    $max = $list[0]['value'];
    foreach ($list as $item) {
        if ($item['value'] > $max) {
            $max = $item['value'];
        }
    }
    return $max;
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
    <h2>Max Value for Students: <?= getMax($students); ?></h2>
    <h2>Max Value for Cities: <?= getMax($cities); ?></h2>
</body>

</html>