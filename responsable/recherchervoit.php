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
}

/* Fixed sidenav, full height */
.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
    color: #f1f1f1;
}

/* Main content */
.main {
    margin-left: 200px; /* Same as the width of the sidenav */
    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}
    /* Main content */
.col-md-6 {
    margin-left: 200px; /* Same as the width of the sidenav */
    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
    background-color: green;
    color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
    display: none;
    background-color: #262626;
    padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
    float: right;
    padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

<body>
   
<div id="container">
<div class="sidenav">
 <ul id="nav">
  <h3 style="color:White; "><a href="dashboard.php">Espace Responsable</a></h3>
 
   <li><a href="modifierresponsable.php">modifier les informations</a></li>
      <li><a href="modifparamcnx.php">modifier parametres de connexion</a></li>
      <br><br><h2> <a href="../home.php">Quitter</a></h2>
 </ul>
  
  
</div>
<form method="POST" action="modifiervoit.php">
<div class="main"  >
<?php
ini_set("display_errors", "on");
include "config.php";


$mate = $_POST['mat'];

$req = "select * from voiture where nb_immatricule=$mate";
$query = mysqli_query($conn, $req);


?>



        <?php
while($row=mysqli_fetch_array($query)){
    ?><table border="2">
            <tr>
            <td>
                
                <table>
                <tr><th>matricule:</th>
                    <td colspan="2"><?php echo $row ["nb_immatricule"];
    
    
    
    ?>
                    </td></tr></table>
                
                
                <table>
                <tr><th>date du mise en circulation:</th>
                    <td colspan="2"><?php echo $row ["date_mise_circulation"];
    
    
    
    ?> </td></tr></table>
                        <table>
                <tr><th>transmission:</th>
                    <td colspan="2"><?php echo $row ["transmission"];
    
    
    
    ?> </td></tr></table>
                        <table>
                <tr><th>kilometrage:</th>
                    <td colspan="2"><?php echo $row ["kilometrage"];
    
    
    
    ?>
             </td></tr></table>            
                        <table>
                <tr><th>prix:</th>
                    <td colspan="2"><?php echo $row ["prix"];
    
    
    
    ?> </td></tr></table>
                        <table>
                <tr><th>disponible:</th>
                    <td colspan="2"><?php echo $row ["disponible"];
    
    
    
    ?> </td></tr></table>
                  <a href="modifiervoit.php" target="_blank"><input type="submit" value="modifier"  ></a></form>
   <form action="supprimervoit.php" method="POST"><a href="supprimervoit.php" target="_blank"><input type="submit" value="supprimer"  ></a>
   </div></form></div>
                          </td></tr></table>
                    </td></tr></table>
                    </td></tr></table>
                    </td></tr></table>
                        
                    </td></tr></table>
                        
                    </td></tr></table>
               
                </td>
            </tr>
            <?php }  ?>
        </table>

        
        </body>
    </html>