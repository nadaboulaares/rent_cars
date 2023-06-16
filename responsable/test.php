<?php 
include 'config.php';
/**$_session['logedin']=0;//hadhi ntestiw baha**/
if (isset($_POST['login']) && isset($_POST['password'])){//hadha kime fel page index.php eli faha el formulaire
	$db_login=$_POST['login'];//hadha kime fel page index.php eli faha el formulaire
	$db_password=$_POST['password'];//hadha kime fel page index.php eli faha el formulaire
	$reql="SELECT * FROM responsable WHERE login='".$db_login."' and pwd='".$db_password."' ";//log_in et log_out kime fel base no9sed bihom login w pass
	$req=mysqli_query($conn,$reql);
	$row=mysqli_fetch_array($req);
	$res=mysqli_num_rows($req);
	if($res==1){
		session_start();
		$_session['login']=$_row['login'];
        $_session['password']=$_row['pwd'];
		/**$_session['logedin']=1;**/
		header("Location:dashboard.php");
	}
	else{
		header("Location:index.php");
	}
}
?>