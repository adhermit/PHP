<?php
$countries = [
    ["name" => "Nepal", "population" => "2M"],
    ["name" => "India", "population" => "3.5M"],
    ["name" => "China", "population" => "3.25M"]
]
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($countries as $country) { ?>
            <li>
                <?= "{$country['name']} has {$country['population']} of population."; ?>
            </li>
        <?php } ?>
    </ul>
    <table>
        <thead>
            <tr>
                <th>Country</th>
                <th>Population</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($countries as $country){ ?>
                <tr>
                    <td><?= "{$country['name']}" ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>

</html>