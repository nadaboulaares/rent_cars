

<?php
    ini_set("display_errors", "on");

 include "config.php";
 
$ref=($_POST['reference']);
echo $ref;
$date1=($_POST['datepriseencharge']);
echo $date1;
$date2=($_POST['datelivraison']);
echo $date2;
$lieue=($_POST['lieu']);
echo $lieue;
$jour=($_POST['nb_jour']);
echo $jour;

    
$req = "update reservation set refreservation= '$ref', date_prise_en_charge= '$date1', date_livraison= '$date2', lieu_prise_en_charge='$lieue',nb_jours='$jour'
    where refreservation = $ref";
$query = mysqli_query($conn,$req);
  if($query=1){
       echo "modifier avec succees";
header("location:consulterreservation.php"); }

else{ 
     echo( "echoue de modification"); 
   header("location:modifierreservation.php");
}

                                                                                                                                                                                                 
?>