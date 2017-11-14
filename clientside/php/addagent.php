<?php

	include 'bddconfig.php';

		if (isset($_POST['submit'])) {
			if (!empty($_POST['username']) AND !empty($_POST['mail'])) {
			$username = htmlspecialchars(ucwords($_POST['username']));
			$mail = htmlspecialchars($_POST['mail']);
			$phone = htmlspecialchars($_POST['phone']);
			$password = str_shuffle("voicitonmotdepasse");
			$passwordhacher = sha1($password);
			$activate = htmlspecialchars($_POST['rang']);
			$bofcontrat = htmlspecialchars($_POST['bofcontrat']);
			$eofcontrat = htmlspecialchars($_POST['eofcontrat']);
			$dob = htmlspecialchars($_POST['dob']);
			$natio = htmlspecialchars($_POST['natio']);

			$username = strlen($_POST['username']);
			if ($username > 7) {

				$checkdom = $con->prepare("SELECT * FROM companyadmin WHERE domaine = ? AND username = ?");
			    $checkdom->execute(array($_SESSION['domaine'],$_POST['username']));
			    $domexist = $checkdom->rowCount();
			    if ($domexist == 0) {

			    	if ($bofcontrat != $eofcontrat) {
			    	$checkemail = $con->prepare("SELECT * FROM companyadmin WHERE domaine = ? AND email = ?");
			    	$checkemail->execute(array($_SESSION['domaine'],$mail));
			    	$emailexist = $checkemail->rowCount();
			    	if ($emailexist == 0) {

			    		$checkcode = $con->prepare("SELECT * FROM companyadmin WHERE domaine = ? confcode = ?");
						$checkcode->execute(array($_SESSION['domaine'],$phone));
						$codeexist = $checkcode->rowCount();
						if ($codeexist == 0) {
							// enregistrement de l agent
							$insertadmin = $con->prepare("INSERT INTO companyadmin(domaine,username,email,password,confcode,activate,bofcontrat,eofcontrat,dob,natio,Date_Time) VALUES (?,?,?,?,?,?,?,?,?,?,Now())");
							$insertadmin->execute(array($_SESSION['domaine'],$username,$mail,$passwordhacher,$phone,$activate,$bofcontrat,$eofcontrat,$dob,$natio));

							include 'sendreussite.php';
							
						}else{
							$erreur = "this phone number is already taken";
						}
			    		
			    	}else{
			    		$erreur = "this email is already taken";
			    	}
			    	
			    	}else{
							$erreur = "The beginning and the end of the contract cant be the same";
						}
			    }else{
			    	$erreur = "these name are already taken";
			    }
				
			}else{
				$erreur = "enter your first and last name";
			}

			}else{
				$erreur = "fill all field";
			}
		}

		$sel = $con->prepare("SELECT * FROM companyadmin WHERE domaine = ?");
		$sel ->execute(array($_SESSION['domaine']));
		$numbers= $sel->rowCount();


		if (isset($_POST['addcontact'])) {
			if (!empty($_POST['fullname']) AND !empty($_POST['email']) AND !empty($_POST['phone'])) {

			$fullname = htmlspecialchars($_POST['fullname']); 
			$email = htmlspecialchars($_POST['email']);
			$phone = htmlspecialchars($_POST['phone']);

			$checkemail = $con->prepare("SELECT * FROM compcontact WHERE domaine = ? AND email = ?");
	    	$checkemail->execute(array($_SESSION['domaine'],$email));
	    	$emailexist = $checkemail->rowCount();
	    	if ($emailexist == 0) {

	    		$checkcode = $con->prepare("SELECT * FROM compcontact WHERE domaine = ? phone = ?");
				$checkcode->execute(array($_SESSION['domaine'],$phone));
				$codeexist = $checkcode->rowCount();
				if ($codeexist == 0) {
					$sql = $con->prepare("INSERT INTO compcontact(domaine,fullname,email,phone,Date_Time) VALUES (?,?,?,?,NOW())");
					$sql->execute(array($_SESSION['domaine'],$fullname,$email,$phone));
				}else{
					$erreur = "this phone number is already taken";
				}

	    	}else{
	    		$erreur = "this email is already taken";
	    	}
	    	}else{
				$erreur = "fill all field";
			}
		}

		$sela = $con->prepare("SELECT * FROM compcontact WHERE domaine = ?");
		$sela ->execute(array($_SESSION['domaine']));
		$number= $sela->rowCount();
?>