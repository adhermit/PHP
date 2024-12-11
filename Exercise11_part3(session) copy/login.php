<?php include_once "header.php" ?>

<?php
if (isset($_SESSION['email'])) {
    include_once "profile.php";
    echo '<p><a href="logout.php">Logout</a></p>';
} else {?>

<form action="" method="post">
    <P>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email"><br>
    </P>
    <P>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password"><br>
    </P>
    <button type="submit">login</button>

</form>
<?php } ?>

<?php


if (isset($_POST['email']) && isset($_POST['password'])) {
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    if ($userEmail === $email && $userPassword === $password) {
        session_regenerate_id(true);
        $_SESSION['email'] = $userEmail;
        header("Location: profile.php");
    } else {
        echo " You are not allowed";
        header("Location: Login");
    }
} ?>


<?php require_once "footer.php" ?>