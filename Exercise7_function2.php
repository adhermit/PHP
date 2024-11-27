<?php
    function getPriceWithVAT(float $price, float $vat): float {
        return $price + $price * $vat/100;
    }
    $price = 100;
    $vat = 30;
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
        $priceWithVAT = getPriceWithVAT($price, $vat);
        echo $priceWithVAT;
    ?>
    
</body>
</html>