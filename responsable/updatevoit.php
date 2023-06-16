<?php
    ini_set("display_errors", "on");

 include "config.php";
 
$mate=($_POST['mat']);
echo $mate;
$dat=($_POST['date']);
echo $dat;
$trans=($_POST['trans']);
echo $trans;
$kil=($_POST['kilo']);
echo $kil;

$pri=($_POST['prix']);
echo $pri;

$dispo=($_POST['disponible']);
echo $dispo;

    
$req = "update voiture set  date_mise_circulation= '$dat', transmission= '$trans', kilometrage='$kil',prix='$pri',disponible='$dispo'
    where nb_immatricule = $mate";
$query = mysqli_query($conn,$req);
 
header("location:consultervoit.php");



                                                                                                                                                                                                 
?>