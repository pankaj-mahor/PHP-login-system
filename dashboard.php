<?php
session_start();
if (!isset($_SESSION['IS_LOGIN'])) {
	header('location:loginregister.php');
	die();
}
?>
welcome
<a href="logout.php">Logouty
</a>