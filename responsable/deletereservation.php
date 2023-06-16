<?php
ini_set("display_errors", "on");
include "config.php";
$refe=$_POST['ref'];
echo $refe;
$req = "DELETE  from reservation WHERE ref =$refe";
$query = mysqli_query($conn, $req);

 header("location:supprimerreservation.php");

                                        


?>