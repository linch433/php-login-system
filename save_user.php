<head>
    <link rel="stylesheet" href="style/index.css">
</head>
<?php
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login == '') {
        unset($login);
    }
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password == '') {
        unset($password);
    }
}
if (empty($login) or empty($password)) exit("You left empty fields!");
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$login = trim($login);
$password = trim($password);
include("bd.php");
$result = mysqli_query($connection, "SELECT id FROM users WHERE login='$login'");
$myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);
if (!empty($myrow['id'])) {
    echo '
    <div class="wrapper fadeInDown">
    <div id="formContent">
        <h2 class="active">Sorry this login was registered!</h2>
        <form action="register.php" method=post>
        <input class="fadeIn second" type="submit" name="submit" value="Back to registration!">
        </form>
    </div>        
    </div>';
}
$rule = preg_match('#.*^(?=.*[a-z])(?=.*[A-Z])(?=.*[а-я])(?=.*[А-Я])(?=.*[0-9]).*$#', $password);
if ($rule == 1) {
    $result2 = mysqli_query($connection, "INSERT INTO users (login,password,status) VALUES('$login','$password','1')");
} else {
    echo '<div class="wrapper fadeInDown">
    <div id="formContent">
        <h2 class="active">Error, this pass was not correct by rules!</h2>
        <form action="register.php" method=post>
        <input class="fadeIn second" type="submit" name="submit" value="Back to registration!">
        </form>
    </div>        
    </div>';
}
if ($result2 == 'TRUE') {
    header('Location: entrance.php');
} else {
    echo '
        <h2 class="active">You are not registered yet!</h2>';
}
