<?php
	session_destroy();
	header("Location: login.php?message=Logged_Out");
?>