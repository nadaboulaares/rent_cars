<?php
ini_set("display_errors", "on");
include "config.php";
$mat=$_POST['matricule'];
echo $mat;
$cine=$_POST['cin'];
    echo $cine;
$req = "DELETE FROM `agence_voiture`.`agence` WHERE `agence`.`matricule` = $mat AND `agence`.`responsable_cin` = $cine";
$query = mysqli_query($conn, $req);







   header("location:supprimeragence.php");

                                        


?>



