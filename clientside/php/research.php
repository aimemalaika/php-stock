<?php
	include 'bddconfig.php'; 
	if (isset($_GET['purch']) AND !empty($_GET['purch'])) {
		$_GET['page'] =0;
		$purch = htmlspecialchars(strtoupper($_GET['purch']));
		$selpur = $con->prepare('SELECT * FROM compaypurchase 
			WHERE domaine = ? AND itemecode LIKE "%'.$purch.'%" 
			ORDER BY id DESC');
		$selpur->execute(array($_SESSION['domaine']));
		$nb = $selpur->rowCount();
		if ($nb ==0) {
			$selpur = $con->prepare('SELECT * FROM compaypurchase 
			WHERE domaine = ? AND itemname LIKE "%'.$purch.'%" 
			ORDER BY id DESC');
			$selpur->execute(array($_SESSION['domaine']));
			$nb = $selpur->rowCount();
			if ($nb ==0) {
			$selpur = $con->prepare('SELECT * FROM compaypurchase 
			WHERE domaine = ? AND price LIKE "%'.$purch.'%" 
			ORDER BY id DESC');
			$selpur->execute(array($_SESSION['domaine']));
			$videvide = $selpur->rowCount();
		}
		}
	}

	if (isset($_GET['purchcrd']) AND !empty($_GET['purchcrd'])) {
		$_GET['page'] =0;
		$purchcrd = htmlspecialchars(strtoupper($_GET['purchcrd']));
		$selpurcred = $con->prepare('SELECT * FROM companypurchasecred 
			WHERE domaine = ? AND itemecode LIKE "%'.$purchcrd.'%" 
			ORDER BY id DESC');
		$selpurcred->execute(array($_SESSION['domaine']));
		$nb = $selpurcred->rowCount();
		if ($nb ==0) {
			$selpurcred = $con->prepare('SELECT * FROM companypurchasecred 
			WHERE domaine = ? AND itemname LIKE "%'.$purchcrd.'%" 
			ORDER BY id DESC');
			$selpurcred->execute(array($_SESSION['domaine']));
			$nb = $selpurcred->rowCount();
			if ($nb ==0) {
			$selpurcred = $con->prepare('SELECT * FROM companypurchasecred 
			WHERE domaine = ? AND price LIKE "%'.$purchcrd.'%" 
			ORDER BY id DESC');
			$selpurcred->execute(array($_SESSION['domaine']));
			$videvidecred = $selpurcred->rowCount();
		}
		}
	}

	if (isset($_GET['SalCash']) AND !empty($_GET['SalCash'])) {
			$_GET['page'] =0;
			$SalCash = htmlspecialchars(strtoupper($_GET['SalCash']));
			$selsales = $con->prepare('SELECT * FROM companysales 
				WHERE domaine = ? AND itemecode LIKE "%'.$SalCash.'%" 
				ORDER BY id DESC');
			$selsales->execute(array($_SESSION['domaine']));
			$nb = $selsales->rowCount();
			if ($nb ==0) {
				$selsales = $con->prepare('SELECT * FROM companysales 
				WHERE domaine = ? AND itemname LIKE "%'.$SalCash.'%" 
				ORDER BY id DESC');
				$selsales->execute(array($_SESSION['domaine']));
				$nb = $selsales->rowCount();
				if ($nb ==0) {
				$selsales = $con->prepare('SELECT * FROM companysales 
				WHERE domaine = ? AND price LIKE "%'.$SalCash.'%" 
				ORDER BY id DESC');
				$selsales->execute(array($_SESSION['domaine']));
				$videvidecred = $selsales->rowCount();
			}
			}
		}

		if (isset($_GET['salcred']) AND !empty($_GET['salcred'])) {
			$_GET['page'] =0;
			$salcred = htmlspecialchars(strtoupper($_GET['salcred']));
			$selsalec = $con->prepare('SELECT * FROM companysalec 
				WHERE domaine = ? AND itemecode LIKE "%'.$salcred.'%" 
				ORDER BY id DESC');
			$selsalec->execute(array($_SESSION['domaine']));
			$nb = $selsalec->rowCount();
			if ($nb ==0) {
				$selsalec = $con->prepare('SELECT * FROM companysalec 
				WHERE domaine = ? AND itemname LIKE "%'.$salcred.'%" 
				ORDER BY id DESC');
				$selsalec->execute(array($_SESSION['domaine']));
				$nb = $selsalec->rowCount();
				if ($nb ==0) {
				$selsalec = $con->prepare('SELECT * FROM companysalec 
				WHERE domaine = ? AND price LIKE "%'.$salcred.'%" 
				ORDER BY id DESC');
				$selsalec->execute(array($_SESSION['domaine']));
				$videvidecred = $selsalec->rowCount();
			}
			}
		}

		if (isset($_GET['nyasho']) AND !empty($_GET['nyasho'])) {
			$_GET['page'] =0;
			$nyasho = htmlspecialchars(strtoupper($_GET['nyasho']));
			$selex = $con->prepare('SELECT * FROM companyselex 
				WHERE domaine = ? AND expensename LIKE "%'.$nyasho.'%" 
				ORDER BY id DESC');
			$selex->execute(array($_SESSION['domaine']));
			$nb = $selex->rowCount();
			if ($nb ==0) {
				$selex = $con->prepare('SELECT * FROM companyselex 
				WHERE domaine = ? AND expensetime LIKE "%'.$nyasho.'%" 
				ORDER BY id DESC');
				$selex->execute(array($_SESSION['domaine']));
				$null = $selex->rowCount();
				
			}
	    }

	    if (isset($_GET['seapex']) AND !empty($_GET['seapex'])) {
	    	$_GET['page'] =0;
			$seapex = htmlspecialchars(strtoupper($_GET['seapex']));
			$selpurex = $con->prepare('SELECT * FROM companypurex 
				WHERE domaine = ? AND expensename LIKE "%'.$seapex.'%" 
				ORDER BY id DESC');
			$selpurex->execute(array($_SESSION['domaine']));
			$nb = $selpurex->rowCount();
			if ($nb ==0) {
				$selpurex = $con->prepare('SELECT * FROM companypurex 
				WHERE domaine = ? AND expensetime LIKE "%'.$seapex.'%" 
				ORDER BY id DESC');
				$selpurex->execute(array($_SESSION['domaine']));
				$null = $selpurex->rowCount();
				
			}
	    }

	    if (isset($_GET['sestck']) AND !empty($_GET['sestck'])) {
	    	$_GET['page'] =0;
			$sestck = htmlspecialchars(strtoupper($_GET['sestck']));
			$selstock = $con->prepare('SELECT * FROM companystock 
				WHERE domaine = ? AND itemecode LIKE "%'.$sestck.'%" 
				ORDER BY id DESC');
			$selstock->execute(array($_SESSION['domaine']));
			$nb = $selstock->rowCount();
			if ($nb ==0) {
				$selstock = $con->prepare('SELECT * FROM companystock 
				WHERE domaine = ? AND itemname LIKE "%'.$sestck.'%" 
				ORDER BY id DESC');
				$selstock->execute(array($_SESSION['domaine']));
				$nb = $selstock->rowCount();
				if ($nb ==0) {
				$selstock = $con->prepare('SELECT * FROM companystock 
				WHERE domaine = ? AND price LIKE "%'.$sestck.'%" 
				ORDER BY id DESC');
				$selstock->execute(array($_SESSION['domaine']));
				$vide = $selstock->rowCount();
			}
			}
		}

		if (isset($_GET['sestck']) AND !empty($_GET['sestck'])) {
			$_GET['page'] =0;
			$sestck = htmlspecialchars(strtoupper($_GET['sestck']));
			$selstock = $con->prepare('SELECT * FROM companystock 
				WHERE domaine = ? AND itemecode LIKE "%'.$sestck.'%" 
				ORDER BY id DESC');
			$selstock->execute(array($_SESSION['domaine']));
			$nb = $selstock->rowCount();
			if ($nb ==0) {
				$selstock = $con->prepare('SELECT * FROM companystock 
				WHERE domaine = ? AND itemname LIKE "%'.$sestck.'%" 
				ORDER BY id DESC');
				$selstock->execute(array($_SESSION['domaine']));
				$nb = $selstock->rowCount();
				if ($nb ==0) {
				$selstock = $con->prepare('SELECT * FROM companystock 
				WHERE domaine = ? AND price LIKE "%'.$sestck.'%" 
				ORDER BY id DESC');
				$selstock->execute(array($_SESSION['domaine']));
				$vide = $selstock->rowCount();
			}
			}
		}

		if (isset($_GET['ass']) AND !empty($_GET['ass'])) {
			$_GET['page'] =0;
			$ass = htmlspecialchars(strtoupper($_GET['ass']));
			$selass = $con->prepare('SELECT * FROM companyasset 
				WHERE domaine = ? AND type LIKE "%'.$ass.'%" 
				ORDER BY id DESC');
			$selass->execute(array($_SESSION['domaine']));
			$nb = $selass->rowCount();
			if ($nb ==0) {
				$selass = $con->prepare('SELECT * FROM companyasset 
				WHERE domaine = ? AND depreciationdate LIKE "%'.$ass.'%" 
				ORDER BY id DESC');
				$selass->execute(array($_SESSION['domaine']));
				$nb = $selass->rowCount();
				if ($nb ==0) {
				$selass = $con->prepare('SELECT * FROM companyasset 
				WHERE domaine = ? AND avereging LIKE "%'.$ass.'%" 
				ORDER BY id DESC');
				$selass->execute(array($_SESSION['domaine']));
				$zero = $selass->rowCount();
			}
			}
		}