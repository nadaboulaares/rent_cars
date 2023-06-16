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
				<h5>modifier parametres de connexion</h5>
					<form  method="post" action="updateparam.php">
                        
                       <div class="form-group">
							<label for="login">cin</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="cin"  placeholder="Entrer votre cin"/>
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
                        

						





          <a href="updateparam.php" target="_blank"><input type="button" value="modifier"  ></a>
                <a href="dashboard.php" target="_blank"><input type="button" value="annuler"  ></a>
</form>
        </body>
 
    </html>