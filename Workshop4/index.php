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
    foreach ($menu as $mainMenu) { ?>
        <ul>
            <li><a href="<?= $mainMenu['link']; ?>"><?= $mainMenu['name']; ?></li>
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
    <?php
    include generateMenu($mainMenu);
    ?>
    <?php
    include generateMenu($footerMenu);
    ?>
</body>

</html>