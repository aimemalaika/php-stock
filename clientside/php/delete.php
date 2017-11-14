<?php

	include 'bddconfig.php';

	if (isset($_GET['mail']) AND !empty($_GET['mail'])) {
		
		$getmail = $_GET['mail'];

		$delete = $con->prepare("DELETE FROM companyadmin WHERE email = ? ");
		$delete->execute(array($getmail));

		header('Location: ../dashboardclient.php');
	}

	if (isset($_GET['add']) AND !empty($_GET['add'])) {
		
		$getadd = $_GET['add'];

		$delete = $con->prepare("DELETE FROM compcontact WHERE email = ? ");
		$delete->execute(array($getadd));

		header('Location: ../dashboardclient.php');
	}

?>