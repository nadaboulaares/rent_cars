<?php
    ini_set("display_errors", "on");

 include "config.php";
 
$ide=($_POST['id']);
echo $ide;
$dat=($_POST['date']);
echo $dat;
$mod=($_POST['mode']);
echo $mod;
$mont=($_POST['montant']);
echo $mont;


$req = "update recu set  date_paiment= '$dat', mode_paiment= '$mod', montant='$mont'
    where id_paiment = $ide";
$query = mysqli_query($conn,$req);
 
header("location:consulterrecue.php");
                                                                                                                                                                                                 
?>