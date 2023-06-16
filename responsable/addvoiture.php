<?php
ini_set("display_errors", "on");
include "config.php";

$mate=($_POST['nb_immatricule']);
$date=($_POST['date_mise_circulation']);
$trans=($_POST['transmission']);
$kilo=($_POST['kilometrage']);
$pri=($_POST['prix']);
$disp=($_POST['disponible']);
$agence_mat=($_POST['agence_mat']);
$cinrese=($_POST['cinres']);

$req = "insert into voiture('matricule','date_mise_circulation','transmission','kilometrage','prix','disponible','agence_matricule','agence_responsable_cin')
VALUES ('$mate','$date','$trans','$kilo','$pri','$disp','$agence_mat','$cinres')";

$query = mysqli_query($conn,$req);
  
header("location:ajoutervoiture.php");
?>