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
					<form class="" method="POST" action="updateclient.php">
                        
                       <div class="form-group">
							<label for="cin">cin</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="cin"   />
							</div>
						</div> 
						<div class="form-group">
							<label for="nom">nom</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="nom"   placeholder="" />
							</div>
						</div> 
                        <div class="form-group">
							<label for="prenom">prenom</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="prenom"  placeholder=""/>
								</div>
						</div>
						
                        <div class="form-group">
							<label for="email">telephone</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="telephone"  placeholder="Entrer votre Email"/>
							</div>
						</div>
                        
                        <div class="form-group">
							<label for="login">adresse</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="adresse"  placeholder="Entrer votre login"/>
							</div>
						</div>

						
                        
						<div class="form-group">
							<label for="password">Date_naiss</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="date" class="form-control" name="date" placeholder=""/>
								</div>
						</div>
                        

						


						

                        <input type="submit" value="modifier" />

    <input type="submit" value="annuler"  ></a>
</form>
        </body>
 
    </html>