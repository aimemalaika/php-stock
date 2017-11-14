<?php
	$timofd= date("d-M-Y");
	$timofm= date("M-Y");
	$timofy=date("Y");
	// for day
    $query = $con->prepare("SELECT SUM(`price`) FROM `compaypurchase` WHERE `domaine` = ? AND `totday` = ?" );
    $query->execute(array($_SESSION['domaine'],$timofd));   
    $totale = $query->fetch(PDO::FETCH_NUM);
    $summ = $totale[0]; // 0 is the first array. here array is only one. 

    $query1 = $con->prepare("SELECT SUM(`unit`) FROM `compaypurchase` WHERE `domaine` = ? AND `totday` = ?" );
    $query1->execute(array($_SESSION['domaine'],$timofd));   
    $total = $query1->fetch(PDO::FETCH_NUM);
    $sum = $total[0]; // 0 is the first array. here array is only one. 
    
    $rep=$summ*$sum;

    // for month
    $querymon = $con->prepare("SELECT SUM(`price`) FROM `compaypurchase` WHERE `domaine` = ? AND `totmont` = ?" );
    $querymon->execute(array($_SESSION['domaine'],$timofm));   
    $mo = $querymon->fetch(PDO::FETCH_NUM);
    $summo = $mo[0]; // 0 is the first array. here array is only one. 

    $querymon1 = $con->prepare("SELECT SUM(`unit`) FROM `compaypurchase` WHERE `domaine` = ? AND `totmont` = ?" );
    $querymon1->execute(array($_SESSION['domaine'],$timofm));   
    $totalmo = $querymon1->fetch(PDO::FETCH_NUM);
    $sumo = $totalmo[0]; // 0 is the first array. here array is only one. 
    
    $repmo=$summo*$sumo;


    //for year
    $queryyear = $con->prepare("SELECT SUM(`price`) FROM `compaypurchase` WHERE `domaine` = ? AND `totyear` = ?" );
    $queryyear->execute(array($_SESSION['domaine'],$timofy));   
    $totaleyear = $queryyear->fetch(PDO::FETCH_NUM);
    $summy = $totaleyear[0]; // 0 is the first array. here array is only one. 

    $queryyear1 = $con->prepare("SELECT SUM(`unit`) FROM `compaypurchase` WHERE `domaine` = ? AND `totyear` = ?" );
    $queryyear1->execute(array($_SESSION['domaine'],$timofy));   
    $totalyear = $queryyear1->fetch(PDO::FETCH_NUM);
    $sumy = $totalyear[0]; // 0 is the first array. here array is only one. 
    
    $repy=$summy*$sumy;
?>