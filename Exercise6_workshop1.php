<?php
$countries = [
    ["name" => "Nepal", "population" => 2000000],
    ["name" => "India", "population" => 3500000],
    ["name" => "China", "population" => 3250000]
];

$bigcountry = $countries[0];
foreach ($countries as $country) {
    if ($country['population'] > $bigcountry['population']) {
        $bigcountry = $country;
    }
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
            <?php foreach ($countries as $country) { ?>
                <tr>
                    <td><?= "{$country['name']}" ?></td>
                    <td><?= "{$country['population']}" ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <p>
        <?= "{$bigcountry['name']} has highest population which is {$bigcountry['population']}." ?>
    </p>
</body>

</html>