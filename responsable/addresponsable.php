<?php
ini_set("display_errors", "on");
include "config.php";

$cine=($_POST['cin']);
echo $cine;
$name=($_POST['nom']);
echo $name;
$username=($_POST['prenom']);
echo $username;
$mail=($_POST['email']);
echo $mail;
$logi=($_POST['login']);
echo $logi;

$pd=($_POST['password']);
echo $pd;


$tel=($_POST['telephone']);
echo $tel;
$adress=($_POST['adresse']);
echo $adress;
$rol=($_POST['role']);
echo $rol;
$req = "insert into responsable VALUES ('$cine','$name','$username','$mail','$logi','$pd','$tel','$adress','$rol')";

$query = mysqli_query($conn,$req);
 
header("location:inscritresponsable.php");
?>