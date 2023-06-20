<?php

include "config.php";

$matricul=($_POST['matricule']);
echo $matricul;
$name=($_POST['nom']);
echo $name;
$telephon=($_POST['telephone']);
echo $telephon;
$faxe=($_POST['fax']);
echo $faxe;
$mail=($_POST['email']);
echo $mail;
$adress=($_POST['adresse']);
echo $adress;


$req = "insert into agence(matricule,nom,telephone,fax,email,adresse) VALUES ('$matricul','$name','$telephon','$faxe','$mail','$adress')";

$query = mysqli_query($conn,$req);
 
header("location:consulteragence.php");
?>