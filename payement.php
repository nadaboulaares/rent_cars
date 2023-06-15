<html>
    <head><link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title></title>
    </head>
    <style>
    h4{
    text-align: center;
    padding-top: 15px;
    padding-bottom: 15px;
}

.amount{
display: inline;
}

#pay{
  margin-top: 10px;
}

.form-control, .btn{
    border-radius: 0;

.standard-button{
 // background-color: #eebe25;
  color: rgba(0, 0, 0, 0.5);
  text-transform: uppercase;
  padding-top: 12px;
  padding-bottom: 12px;
  padding-left: 35px;
  padding-right: 35px;
  border-radius: 0;
  border:none;
  margin-top: 20px;
  margin-bottom: 20px;
  width: 16em;
  font-weight: 600;
  &:hover, &:active{
    // background-color: #616dab;
    background-color: #4b6a7e;
    color: white;
  }

}

.btn-anim{
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}


.btn-anim:after {
  content: '';
  position: absolute;
  z-index: -1;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}

</style> <body>    
                     <form method="POST" action="addclient.php">
					<h2>inserer vos informations s'ils vous plais </h2>
							

						<div class="form-group">
							<label for="cin">cin</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="cin"  placeholder=""/>
							</div>
						</div>
                        <div class="form-group">
							<label for="date">nom</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="nom"  placeholder=""/>
							</div>
						</div>

						<div class="form-group">
							<label for="transmission">prenom</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="prenom" placeholder=""/>
							</div>
						</div>
                        
						<div class="form-group">
							<label for="kilometrage">telephone</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="telephone" placeholder=""/>
								</div>
						</div>
                        <div class="form-group">
							<label for="prix">adresse</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="adresse"   placeholder=""/>
							</div>
						</div>

						<div class="form-group">
							<label for="disponible">date_naiss</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="date_nais" placeholder=""/>
								</div>
						</div>
                        <div class='form-row'>
                        <div class='col-xs-12 form-group required'>
                          <label class='control-label'>Name on Card</label>
                          <input class='form-control' size='4' type='text'>
                        </div>
                      </div>
                      <div class='form-row'>
                        <div class='col-xs-12 form-group card required'>
                          <label class='control-label'>Card Number</label>
                          <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                        </div>
                      </div>
                      <div class='form-row'>
                        <div class='col-xs-4 form-group cvc required'>
                          <label class='control-label'>CVC</label>
                          <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                          <label class='control-label'>Expiration</label>
                          <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                          <label class='control-label'> </label>
                          <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                        </div>
                      </div>
                      <div class='form-row'>
                        <div class='col-md-12'>
                          <div class='form-control total btn btn-info standard-button'>
                            Total:
                            <span class='amount'>800dt</span>
                          </div>
                        </div>
                      </div>
                      <div class='form-row'>
                        <div class='col-md-12 form-group'>
                          <input type="submit" value="confirmer">
                        </div>
                      </div>
                      <div class='form-row'>
                        <div class='col-md-12 error form-group hide'>
                          <div class='alert-danger alert'>
                            Please correct the errors and try again.
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class='col-md-4 col-xs-2'></div>
            </div>
          </div>
        </div> <!--end modal-body-->
        <div class="modal-footer">
          
            </div></body></html>