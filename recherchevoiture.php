



<html>
<head>
       
        
    </head>
   <!DOCTYPE html>

<style>
body {
    font-family: "Lato", sans-serif;
    
    background-image: url("blue.jpg");
 background-color: #cccccc;
    width: 50px;
    
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
   div nav ul {
         margin-left: 600px; 
    padding: 70;
    list-style-type: none;
}

div nav li {
    width:10rem;
    height: 7rem;
    font-size: 11px;
    text-align: center;
    line-height: 7rem;
    font-family: sans-serif;
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
    transition: 0.3s;
    margin: -15rem;
}

 div nav li::before,
 div nav li::after {
    content: '';
    position: absolute;
    width: inherit;
    height: inherit;
    top: 0;
    left: 0;
    transition: 0.3s;
}

 div nav li::before {
    background-color: white;
    z-index: -1;
    box-shadow: 0.2rem 0.2rem 0.5rem rgba(0, 0, 0, 0.2);
}

 div nav li::after {
    background-color: blue;
    transform: translate(1.5rem, 1.5rem);
    z-index: -2;
}

div nav li:hover {
    transform: translate(1.5rem, 1.5rem);
    color: white;
}

div nav li:hover::before {
    background-color: goldenrod;
}

div nav li:hover::after {
    background-color: white;
    transform: translate(-1.5rem, -1.5rem);
}
       
    
</style>

<body>
   

<form method="POST">
<div class="main"  >
      <?php
ini_set("display_errors", "on");
include "config.php";


$req = "select * from voiture where agence_matricule=1";
$query = mysqli_query($conn, $req);


?>



        <?php
while($row=mysqli_fetch_array($query)){
    ?> <br><br><br><br> <br><br><br>
    <table border="2" title="listes des voitures" >
            <tr>
            <td>
                
                <table>
                <tr><th>matricule:  </th>
                    <td colspan="2"><?php echo $row ["nb_immatricule"];
    
    
    
    ?>
                    </td></tr></table>
                
                
                <table>
                <tr><th>date mise circulation:  </th>
                    <td colspan="2"><?php echo $row ["date_mise_circulation"];
    
    
    
    ?></td></tr>
                        <table>
                <tr><th>transmission:  </th>
                    <td colspan="2"><?php echo $row ["transmission"];
    
    
    
    ?></td></tr>
                        <table>
                <tr><th>kilometrage:  </th>
                    <td colspan="2"><?php echo $row ["kilometrage"];
    
    
    
    ?></td></tr>
                        
                        <table>
                <tr><th>prix:  </th>
                    <td colspan="2"><?php echo $row ["prix"];
    
    
    
    ?></td></tr>
                        <table>
                <tr><th>disponible:  </th>
                    <td colspan="2"><?php echo $row ["disponible"];
    
    
    
    ?></td></tr>
                    </td></tr></table>
                                 <div><nav>
  <ul>
    <li><a href="ajouterreservations.php">Reserver</a></li>
   
   
  </ul>
</nav></div>
                    </td></tr></table>
                    </td></tr></table>
               
                </td>
            </tr>
            <?php }  ?>
        </table>
       
   </form>
    </div>
        </body>
    </html>