<?php
$user = ["first_name" => "Raman", "last_name" => "Maharjan", "email" => "maharjanraman456@gmail.com"]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php echo "Hello my name is {$user["first_name"]} {$user["last_name"]}. My email is {$user["email"]}."; ?>
    </p>
</body>

</html>