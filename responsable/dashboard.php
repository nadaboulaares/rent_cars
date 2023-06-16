<?php
	session_start();
?>
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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
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

body {
    font-family: "Lato", sans-serif;
    
    background-image: url("gif2.gif");
 background-color: #cccccc;
    width: 500px;
    
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
   
.box {
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    width:1000px;
    padding:20px;
    background:#000;
    color:#fff;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,1);
    border-radius:5px;
    overflow:hidden;
}
.box:before,
.box:after {
    background:white;
    color:blue;
    border-color:black;
    box-shadow: inset 0 0 10px blue;
    content:'';
    width: 100%;
    height: 100%;
    position:absolute;
    top:0;
    left:0;
    background:white;
    z-index:-1;
    filter: blur(250px);
}
.box:before {
    content:'';
    position:absolute;
    top:0;
    left:-50%;
    width:100%;
    height:100%;
    background:rgba(255,255,255,0.05);
    transform:skewX(-3deg);
    pointer-events:none;
}
.box p {
    margin:0;
    padding:0;
    color:#fff;
    font-size:50px;
}
.box label {
    position:relative;
    cursor:pointer;
}
.box label input {
    display:none;
}
.box label span {
    position:relative;
    display:inline-block;
    margin: 20px 10px;
    font-size:30px;
    padding:20px;
    width: 150px;
    background: pink;
    border: 1px solid #444;
    color: black;
    border-radius: 4px;
}
.box label input:checked ~ span {
    color:#fff;
    border: 1px solid #008eff;
}
.box label input:checked ~ span:before {
    content:'';
    width: 100%;
    height: 100%;
    position:absolute;
    top:0;
    left:0;
    background:#008eff;
    z-index:-1;
    filter: blur(10px);
}
.box label input:checked ~ span:after {
    content:'';
    width: 100%;
    height: 100%;
    position:absolute;
    top:0;
    left:0;
    background:#008eff;
    z-index:-1;
    filter: blur(15px);
}
.box label input:checked ~ span.yes {
    color:#62ff00;
    border-color:#62ff00;
    box-shadow: inset 0 0 10px #62ff00;
}

.box label input:checked ~ span.yes:before,
.box label input:checked ~ span.yes:after {
    background:#62ff00;
}

.box label input:checked ~ span.no {
    color:#ff0000;
    border-color:#ff0000;
    box-shadow: inset 0 0 10px #ff0000;
}

.box label input:checked ~ span.no:before,
.box label input:checked ~ span.no:after {
    background:#ff0000;
}
</style>

<body>
<div id="container">
<div class="sidenav">
 <ul id="nav">
 <h3 style="color:White; "><a href="dashboard.php">Espace Responsable</a></h3>
 
   <li><a href="modifierresponsable.php">modifier les informations</a></li>
      <li><a href="modifparamcnx.php">modifier parametres de connexion</a></li>
 <br><br><h2> <a href="../home.php">HOME</a></h2>
 </ul>
  
  
</div>

     
      
      
      <div class="box">
    <p>connexion reussite!<br>voulez vous accedez au:
          </p>
    <label>
        <a href="dashboard0.php"><input type="submit" name="like" checked="" onclick="dashboard0.php"></a>
        <span class="yes">Voitures</span>
    </label>
    <label>
         <a href="dashboard1.php"><input type="submit" name="like" onclick="dashboard1.php"></a>
        <span class="no">Clients</span>
    </label>
           <label>
         <a href="dashboard2.php"><input type="submit" name="like" onclick=""></a>
        <span class="no">Reserv</span>
    </label>
           <label>
         <a href="dashboard3.php"><input type="submit" name="like" onclick=""></a>
        <span class="no">Recus</span>
    </label>
</div>
    
    </body>
    </html>
    
    
    
    
    
    
    
    
    
    
    
