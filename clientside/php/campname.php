<?php
	include 'bddconfig.php';

	$camp = $con->prepare("SELECT * FROM `companyinformation` WHERE `domaine`= ?");
	$camp->execute(array($_SESSION['domaine']));
	$camname = $camp->fetch();

	$perm = $con->prepare("SELECT * FROM `companyadmin` WHERE `domaine`= ? AND id=? ");
	$perm->execute(array($_SESSION['domaine'],$_SESSION['id']));
	$adm = $perm->fetch();
		
?>