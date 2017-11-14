<?php

	include 'bddconfig.php';

	if (isset($_GET['id']) AND !empty($_GET['id'])) {
		
		$geid = $_GET['id'];
		$reck = date("d-M-Y");
		$update = $con->prepare("UPDATE companyasset SET Date_Time = ?  WHERE id = ?");
		$update->execute(array($reck,$geid));

		header('Location: ../Assetstracking.php?page=1');
	}

?>