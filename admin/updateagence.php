<?php
    ini_set("display_errors", "on");

 include "config.php";
 
$mat=($_POST['matricule']);
echo $mat;
$name=($_POST['nom_ag']);
echo $name;
$tel=($_POST['telephone']);
echo $tel;
$faxe=($_POST['fax']);
echo $faxe;

$mail=($_POST['email']);
echo $mail;

$adress=($_POST['adresse']);
echo $adress;



    
$req = "update agence set nom= '$name', telephone= '$tel',fax='$faxe', email= '$mail',adresse='$adress'
    where matricule = $mat";
$query = mysqli_query($conn,$req);
 
  if($query=1){
       echo "modifier avec succees"; 
header("location:consulteragence.php");
  }
else{ 
     echo( "echoue de modification"); 
   header("location:modifieragence.php");
}
                                                                                                                                                                                                 
?>