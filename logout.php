
<?php
	SESSION_Start();
unset($_SESSION['user']);
	header('location:login.php');
?>
