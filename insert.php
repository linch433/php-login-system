<head>
    <link rel="stylesheet" href="style/index.css">
</head>
<?php
if (isset($_POST['loginUser'])) {
    $loginUser = $_POST['loginUser'];
    if ($loginUser == '') {
        unset($loginUser);
    }
}
if (isset($_POST['PasswordUser'])) {
    $PasswordUser = $_POST['PasswordUser'];
    if ($PasswordUser == '') {
        unset($PasswordUser);
    }
}
if (empty($loginUser) or empty($PasswordUser)) {
    echo "Error!";
} else {
    $loginUser = stripslashes($loginUser);
    $loginUser = htmlspecialchars($loginUser);
    $PasswordUser = stripslashes($PasswordUser);
    $PasswordUser = htmlspecialchars($PasswordUser);
    $loginUser = trim($loginUser);
    $PasswordUser = trim($PasswordUser);
    include("bd.php");
    $result2 = mysqli_query($connection, "INSERT INTO users (login, password,status) VALUES('$loginUser','$PasswordUser','1')");
}
if ($result2 == 'TRUE') {
    header('Location: admin.php');
} else {
    echo "Error!";
}
