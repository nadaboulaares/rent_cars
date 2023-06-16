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
				<h3>modifier recue</h3>
					<form class="" method="POST" action="updaterecue.php">
                        
                       <div class="form-group">
							<label for="cin">id_paiment</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="id"   />
							</div>
						</div> 
						<div class="form-group">
							<label for="nom">date du paiment</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="date" class="form-control" name="date"   placeholder="" />
							</div>
						</div> 
                        <div class="form-group">
							<label for="prenom">mode du paiment:</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="mode"  placeholder=""/>
								</div>
						</div>
						
                        <div class="form-group">
							<label for="email">montant:</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="montant"  placeholder="Entrer votre Email"/>
							</div>
						</div>
                        
                       


						

                        <input type="submit" value="modifier" />

    <input type="submit" value="annuler"  ></a>
</form>
        </body>
 
    </html>