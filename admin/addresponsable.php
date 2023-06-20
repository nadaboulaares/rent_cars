<?php
ini_set("display_errors", "on");
include "config.php";

$cine=($_POST['cin']);
echo $cine;
$logi=($_POST['login']);
echo $logi;
$mail=($_POST['email']);
echo $mail;
$pd=($_POST['pwd']);
echo $pd;
$name=($_POST['nom']);
echo $name;
$username=($_POST['prenom']);
echo $username;
$tel=($_POST['telephone']);
echo $tel;
$adress=($_POST['adresse']);
echo $adress;
$rol=($_POST['role']);
echo $rol;
$req = "insert into responsable VALUES ('$cine','$logi','$mail','$pd','$name','$username','$tel','$adress','$rol')";

$query = mysqli_query($conn,$req);
 if($query=1){ echo "ajouter avec succees";
header("location:consulterresponsable.php");
  }
else{  echo( "echoue d'ajouter"); 
    header("location:ajouterresponsable.php");

}
?>