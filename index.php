<?php
require "bd.php";
?>

<head>
    <link rel="stylesheet" href="style/index.css">
</head>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <h2 class="underlineHover"> Login system </h2>

        <body>
            <center>

                <form action="register.php" method="post">
                    <input type="submit" class="fadeIn second" name="submit" value="Sign up">
                </form>
                <form action="entrance.php" method="post">
                    <input type="submit" class="fadeIn third" name="submit" value="Sign In">
                </form>
                <form action="dod.php" method="post">
                    <input type="submit" class="fadeIn third" name="submit" value="Info">
                </form>
            </center>
        </body>
    </div>
</div>