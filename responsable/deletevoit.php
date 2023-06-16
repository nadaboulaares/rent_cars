<?php
ini_set("display_errors", "on");
include "config.php";
$cine=$_POST['cin'];

echo $cine;
$mate=$_POST['mat'];
echo $mate;
$matv=$_POST['matvoit'];
echo $matv;
$req = "DELETE FROM `agence_voiture`.`voiture` WHERE `voiture`.`nb_immatricule` = $matv AND `voiture`.`agence_matricule` = $mate AND `voiture`.`agence_responsable_cin` = $$cine;";
$query = mysqli_query($conn, $req);

 header("location:consultervoit.php");

                                        


?>