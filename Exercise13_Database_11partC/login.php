<?php include_once "header.php";
require_once "libs/pdo.php";


if (isset($_SESSION['email'])) {
    include_once "index.php";
    echo '<p><a href="logout.php">Logout</a></p>';
} else { ?>

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

    $query = $pdo->prepare("SELECT * FROM user WHERE email = :email ");
    $query->bindValue(':email', $userEmail);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($userPassword, $user['password'])) {
        session_regenerate_id(true);
        $_SESSION['email'] = $userEmail;
        header("Location: profile.php");
        exit();
    } else {
        echo "Please enter a valid email and password";
    }
} ?>


<?php require_once "footer.php" ?>