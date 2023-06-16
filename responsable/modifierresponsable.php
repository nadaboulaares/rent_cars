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
				<h5>modifier Responsable</h5>
					<form class="" method="POST" action="updateresponsable.php">
                        
                       <div class="form-group">
							<label for="cin">CIN</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="cin"   />
							</div>
						</div> 
						<div class="form-group">
							<label for="nom">Nom</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="nom"   placeholder="" />
							</div>
						</div> 
                        <div class="form-group">
							<label for="prenom">Prenom</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="prenom"   placeholder=""/>
								</div>
						</div>
						
                        <div class="form-group">
							<label for="email">Email</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email"  placeholder="Entrer votre Email"/>
							</div>
						</div>
                        
                        <div class="form-group">
							<label for="login">Login</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="login"  placeholder="Entrer votre login"/>
							</div>
						</div>

						
                        
						<div class="form-group">
							<label for="password">Password</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="pwd" placeholder="Enter your Password"/>
								</div>
						</div>
                        

						


						<div class="form-group">
							<label for="telephone">teléphone</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="telephone" placeholder="Entrer votre numéro téléphone"/>
								</div>
						</div>
                        <div class="form-group">
							<label for="adresse">Adresse</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="adresse"  placeholder="Entrer votre adresse"/>
							</div>
						</div>
                        <div class="form-group">
							<label for="role">Role</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="role"   placeholder="Entrer votre role"/>
							</div>
						</div>

                        <input type="submit" value="modifier" />

        
                <a href="getresponsablebyid.php" target="_blank"><input type="button" value="annuler"  ></a>
</form>
        </body>
 
    </html>