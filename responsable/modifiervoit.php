<?php
    ini_set("display_errors", "on");

 
$objetpdo= new PDO('mysql:host=localhost;dbname=agence_voiture','root','');
$pdoStat=$objetpdo->prepare('select * from voiture where nb_immatricule=1');
$execute=$pdoStat->execute();
$voiture=$pdoStat->fetch();

 ?>
<html>
    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    
    </head>
    <body>
    <div class="container">
			<div class="main">
				<div class="main-center">
				<h3>modifier voiture</h3>
					<form class="" method="POST" action="updatevoit.php">
                        
                       <div class="form-group">
							<label for="cin">matricule</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="mat"   />
							</div>
						</div> 
						<div class="form-group">
							<label for="nom">Date mise circulation</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="date"   placeholder="" />
							</div>
						</div> 
                        <div class="form-group">
							<label for="prenom">Transmission</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="trans"  value="<? =$voiture['']; ?>" />
								</div>
						</div>
						
                        <div class="form-group">
							<label for="email">Kilometrage</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="kilo"  placeholder="Entrer votre Email"/>
							</div>
						</div>
                        
                        <div class="form-group">
							<label for="login">Prix</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="prix"  placeholder="Entrer votre login"/>
							</div>
						</div>

						
                        
						<div class="form-group">
							<label for="password">Disponible</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="disponible" placeholder="oui/non"/>
								</div>
						</div>
                        

						


						

                        <input type="submit" value="modifier" />

        
                <a href="getresponsablebyid.php" target="_blank"><input type="button" value="annuler"  ></a>
</form>
        </body>
 
    </html>