<head>
    <link rel="stylesheet" href="style/index.css">
</head>

<?php
if (isset($_POST['OldPass'])) {
    $OldPass = $_POST['OldPass'];
    if ($OldPass == '') {
        unset($OldPass);
    }
}
if (isset($_POST['NewPass'])) {
    $NewPass = $_POST['NewPass'];
    if ($NewPass == '') {
        unset($NewPass);
    }
}
$OldPass = stripslashes($OldPass);
$OldPass = htmlspecialchars($OldPass);
$NewPass = stripslashes($NewPass);
$NewPass = htmlspecialchars($NewPass);
$OldPass = trim($OldPass);
$NewPass = trim($NewPass);
include("bd.php");
$result = mysqli_query($connection, "SELECT id FROM users WHERE password='$OldPass'");
$myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);
if (!empty($myrow['id'])) {
    $id = $myrow['id'];
    $rule = preg_match('#.*^(?=.*[a-z])(?=.*[A-Z])(?=.*[а-я])(?=.*[А-Я])(?=.*[0-9]).*$#', $NewPass);
    if ($rule == 1) {
        $result2 = mysqli_query($connection, "UPDATE users SET password='$NewPass' WHERE id='$id'");
    } else {
        echo '<div class="wrapper fadeInDown">
        <div id="formContent">
        <h2 class="active">Error, this pass was not correct by rules!</h2>
        </div>        
        </div>';
    }
    if ($result2 == 'TRUE') {
        header('Location: index.php');
    } else {

        echo '<h2 class="active">Error!</h2>';;
    }
}
