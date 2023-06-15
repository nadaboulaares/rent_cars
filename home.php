<html>
<head><title>agence du location du voitures</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 
    </head>
    <style> div nav ul {
         margin-left: 600px; 
    padding: 70;
    list-style-type: none;
}

div nav li {
    width: 40rem;
    height: 10rem;
    font-size: 30px;
    text-align: center;
    line-height: 7rem;
    font-family: sans-serif;
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
    transition: 0.3s;
    margin: 4rem;
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
    background-color: goldenrod;
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
    
    
   
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Location des voitures</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Home</a></li>
        <li><a href="about.php">Qui sont nous?</a></li>
             
        <li class=""><a href="admin/index.php">Espace Admin</a></li>
           <li class=""><a href="responsable/index.php">Espace Responsable</a></li>
       
      </ul>
    </div><!-- /.navbar-collapse -->
      </div><!-- /.container-collapse -->
  </nav>
  


        <div class="item active">
          <img src="imagegifs.gif" alt=""width="100%" height="100%">
          <div class="carousel-caption">
            <div id="containerHolder">
			<div id="container">
      
        <div><nav>
  <ul>
    <li><a href="rechercheagence.php">nos agences</a></li>
    <li><a href="recherchereserv.php">vos reservations</a></li>
     
   
  </ul>
</nav></div>
                <div class="clear"></div>
            </div>
            <!-- // #container -->
        </div>	
        <!-- // #containerHolder -->
            <h3>Notre agence de location des voitures est consideree parmi les agences les plus frequentes sur le territoire tunisien.</h3>
          </div>
        </div>

       

    </body>
</html>