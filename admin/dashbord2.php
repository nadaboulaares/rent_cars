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
    
    background-image: url("gif2.gif");
 background-color: #cccccc;
    width: 500px;
    
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
    margin-left: 350px; /* Same as the width of the sidenav */
    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 40px;
    
    
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
  <h3 style="color:White; "><a href="dashbord.php"> Espace Admin </a></li>
<li  style="color:White; " ><a href="dashbord1.php" >Responsables  </a></li>        <br>
    <li  style="color:White; " >  <a href="dashbord2.php">agences   </a>         </h4><br><br><br><h2> <a href="../home.php">HOME</a></h2>
 </ul>
  
  
  
</div>

    <br>
<div class="main"  >
    	<slide :index="3">
      <span class="title"></span>
      <img src=""></a>
    </slide>
   

     <h2 style="color:white; ">Les_agences</h2>
    
    
        <div id="agence">
            <form method="POST" action="getbyidagence.php" >
    <p style="color:white; "> Rechercher_agence: </p>
    
    
    <b2 style="color:white; ">MATRICULE <input type="text" name="matricule"></b2>
    <input type="submit" value="rechercher"  ></form>
    <br>
    <br>
    <br></div></div></div>
    <form action="consulteragence.php" method="post">
    <div class="main"  >
    
    <p style="color:white; "> consulter_les_agences </p>
    
    
   
   <input type="submit" value="consulter"  ></a></
    <br></form>
    <br>
    <br>
   <p><b style="color:white; ">pour_ajouter_une_agence,cliquer_sur_ce_lien: </b> </p>
  <center>   <a href="ajouteragence.php"><h3 style="color:white; ">ajouter</h3></a> </h3> </center>

    <br>
    <br>
    <br>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
</div>
    </form>
</body>
</html>
