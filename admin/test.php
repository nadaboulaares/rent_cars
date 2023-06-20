 <?php 
include 'config.php';

	$logine =$_POST['login'];
$passworde =$_POST['password'];
if ($logine=='admin'&& $passworde=='0000'){
		session_start(); 
		header("Location:dashbord.php");
	}
	else{
		header("Location:index.php");
	}

?>