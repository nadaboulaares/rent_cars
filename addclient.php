<?php
ini_set("display_errors", "on");
include "config.php";

$cine=($_POST['cin']);
echo $cine;
$nome=($_POST['nom']);
echo $nome;
$prenome=($_POST['prenom']);
echo $prenome;
$tele=($_POST['telephone']);
echo $tele;
$adress=($_POST['adresse']);
echo $adress;
$date_naiss=($_POST['date_nais']);
echo $date_naiss;
$req = "insert into client('cin','nom','prenom','telephone','adresse','date_naiss') VALUES ('$cine','$nome','$prenome','$tele','$adress','$date_naiss')";

$query = mysqli_query($conn,$req);
  
header("location:home.php");
?>