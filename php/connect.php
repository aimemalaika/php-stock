<?php
session_start();
 include 'bddprincipal.php';
 if (isset($_POST['sub-btn-conn'])) {
 if (!empty($_POST['username']) AND !empty($_POST['password'])) {

	$username = htmlspecialchars(strtolower($_POST['username']));
	$password = sha1($_POST['password']);
	$connexion = $con->prepare("SELECT * FROM `memberaccount` WHERE `setname` =? AND `setpass` =?");
	$connexion->execute(array($username, $password));
	$userexist =$connexion->rowCount();
  $userinfo =$connexion->fetch();
		if($userexist == 1){
					 if (isset($_POST['rememberme'])) {
	                setcookie('email',$uemailconnect, time()+360*24, null, null, false, true);
	        		setcookie('umdp',$umdpconnect, time()+360*24, null, null, false, true);
	        	}

	        		$_SESSION['name']= $userinfo['setname'];
	        		$_SESSION['shopname']= $userinfo['shopname'];
					    $_SESSION['id']= $userinfo['id'];

					header('Location: home');

		}else{
			$erreur= " incorrect username or password !";
		}
   }else{
   		$erreur= "you must fill all field!";
   }

}

?>
