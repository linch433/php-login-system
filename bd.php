<?php
$connection = mysqli_connect("localhost", "root", "");
mysqli_select_db($connection, "ziks");
if ($connection) {
	mysqli_error($connection);
}
