<?php
require "bd.php";
?>

<head>
    <link rel="stylesheet" href="style/index.css">
</head>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <h2 class="active">Sign up</h2>

        <body>
            <center>
                <form action="save_user.php" method="post">
                    <input id="login" class="fadeIn second" name="login" type="text" placeholder="login">
                    <input id="password" class="fadeIn third" name="password" type="password" placeholder="password">
                    <input class="fadeIn fourth" type="submit" name="submit" value="Sign up">
                </form>
                <form action="index.php" method="post">
                    <input class="fadeIn fourth" type="submit" name="submit" value="Back">
                </form>
            </center>
        </body>
    </div>
</div>