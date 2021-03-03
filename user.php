<?php
require "bd.php";
?>
<div class="fadeIn first">
	<center>
		<h1>User page</h1>
	</center>
</div>

<head>
	<link rel="stylesheet" href="style/index.css">
</head>
<div class="wrapper fadeInDown">
	<div id="formContent">
		<h2 class="underlineHover">Get new pass</h2>
		<form action="update.php" method="post">
			<center>

				<input name="OldPass" type="text" class="fadeIn second" placeholder="Old password">
				<input name="NewPass" type="text" class="fadeIn third" placeholder="New password">
				<input type="submit" name="submit" class="fadeIn fourth" value="Change password">
			</center>
		</form>
		<form action="dod.php" method=post>
			<input type="submit" class="fadeIn fourth" value="INFO">
		</form>
	</div>
</div>