<?php
	include 'bddconfig.php';
		$timofd= date("d-M-Y");
		$timofm= date("M-Y");
		$timofy=date("Y");

	//selection of futures
	$sale = $con->prepare("SELECT * FROM salesfuture WHERE domaine = ?");
	$sale->execute(array($_SESSION['domaine']));
	

	$purchase = $con->prepare("SELECT * FROM purchfutures WHERE domaine = ?");
	$purchase->execute(array($_SESSION['domaine']));


	$inventaire = $con->prepare("SELECT * FROM inventfutures WHERE domaine = ?");
	$inventaire->execute(array($_SESSION['domaine']));

	// insert into asset table
	if (isset($_POST['addasset'])) {
		if (!empty($_POST['type']) AND !empty($_POST['description']) AND !empty($_POST['comment']) AND !empty($_POST['depreciationdate']) AND !empty($_POST['depreciationmethod']) AND !empty($_POST['rate']) AND !empty($_POST['avereging']) AND !empty($_POST['effective']) AND !empty($_POST['coast'])) {
			$type = htmlspecialchars($_POST['type']);
			$description = htmlspecialchars($_POST['description']);
			$comment = htmlspecialchars($_POST['comment']);
			$depreciationdate = htmlspecialchars($_POST['depreciationdate']);
			$rate = htmlspecialchars($_POST['rate']);
			$depreciationmethod = htmlspecialchars($_POST['depreciationmethod']);
			$avereging = htmlspecialchars($_POST['avereging']);
			$effective = htmlspecialchars($_POST['effective']);
			$coast = htmlspecialchars($_POST['coast']);
			$up = "In use";
			$save = $con->prepare("INSERT INTO companyasset
				(domaine,type,description,comment,depreciationdate,depreciationmethod,rate,avereging,effective,coast,Date_Time) 
				VALUES (?,?,?,?,?,?,?,?,?,?,?)");
			$save->execute(array($_SESSION['domaine'],$type,$description,$comment,$depreciationdate,$depreciationmethod,$rate,$avereging,$effective,$coast,$up));
			
		}
	}

	// select asset futures
	$totrecordass = $con->prepare('SELECT id FROM companyasset WHERE domaine = ?');
	$totrecordass->execute(array($_SESSION['domaine']));
	$totalitemass = $totrecordass->rowCount();
	$itemparpageass = 30;
	$totalitemass = $totrecordass->rowCount();
	if (isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0) {
		$_GET['page'] = intval($_GET['page']);
		$pagecouranteass = $_GET['page'];
	}else{
		$pagecouranteass = 1;
	}
	$departass = ($pagecouranteass - 1) * $itemparpageass;
	$selass = $con->prepare("SELECT * FROM companyasset WHERE domaine = ? LIMIT ".$departass.",".$itemparpageass);
	$selass->execute(array($_SESSION['domaine']));
	$zero = $selass->rowCount();

	//insert into company sells expenses
	if (isset($_POST['addexpense'])) {
		if (!empty($_POST['expensename']) AND !empty($_POST['expensecoast']) AND !empty($_POST['expensedesc']) AND !empty($_POST['expensetime'])) {
			$name = htmlspecialchars($_POST['expensename']);
			$coast = htmlspecialchars($_POST['expensecoast']);
			$descr = htmlspecialchars($_POST['expensedesc']);
			$time = htmlspecialchars($_POST['expensetime']);

			$save = $con->prepare("INSERT INTO companyselex(domaine,purexname,purexcoast,purexdesc,purextime,totday,totmont,totyear,Date_Time) VALUES (?,?,?,?,?,?,?,?,NOW())");
			$save->execute(array($_SESSION['domaine'],$name,$coast,$descr,$time,$timofd,$timofm,$timofy));
		}
			
	}

	//select from company sells expenes
	$totrecordser = $con->prepare('SELECT id FROM companyselex WHERE domaine = ?');
	$totrecordser->execute(array($_SESSION['domaine']));
	$totalitemser = $totrecordser->rowCount();
	$itemparpageser = 30;
	$totalitemser = $totrecordser->rowCount();
	if (isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0) {
		$_GET['page'] = intval($_GET['page']);
		$pagecouranteser = $_GET['page'];
	}else{
		$pagecouranteser = 1;
	}
	$departser = ($pagecouranteser - 1) * $itemparpageser;
	$selex = $con->prepare("SELECT * FROM companyselex WHERE domaine = ? LIMIT ".$departser.",".$itemparpageser);
	$selex->execute(array($_SESSION['domaine']));
	$null = $selex->rowCount();

	// insert into company purchases expenses
	if (isset($_POST['addpurex'])) {
		if (!empty($_POST['purexname']) AND !empty($_POST['purexcoast']) AND !empty($_POST['purexdesc']) AND !empty($_POST['purextime'])) {
			$name = htmlspecialchars($_POST['purexname']);
			$coast = htmlspecialchars($_POST['purexcoast']);
			$descr = htmlspecialchars($_POST['purexdesc']);
			$time = htmlspecialchars($_POST['purextime']);

			$save = $con->prepare("INSERT INTO companypurex(domaine,purexname,purexcoast,purexdesc,purextime,totday,totmont,totyear,Date_Time) VALUES (?,?,?,?,?,?,?,?,NOW())");
			$save->execute(array($_SESSION['domaine'],$name,$coast,$descr,$time,$timofd,$timofm,$timofy));
		}
	}

	// select from campany purchaise expenses
	$totrecordper = $con->prepare('SELECT id FROM companypurex WHERE domaine = ?');
	$totrecordper->execute(array($_SESSION['domaine']));
	$totalitemper = $totrecordper->rowCount();
	$itemparpageper = 30;
	$totalitemper = $totrecordper->rowCount();
	if (isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0) {
		$_GET['page'] = intval($_GET['page']);
		$pagecouranteper = $_GET['page'];
	}else{
		$pagecouranteper = 1;
	}
	$departper = ($pagecouranteper - 1) * $itemparpageper;
	$selpurex = $con->prepare("SELECT * FROM companypurex WHERE domaine = ? LIMIT ".$departper.",".$itemparpageper);
	$selpurex->execute(array($_SESSION['domaine']));
	$rien = $selpurex->rowCount();


	// select from comany stock
	$totrecordstk = $con->prepare('SELECT id FROM companystock WHERE domaine = ?');
	$totrecordstk->execute(array($_SESSION['domaine']));
	$totalitemstk = $totrecordstk->rowCount();
	$itemparpagestk = 30;
	$totalitemstk = $totrecordstk->rowCount();
	if (isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0) {
		$_GET['page'] = intval($_GET['page']);
		$pagecourantestk = $_GET['page'];
	}else{
		$pagecourantestk = 1;
	}
	$departstk = ($pagecourantestk - 1) * $itemparpagestk;
	$selstock = $con->prepare("SELECT * FROM companystock WHERE domaine = ? LIMIT ".$departstk.",".$itemparpagestk);
	$selstock->execute(array($_SESSION['domaine']));
	$vide = $selstock->rowCount();

	// adding purchaise on cash
	if (isset($_POST['addpurchase'])) {
		if (!empty($_POST['itemcode']) AND !empty($_POST['itemname']) AND !empty($_POST['description']) AND !empty($_POST['units']) AND !empty($_POST['price'])) {
			$codeitem = htmlspecialchars(strtoupper($_POST['itemcode']));
			$name = htmlspecialchars($_POST['itemname']);
			$descr = htmlspecialchars($_POST['description']);
			$units = htmlspecialchars($_POST['units']);
			$price = htmlspecialchars($_POST['price']);
			// adding direct purchase
				$savepur = $con->prepare("INSERT INTO compaypurchase(domaine,itemecode,itemname,description,unit,price,totday,totmont,totyear,Date_time) VALUES (?,?,?,?,?,?,?,?,?,NOW())");
				$savepur->execute(array($_SESSION['domaine'],$codeitem,$name,$descr,$units,$price,$timofd,$timofm,$timofy));
					//for stock checking availability
				    $check = $con->prepare("SELECT * FROM companystock WHERE domaine = ? AND itemecode = ? AND price = ?");
				    $check->execute(array($_SESSION['domaine'],$codeitem,$price));
				    $endeleya = $check->rowCount();
				    $kamata = $check->fetch();
				 if ($endeleya == 0) {
					$savepur = $con->prepare("INSERT INTO companystock(domaine,itemecode,itemname,description,unit,price,Date_time) VALUES (?,?,?,?,?,?,NOW())");
					$savepur->execute(array($_SESSION['domaine'],$codeitem,$name,$descr,$units,$price));
				 }else{
				 	$units = $kamata['unit'] + $units;

				 	$savepur = $con->prepare("UPDATE companystock SET description = ?,unit = ? WHERE domaine = ? AND itemecode = ? AND price = ?");
					$savepur->execute(array($descr,$units,$_SESSION['domaine'],$codeitem,$price));
				 }
			
		}
	}
	
	// select from purchaise table
	//PAGINATION
	$totrecord = $con->prepare('SELECT id FROM compaypurchase WHERE domaine = ?');
	$totrecord->execute(array($_SESSION['domaine']));
	$totalitem = $totrecord->rowCount();
	$itemparpage = 30;
	$totalitem = $totrecord->rowCount();
	if (isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0) {
		$_GET['page'] = intval($_GET['page']);
		$pagecourante = $_GET['page'];
	}else{
		$pagecourante = 1;
	}
	$depart = ($pagecourante - 1) * $itemparpage;

	$selpur = $con->prepare("SELECT * FROM compaypurchase WHERE domaine = ? LIMIT ".$depart.",".$itemparpage);
	$selpur->execute(array($_SESSION['domaine']));
	 $videvide = $selpur->rowCount();

	 // insert into purchaise credit
	if (isset($_POST['addpurchasecred'])) {
		if (!empty($_POST['itemcode']) AND !empty($_POST['itemname']) AND !empty($_POST['description']) AND !empty($_POST['units']) AND !empty($_POST['price'])) {
			$codeitem = htmlspecialchars(strtoupper($_POST['itemcode']));
			$name = htmlspecialchars($_POST['itemname']);
			$descr = htmlspecialchars($_POST['description']);
			$units = htmlspecialchars($_POST['units']);
			$price = htmlspecialchars($_POST['price']);

			// add directly in puchaise credit table
			$savepur = $con->prepare("INSERT INTO companypurchasecred(domaine,itemecode,itemname,description,unit,price,totday,totmont,totyear,Date_time) VALUES (?,?,?,?,?,?,?,?,?,NOW())");
				$savepur->execute(array($_SESSION['domaine'],$codeitem,$name,$descr,$units,$price,$timofd,$timofm,$timofy));
					//for stock checking availability
				session_start();
				    $check = $con->prepare("SELECT * FROM companystock WHERE domaine = ? AND itemecode = ? AND price = ?");
				    $check->execute(array($_SESSION['domaine'],$codeitem,$price));
				    $endeleya = $check->rowCount();
				    $kamata = $check->fetch();
				 if ($endeleya == 0) {
					$savepur = $con->prepare("INSERT INTO companystock(domaine,itemecode,itemname,description,unit,price,Date_time) VALUES (?,?,?,?,?,?,NOW())");
					$savepur->execute(array($_SESSION['domaine'],$codeitem,$name,$descr,$units,$price));
				 }else{
				 	$units = $kamata['unit'] + $units;

				 	$savepur = $con->prepare("UPDATE companystock SET description = ?,unit = ? WHERE domaine = ? AND itemecode = ? AND price = ?");
					$savepur->execute(array($descr,$units,$_SESSION['domaine'],$codeitem,$price));
				 }
			
			 
		}
	}

	// select all purchaise credit
	//pagination
	$totrecordpc = $con->prepare('SELECT id FROM companypurchasecred WHERE domaine = ?');
	$totrecordpc->execute(array($_SESSION['domaine']));
	$totalitempc = $totrecordpc->rowCount();
	$itemparpagepc = 30;
	$totalitempc = $totrecordpc->rowCount();
	if (isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0) {
		$_GET['page'] = intval($_GET['page']);
		$pagecourantepc = $_GET['page'];
	}else{
		$pagecourantepc = 1;
	}
	$departpc = ($pagecourantepc - 1) * $itemparpagepc;
	$selpurcred = $con->prepare("SELECT * FROM companypurchasecred WHERE domaine = ? LIMIT ".$departpc.",".$itemparpagepc);
	$selpurcred->execute(array($_SESSION['domaine']));
	$videvidecred = $selpurcred->rowCount();

	//add a sale on chash
	if (isset($_POST['addsales'])) {
		if (!empty($_POST['itemcode']) AND !empty($_POST['itemname']) AND !empty($_POST['description']) AND !empty($_POST['units']) AND !empty($_POST['price'])) {
			$codeitem = htmlspecialchars(strtoupper($_POST['itemcode']));
			$name = htmlspecialchars($_POST['itemname']);
			$descr = htmlspecialchars($_POST['description']);
			$units = htmlspecialchars($_POST['units']);
			$price = htmlspecialchars($_POST['price']);
			$check = $con->prepare("SELECT * FROM companystock WHERE domaine = ? AND itemecode = ? AND price = ?");
			// checking disponibility of a quantity
			$check->execute(array($_SESSION['domaine'],$codeitem,$price));
			$endeleya = $check->rowCount();
			 if ($endeleya >= 0) {
			 	$reg = $check->fetch();
			 	if ($reg['unit'] > $units) { 
			 	$unity = $reg['unit'] - $units;
				$savepur = $con->prepare("INSERT INTO companysales(domaine,itemecode,itemname,description,unit,price,totday,totmont,totyear,Date_time) VALUES (?,?,?,?,?,?,?,?,?,NOW())");
				$savepur->execute(array($_SESSION['domaine'],$codeitem,$name,$descr,$units,$price,$timofd,$timofm,$timofy));

				$savepur = $con->prepare("UPDATE companystock SET unit = ? WHERE domaine = ? AND itemecode = ? AND price = ?");
					$savepur->execute(array($unity,$_SESSION['domaine'],$codeitem,$price));
					$_SESSION['updtime'] = date("F j, Y, g:i a");
				}else{
				 	$ftrep = "the quantity is not disponible check in the stock";
				 }
			 	
			 }else{
			 	$ftrep = "not disponible in stock";
			 }
			
		}
	}

	// select from sale table
	$totrecordsl = $con->prepare('SELECT id FROM companysales WHERE domaine = ?');
	$totrecordsl->execute(array($_SESSION['domaine']));
	$totalitemsl = $totrecordsl->rowCount();
	$itemparpagesl = 30;
	$totalitemsl = $totrecordsl->rowCount();
	if (isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0) {
		$_GET['page'] = intval($_GET['page']);
		$pagecourantesl = $_GET['page'];
	}else{
		$pagecourantesl = 1;
	}
	$departsl = ($pagecourantesl - 1) * $itemparpagesl;
	$selsales = $con->prepare("SELECT * FROM companysales WHERE domaine = ? LIMIT ".$departsl.",".$itemparpagesl);
	$selsales->execute(array($_SESSION['domaine']));
	$videvidesa = $selsales->rowCount();

	//Add a sale on credit
	 if(isset($_POST['addsalec'])) {
		if (!empty($_POST['itemcode']) AND !empty($_POST['itemname']) AND !empty($_POST['description']) AND !empty($_POST['units']) AND !empty($_POST['price'])) {
			$codeitem = htmlspecialchars(strtoupper($_POST['itemcode']));
			$name = htmlspecialchars($_POST['itemname']);
			$descr = htmlspecialchars($_POST['description']);
			$units = htmlspecialchars($_POST['units']);
			$price = htmlspecialchars($_POST['price']);
			
			// check availability of stock
			$check = $con->prepare("SELECT * FROM companystock WHERE domaine = ? AND itemecode = ? AND price = ?");
			$check->execute(array($_SESSION['domaine'],$codeitem,$price));
			$endeleya = $check->rowCount();
			 if ($endeleya > 0) {
			 	$reg = $check->fetch();
			 	if ($reg['unit'] > $units) { 
			 	$unity = $reg['unit'] - $units;
				$savepur = $con->prepare("INSERT INTO companysalec(domaine,itemecode,itemname,description,unit,price,totday,totmont,totyear,Date_time) VALUES (?,?,?,?,?,?,?,?,?,NOW())");
				$savepur->execute(array($_SESSION['domaine'],$codeitem,$name,$descr,$units,$price,$timofd,$timofm,$timofy));

				$savepur = $con->prepare("UPDATE companystock SET unit = ? WHERE domaine = ? AND itemecode = ? AND price = ?");
					$savepur->execute(array($unity,$_SESSION['domaine'],$codeitem,$price));
				}else{
				 	$ftrep = "the quantity is not disponible check in the stock";
				 }
			 	
			 }else{
			 	$ftrep = "not disponible in stock";
			 }
			
		}
	}

	// select from company selas on creditS
	$totrecordslc = $con->prepare('SELECT id FROM companysalec WHERE domaine = ?');
	$totrecordslc->execute(array($_SESSION['domaine']));
	$totalitemslc = $totrecordslc->rowCount();
	$itemparpageslc = 30;
	$totalitemslc = $totrecordslc->rowCount();
	if (isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0) {
		$_GET['page'] = intval($_GET['page']);
		$pagecouranteslc = $_GET['page'];
	}else{
		$pagecouranteslc = 1;
	}
	$departslc = ($pagecouranteslc - 1) * $itemparpageslc;
	$selsalec = $con->prepare("SELECT * FROM companysalec WHERE domaine = ? LIMIT ".$departslc.",".$itemparpageslc);
	$selsalec->execute(array($_SESSION['domaine']));
	$videvidesac = $selsalec->rowCount();


	// adding futures
	if (isset($_POST['addfut'])) {
		foreach ($_POST['purchase'] as $choosed) { 		
	 		$test = $con->prepare("INSERT INTO purchfutures(domaine,futurename) VALUES (?,?)");
	 		$test->execute(array($_SESSION['domaine'],$choosed));
	 		
	 	}foreach ($_POST['sales'] as $selected) {
	 		$test = $con->prepare("INSERT INTO salesfuture(domaine,futurename) VALUES (?,?)");
	 		$test->execute(array($_SESSION['domaine'],$selected));
	 		
	 	}foreach ($_POST['inventory'] as $collected) {
	 		$test = $con->prepare("INSERT INTO inventfutures(domaine,futurename) VALUES (?,?)");
	 		$test->execute(array($_SESSION['domaine'],$collected));
	 		
	 	}
	}

	// availability of futures
	$diaPurchaseCash = $con->prepare("SELECT * FROM `purchfutures` WHERE domaine = ? AND futurename = '<a href=\"PurchaseCash.php?page=1\">Purchase Cash</a>'");
	$diaPurchaseCash->execute(array($_SESSION['domaine']));

	$ex0 = $diaPurchaseCash->rowCount();

	$diaPurchaseCredit = $con->prepare("SELECT * FROM `purchfutures` WHERE domaine = ? AND futurename = '<a href=\"PurchaseCredit.php?page=1\">Purchase Credit</a>'");
	$diaPurchaseCredit->execute(array($_SESSION['domaine']));

	$ex1 = $diaPurchaseCredit->rowCount();

	$diaCreateinvoice = $con->prepare("SELECT * FROM `salesfuture` WHERE domaine = ? AND futurename = '<a href=\"CreateInvoice.php?page=1\">Create invoice</a>'");
	$diaCreateinvoice->execute(array($_SESSION['domaine']));	

	$ex2 = $diaCreateinvoice->rowCount();

	$diaPlaceanorder = $con->prepare("SELECT * FROM `salesfuture` WHERE domaine = ? AND futurename = '<a href=\"Placeanorder.php?page=1\">Place an order</a>'");
	$diaPlaceanorder->execute(array($_SESSION['domaine']));

	$ex3 = $diaPlaceanorder->rowCount();

	$diaSalescash = $con->prepare("SELECT * FROM `salesfuture` WHERE domaine = ? AND futurename = '<a href=\"SalesCash.php?page=1\">Sales cash</a>'");
	$diaSalescash->execute(array($_SESSION['domaine']));

	$ex4 = $diaSalescash->rowCount();

	$diaSalescredit = $con->prepare("SELECT * FROM `salesfuture` WHERE domaine = ? AND futurename = '<a href=\"SalesCredit.php?page=1\">Sales credit</a>'");
	$diaSalescredit->execute(array($_SESSION['domaine']));

	$ex5 = $diaSalescredit->rowCount();

	$diaAssetstracking = $con->prepare("SELECT * FROM `inventfutures` WHERE domaine = ? AND futurename = '<a href=\"Assetstracking.php?page=1\">Assets tracking</a>'");
	$diaAssetstracking->execute(array($_SESSION['domaine']));

	$ex6 = $diaAssetstracking->rowCount();

	$diaSalesexpensereport = $con->prepare("SELECT * FROM `inventfutures` WHERE domaine = ? AND futurename = '<a href=\"Salesexpensereport.php?page=1\">Sales expense report</a>'");
	$diaSalesexpensereport->execute(array($_SESSION['domaine']));

	$ex7 = $diaSalesexpensereport->rowCount();

	$diaPurchaseexpensereport = $con->prepare("SELECT * FROM `inventfutures` WHERE domaine = ? AND futurename = '<a href=\"Purchaseexpensereport.php?page=1\">Purchase expense report</a>'");
	$diaPurchaseexpensereport->execute(array($_SESSION['domaine']));

	$ex8 = $diaPurchaseexpensereport->rowCount();

	$diaStockmanagement = $con->prepare("SELECT * FROM `inventfutures` WHERE domaine = ? AND futurename = '<a href=\"Stockmanagement.php?page=1\">Stock management</a>'");
	$diaStockmanagement->execute(array($_SESSION['domaine']));

	$ex9 = $diaStockmanagement->rowCount();
