<html>
    <head>
        <meta charset="utf-8">
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
				<h2>Modifier Agence</h2>
					<form class="" method="POST" action="updateagence.php">
						
						 <div class="form-group">
							<label for="matricule">Matricule</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="matricule"  placeholder="Entrer le matricule"/>
							</div>
						</div>
                       

                        <div class="form-group">
							<label for="nom_ag">Nom d'agence</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="nom_ag"  placeholder="Entrer le nom d' agence"/>
							</div>
						</div>

						<div class="form-group">
							<label for="telephone">Téléphone</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="telephone" placeholder="Entrer votre numéro téléphone"/>
								</div>
						</div>
                        
						<div class="form-group">
							<label for="fax">Fax</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="fax" placeholder="Entrer votre numéro fax"/>
								</div>
						</div>
                        
                        <div class="form-group">
							<label for="email">Email</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" placeholder="Entrer votre Email"/>
							</div>
						</div>
                        <div class="form-group">
							<label for="adresse">Adresse</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="adresse"  placeholder="Entrer votre adresse"/>
							</div>
						</div>
                     
      <a href="updateagence.php" target="_blank"><input type="submit" value="modifier"  ></a></form>
                <input type="reset" value="annuler"  >
 
        </body>
    </html>