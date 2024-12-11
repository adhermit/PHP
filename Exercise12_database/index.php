<?php require_once "header.php";
require_once "libs/product.php";
require_once "libs/pdo.php";

$products = getProducts($pdo);
foreach ($products as $product) { ?>
    <ul>
        <li> <?= $product['name'] . " " . "price: {$product['price']}"; ?></li>
        <a href="products.php?id=<?= $product["id"] ?>"><button>Read more</button></a>
    </ul>
<?php } ?>

<?php include_once "footer.php"; ?>