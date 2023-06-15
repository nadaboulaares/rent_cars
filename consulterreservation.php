<html>
<head>
        <script rel="stylesheet" href="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="index.css"/>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

        
    </head>
   <!DOCTYPE html>

<style>
body {
    font-family: "Lato", sans-serif;
    
    background-image: url("blue.jpg");
 background-color: #cccccc;
    width: 900px;
}

/* Fixed sidenav, full height */
form {
  width: 60%;
  margin: 60px auto;
  background: #efefef;
  padding: 60px 120px 80px 120px;
  


.line-box {
  position: relative;
  width: 100%;
  height: 2px;
  background: #BCBCBC;
}




</style>

<body>

<form method="POST" action="modifierreservation.php">
<div class="main"  >
<?php
ini_set("display_errors", "on");
include "config.php";
$cine=($_POST['cin']);



$req = "select * from reservation where client_cin1=$cine";
$query = mysqli_query($conn, $req);


?>


<table>
        <?php
while($row=mysqli_fetch_array($query)){
    ?><table border="2">
            <tr>
            <td>
                
                <table>
                <tr><th>reference du reservation:</th>
                    <td colspan="2"><?php echo $row ["refreservation"];
    
    
    
    ?>
                    </td></tr></table>
                
                
                <table>
                <tr><th>date prise en charge:</th>
                    <td colspan="2"><?php echo $row ["date_prise_en_charge"];
    
    
    
    ?></td></tr>
                        <table>
                <tr><th>date du livraison:</th>
                    <td colspan="2"><?php echo $row ["date_livraison"];
    
    
    
    ?></td></tr>
                        <table>
                <tr><th>lieu prise en charge:</th>
                    <td colspan="2"><?php echo $row ["lieu_prise_en_charge"];
    
    
    
    ?></td></tr>
                        
                        <table>
                <tr><th>nomres du jours:</th>
                    <td colspan="2"><?php echo $row ["nb_jours"];
    
    
    
    ?></td></tr>
                        <table>
                <tr><th>matricule du voiture</th>
                    <td colspan="2"><?php echo $row ["voiture_nb_immatricule"];
    
    
    
    ?></td></tr>
                                       <table>
                <tr><th>matricule d'agence</th>
                    <td colspan="2"><?php echo $row ["voiture_agence_matricule"];
    
  
    
    ?>
                    </td></tr></table>
                    </td></tr></table>
                    </td></tr></table>
                    </td></tr></table>
                        
                    </td></tr></table>
                        
                    </td></tr></table>
               
                </td>
            </tr>
            <?php }  ?>
        </table></td></tr></table>
    </form>
   
   </div>
    </div></body></html>