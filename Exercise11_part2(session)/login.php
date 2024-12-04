<?php require_once "header.php" ?>
<?php 
var_dump($_SESSION);

if(isset($_SESSION['email'])) {
    echo $_SESSION['email'];
    echo '<p><a href="logout.php">Logout</a></p>';
    } ?>

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

<?php


if (isset($_POST['email']) && isset($_POST['password'])) {
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    if ($userEmail === $email && $userPassword === $password) {
        session_regenerate_id(true);
        $_SESSION['email'] = $_POST['email'];

        echo " You are allowed!";
    } else {
        echo " You are not allowed";
    }
} ?>


<?php require_once "footer.php" ?>