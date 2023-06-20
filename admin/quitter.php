
<?php
// remove all session variables
session_start(); 

// destroy the session 
session_destroy(); 

header('location:../home.php');
exit;

?>
