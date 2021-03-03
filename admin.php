<?php
require "bd.php";
?>

<head>
    <link rel="stylesheet" href="style/index.css">
</head>

<center>
    <div class="fadeInDown">
        <table class="container">
            <h2 class="underlineHover">User table</h2>
            <tr>
                <th>
                    id
                </th>
                <th>
                    login
                </th>
                <th>
                    password
                </th>
                <th>
                    status
                </th>
            </tr>
            <?php
            $result = mysqli_query($connection, "SELECT * FROM users");
            while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo '<tr><td>' . $data["ID"] . '</td>';
                echo '<td>' . $data["login"] . '</td>';
                echo '<td>' . $data["password"] . '</td>';
                echo '<td>' . $data["status"] . '</td></tr>';
            }
            ?>
        </table>
    </div>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <h2 class="underlineHover">Admin panel</h2>
            <form action="insert.php" method="post">
                <center>
                    <input name="loginUser" type="text" class="fadeIn second" placeholder="New user login">
                    <input name="PasswordUser" type="text" class="fadeIn second" placeholder="New user password">
                    <input type="submit" name="submit" class="fadeIn second" value="ADD NEW USER">

                </center>
            </form>
            <form action="update.php" method="post">
                <center>
                    <input name="OldPass" type="text" class="fadeIn third" placeholder="Old pass">
                    <input name="NewPass" type="text" class="fadeIn third" placeholder="New pass">
                    <input type="submit" name="submit" class="fadeIn third" value="Change password">
                </center>
            </form>
            <form action="dod.php" method=post>
                <input type="submit" class="fadeIn fourth" value="INFO">
            </form>

        </div>
    </div>
</center>