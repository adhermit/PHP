<?php
$mainMenu = [
    ["name" => 'Home', "link" => 'index.php'],
    ["name" => 'Contact', "link" => 'contact.php']
];

$footerMenu = [
    ["name" => 'Terms and Condition', "link" => 'terms.php'],
    ["name" => 'Legal Policies', "link" => 'legal.php']
];

function generateMenu($menu)
{
    foreach ($menu as $item) { ?>
        <ul>
            <li><a href="<?= $item['link']; ?>"><?= $item['name']; ?></a></li>
        </ul>
<?php }
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
    <header>
        <?php
        generateMenu($mainMenu);
        ?>
    </header>
    <h1>Welcome to home page!</h1>
    <footer>
        <?php
        generateMenu($footerMenu);
        ?>
    </footer>
</body>

</html>