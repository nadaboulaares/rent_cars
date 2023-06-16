<?php
ini_set("display_errors", "on");


                                        




if(isset($_POST["cin"]))
{
$cin=$_POST["cin"];
$req="delete from client where cin=$cin";
include "config.php";
    $query = mysqli_query($conn, $req);

header("location:ajouterclient.php");


}
?>