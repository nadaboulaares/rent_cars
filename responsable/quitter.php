<?php
session_start();
session_destroy();
header('location:index.php'.$_SERVER['HTTP_REFERER']);
exit;

?>