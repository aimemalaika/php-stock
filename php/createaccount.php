<?php

		if (isset($_POST['submit']) AND !empty($_POST['shopname']) AND !empty($_POST['telnum'])) {

			$shopname = htmlspecialchars($_POST['shopname']);
			$telnum = htmlspecialchars($_POST['telnum']);
			$timing = date("m");
			$years = date("y");
			$shopnamelength = strlen($shopname);

			if ($shopnamelength >3) {
				    $checkshop= $con->prepare("SELECT * FROM accountidentifier WHERE shopname = ?");
			      $checkshop->execute(array($shopname));
			      $shopexist = $checkshop->rowCount();
			         if ($shopexist == 0) {

			    	         $checktel = $con->prepare("SELECT * FROM accountidentifier WHERE telnum = ?");
			    	         $checktel->execute(array($telnum));
			    	         $telexist = $checktel->rowCount();
			    	             if ($telexist == 0) {

              //insert account of company

							                 $insert = $con->prepare("INSERT INTO `accountidentifier`(`shopname`, `telnum`, `timing`, `years`, `Date_time`) VALUES (?,?,?,?,NOW())");
							                 $insert->execute(array($shopname,$telnum,$timing,$years));
                                    session_start();
                                    $_SESSION['shopname'] = $shopname;
                              			header('Location: settings');

            			    	}else{
            			    		$erreur = "this phone number is already taken";
            			    	}

      			    }else{
      			    	$erreur = "this Shop is already registred";
      			    }

			}else{
				$erreur = "the minimum number of character for shop name is 4";
			}

	}
?>
