<?php
session_start();
session_destroy();
header("Location: login.php"); // Redirect to your login page
exit;
?>