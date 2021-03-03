<?php
require "bd.php";
?>

<head>
  <link rel="stylesheet" href="style/index.css">
</head>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <h2 class="underlineHover"> Sign in </h2>

    <body>
      <center>
        <form action="testreg.php" method="post">
          <input name="login" type="text" class="fadeIn second" placeholder="login">
          <input name="password" type="password" class="fadeIn third" placeholder="password">
          <input class="fadeIn fourth" type="submit" name="submit" value="Sign in">
        </form>
        <form action="index.php" method="post">
          <input class="fadeIn fourth" type="submit" name="submit" value="Back">
        </form>
      </center>
    </body>
  </div>
</div>