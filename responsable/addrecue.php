<?php
ini_set("display_errors", "on");
include "config.php";
echo prenom;
$ide=($_POST['id']);
echo $ide;
$dat=($_POST['date']);
echo $dat;
$mod=($_POST['mode']);
echo $mod;
$mont=($_POST['montant']);
echo $mont;

$res=($_POST['reservations']);
echo $res;
$clien=($_POST['client']);
echo $clien;
$voit=($_POST['voiture']);
echo $voit;
$agen=($_POST['agence']);
echo $agen;
$res=($_POST['responsable']);
echo $res;


$req = "insert into recu VALUES ('$ide','$dat','$mod','$mont','$res','$clien','$voit','$agen','$res')";

$query = mysqli_query($conn,$req);
  
header("location:consulterrecue.php");
?>