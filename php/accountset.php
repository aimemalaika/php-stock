<?php
  session_start();
	include 'bddprincipal.php';
	if (isset($_POST['submit'])) {
		if (!empty($_POST['setname']) AND !empty($_POST['setemail']) AND !empty($_POST['settel']) AND !empty($_POST['setpass']) AND !empty($_POST['setpass2'])){
					 		$setname = htmlspecialchars($_POST['setname']);
							$setemail = htmlspecialchars($_POST['setemail']);
							$settel = htmlspecialchars($_POST['settel']);
							$setpass = sha1($_POST['setpass']);
							$setpass2 = sha1($_POST['setpass2']);

              $checksetmail = $con->prepare("SELECT * FROM memberaccount WHERE setemail = ?");
              $checksetmail->execute(array($setemail));
              $mailexist = $checksetmail->rowCount();
              if ($mailexist == 0) {
                $checksettel = $con->prepare("SELECT * FROM memberaccount WHERE settel = ?");
                $checksettel->execute(array($settel));
                $telexist = $checksettel->rowCount();
                if ($telexist == 0) {
                  $passlength = strlen($_POST['setpass']);
                  if ($passlength >= 5) {
                    if ($_POST['setpass'] == $_POST['setpass2']) {
                      $insert = $con->prepare("INSERT INTO `memberaccount`(`shopname`, `setname`, `setemail`, `settel`, `setpass`, `Date_time`) VALUES (?,?,?,?,?,NOW())");
                      $insert->execute(array($_SESSION['shopname'],$setname,$setemail,$settel,$setpass));

                      $_SESSION['setname'] = $_POST['setname'];
                      $_SESSION['setemail'] = $_POST['setemail'];
                      $_SESSION['settel'] = $_POST['settel'];
                      header('Location: home');
                    }else {
                      $erreur = "password are not equal";
                    }
                  }else {
                    $erreur = "The password must contain 5 or more than 5 characters";
                  }
                }else {
                  $erreur = "this phone number is already taken";
                }
              }else {
                $erreur = "this email is already taken";
              }
		}else {
		  $erreur = "Fill all field";
		}
	}

?>
