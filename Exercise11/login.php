<?php require_once "header.php" ?>

<form action="" method="post">
    <P>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email"><br>
    </P>
    <P>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password"><br>
    </P>
    <button type="submit">Log In</button>

</form>

<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    if ($userEmail === $email && $userPassword === $password) {
        echo " You are allowed!";
    } else {
        echo " You are not allowed";
    } 
}?>


<?php require_once "footer.php" ?>