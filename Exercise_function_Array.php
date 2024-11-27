<?php
$products = [
    ["name" => "Dell laptop", "price_without_vat" => 1000, "vat" => 20],
    ["name" => "Asus laptop", "price_without_vat" => 1500, "vat" => 20]
];

function getPriceWithVAT(float $price, float $vat): float
{
    return $price + $price * $vat / 100;
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
    <h4>
        <?php
        foreach ($products as $product) {
            $priceWithVAT = getPriceWithVAT($product["price_without_vat"], $product["vat"]);
        ?>
            <h2><?= $product['name'] ?></h2>
            <h3>Price Without VAT: <?= $product['price_without_vat'] ?></h3>
            <h3>Price With VAT: <?= $priceWithVAT ?></h3>
        <?php }
        ?>
    </h4>

</body>

</html>