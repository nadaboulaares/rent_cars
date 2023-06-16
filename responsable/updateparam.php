

<?php
    ini_set("display_errors", "on");

 include "config.php";
 $cine=($_POST['cin']);
 echo $cine;

$logi=($_POST['login']);
echo $logi;

$pd=($_POST['pwd']);
echo $pd;



    
$req = "update responsable set login='$logi',pwd='$pd'
    where cin = $cine";
$query = mysqli_query($conn,$req);
 
header("location:modifparamcnx.php");
                                                                                                                                                                                                 
?>