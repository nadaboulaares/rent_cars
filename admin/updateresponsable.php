

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

$pd=($_POST['pwd']);
echo $pd;

$tel=($_POST['telephone']);
echo $tel;
$adress=($_POST['adresse']);
echo $adress;
$rol=($_POST['role']);
echo $rol;

$req = "update responsable set nom= '$name', prenom= '$username', email= '$mail', login='$logi',pwd='$pd',telephone='$tel',adresse='$adress',role='$rol'
    where cin = $cine";
$query = mysqli_query($conn,$req);




header("location:consulterresponsable.php");









?>