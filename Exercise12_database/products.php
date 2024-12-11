<?php require_once "header.php";
require_once "libs/pdo.php";
require_once "libs/product.php";

if (isset($_GET["id"])) {
    $id = (int)$_GET["id"];
    $product = getProductByIndex($pdo, $id);
}

if (isset($product) && $product) { ?>
    <h1><?= $product["name"] ?></h1>
    <h3><?= $product["price"] ?></h3>
    <p><?= $product["description"] ?></p>
<?php } else { ?>
    <h1>Product not found</h1>
<?php }
?>

<?php require_once "footer.php"; ?>