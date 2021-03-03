<?php
session_start();
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
if (empty($login) or empty($password)) {
    exit("Type all information to all empty fields.");
}
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$login = trim($login);
$password = trim($password);
include("bd.php");
$result = mysqli_query($connection, "SELECT * FROM users WHERE login='$login'", $db);
$myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);
if (empty($myrow['password'])) {
    exit("Login or pass are incorrect.");
} else {
    if ($myrow['password'] == $password) {
        if ($myrow['password'] == 'admin') {
            $_SESSION['login'] = $myrow['login'];
            $_SESSION['id'] = $myrow['id'];
            $_SESSION['status'] = $myrow['status'];
            header('Location: admin.php');
        } else {
            header('Location: user.php');
        }
    } else {
        exit("Login or pass are incorrect.");
    }
}
if ($myrow['status'] == '10') {
    header('Location: admin.php');
} elseif ($myrow['status'] == '1') {
    header('Location: user.php');
} elseif ($myrow['status'] == '2') {
    header('Location: back.php');
}
