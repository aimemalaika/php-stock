<?php
	$timofd= date("d-M-Y");
	$timofm= date("M-Y");
	$timofy=date("Y");
	// for day
    $query = $con->prepare("SELECT SUM(`purexcoast`) FROM `companypurex` WHERE `domaine` = ? AND `totday` = ?" );
    $query->execute(array($_SESSION['domaine'],$timofd));   
    $totale = $query->fetch(PDO::FETCH_NUM);
    $rep = $totale[0]; // 0 is the first array. here array is only one. 

    // for month
    $querymon = $con->prepare("SELECT SUM(`purexcoast`) FROM `companypurex` WHERE `domaine` = ? AND `totmont` = ?" );
    $querymon->execute(array($_SESSION['domaine'],$timofm));   
    $mo = $querymon->fetch(PDO::FETCH_NUM);
    $repmo = $mo[0]; // 0 is the first array. here array is only one. 


    //for year
    $queryyear = $con->prepare("SELECT SUM(`purexcoast`) FROM `companypurex` WHERE `domaine` = ? AND `totyear` = ?" );
    $queryyear->execute(array($_SESSION['domaine'],$timofy));   
    $totaleyear = $queryyear->fetch(PDO::FETCH_NUM);
    $repy = $totaleyear[0]; // 0 is the first array. here array is only one. 

?>