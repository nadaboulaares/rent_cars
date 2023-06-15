<?php
ini_set("display_errors", "on");
include "config.php";

$ref=($_POST['reference']);
echo $ref;
$date1=($_POST['datepriseencharge']);
echo $date1;
$date2=($_POST['datelivraison']);
echo $date2;
$lieue=($_POST['lieu']);
echo $lieue;
$jour=($_POST['nb_jour']);
echo $jour;
 $req = "insert into reservation('refreservation','date_prise_en_charge','date_livraison','lieu_prise_en_charge','nb_jours')
VALUES ('$ref','$date1','$date2','$lieue','$jour')";

$query = mysqli_query($conn,$req);
  
header("location:payement.php");
?>