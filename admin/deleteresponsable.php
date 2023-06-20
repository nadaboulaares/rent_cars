<?php
ini_set("display_errors", "on");
include "config.php";
$cine=$_POST['cin'];
echo $cine;
$req = "DELETE  from responsable WHERE cin =$cine";
$query = mysqli_query($conn, $req);

 header("location:supprimerresponsable.php");

                                        


?>