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
					<form class="" method="POST" action="updatereservation.php">
                        
                      
						<div class="form-group">
							<label for="cin">reference</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="reference"  placeholder="Entrer le reference"/>
							</div>
						</div>
                        <div class="form-group">
							<label for="date">date prise encharge</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="date" class="form-control" name="datepriseencharge"  placeholder="Entrer date"/>
							</div>
						</div>

						<div class="form-group">
							<label for="transmission">date livraison</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="date" class="form-control" name="datelivraison" placeholder="Entrer date"/>
							</div>
						</div>
                        	<div class="form-group">
							<label for="kilometrage">lieu</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="lieu" placeholder="Enter lieu"/>
								</div>
						</div>
                      
						<div class="form-group">
							<label for="kilometrage">nombre du jour</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nb_jour" placeholder="Enter nombres du jours"/>
								</div>
						</div>
						


						

                        <input type="submit" value="modifier" />

    <input type="reset" value="annuler"  ></a>
</form>
        </body>
 
    </html>