<?php require_once "header.php";
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
<?php require_once "footer.php";
?>