<?php
session_start();
unset($_SESSION['email']);
session_destroy();
header('refresh:0;url=login.php')
?>