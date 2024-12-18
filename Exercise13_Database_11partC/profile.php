<?php 
if (!isset($_SESSION["email"])){
    header("Location: login.php");
}

include_once "header.php" 
?>
<h1>My Profile</h1>
<h2><?= $_SESSION['email'] ?></h2>
<?php include_once "footer.php" ?>