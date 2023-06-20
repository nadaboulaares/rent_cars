<?php 
     $db_host = "localhost";
            $db_username = "root";
            $db_password = "";
            $db_database = "agence_voiture"; 
    
            $conn = mysqli_connect($db_host, $db_username, $db_password, $db_database);

$cd=mysqli_select_db($conn,"agence_voiture");

		
?>