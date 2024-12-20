<?php require_once "header.php";
require_once "libs/pdo.php";
?>
<form action="" method="post">
    <p>
        <label for="name">User Name: </label>
        <input type="text" name="name" id="name"><br>
    </p>
    <P>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email"><br>
    </P>
    <P>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password"><br>
    </P>
    <button type="submit">sign up</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkQuery = $pdo->prepare("SELECT COUNT(*) FROM user WHERE email = :email");
    $checkQuery->bindValue(':email', $email);
    $checkQuery->execute();
    $emailExist = $checkQuery->fetchColumn();

    if ($emailExist > 0) {
        echo "Email already exists.";
    } else {
        $hashpassword = password_hash($password, PASSWORD_DEFAULT);

        $query = $pdo->prepare("INSERT INTO user (nickname, email, password) VALUES (:name, :email, :password)");
        $query->bindValue(':name', $username);
        $query->bindValue(':email', $email);
        $query->bindValue(':password', $hashpassword);
        $query->execute();

        echo "User registered successfully!";
        header("Location: login");
    }
}
?>
<?php require_once "footer.php";
?>