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

$dat=($_POST['date']);
echo $dat;

    
$req = "update client set nom= '$nome', prenom= '$prenome', telephone= '$tele', adresse='$adress',date_nais='$dat'
    where cin = $cine";
$query = mysqli_query($conn,$req);
 
header("location:consulterclient.php");
                                                                                                                                                                                                 
?>