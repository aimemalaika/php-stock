<?php
    session_start();
    if (!isset($_SESSION['username']) AND !isset($_SESSION['domaine'])) {
        header('Location: ../login.php');
    }
    include 'php/futureselector.php';
    include 'php/research.php'; 
    include 'php/totselx.php'; 
    include 'php/campname.php'; 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALES EXPENSES REPORT</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/settings.css">
    <link rel="stylesheet" href="assets/css/purchases.css">
    <link rel="stylesheet" href="assets/css/palette.css">
    <link rel="stylesheet" href="assets/css/subscription.css">
    <link rel="stylesheet" href="assets/css/dashboardclient.css">
</head>

<body class="dark-primary-color">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link primary-text-color" style="font-weight: bold;color: lightblue;"><?=strtoupper($camname['companyname'])?> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><a href="PurchaseCash.php?page=1" class="primary-text-color">PURCHASES </a></li>
                    <li role="presentation"><a href="SalesCash.php?page=1" class="primary-text-color">SELL </a></li>
                    <li role="presentation"><a class="text-uppercase primary-text-color" href="Stockmanagement.php?page=1">INVENTORY </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="#"><i class="fa fa-user"></i> <?= $_SESSION['username']?> </a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-gears"></i> Settings <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <?php if ($adm['activate'] == "Asset Management" OR $adm['activate'] == "Administrator") { ?>
                            <li role="presentation"><a href="settings.php"><i class="fa fa-plus-square"></i> Add Features</a></li>
                            <?php }else{?>
                            <li role="presentation"><a href="#"><i class="fa fa-plus-square"></i> Add Features</a></li>
                            <?php } ?>
                            <li role="presentation"><a href="dashboardclient.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                            <li role="presentation"><a href="php/logout.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 hidden light-primary-color" id="form-new-item">
                <form method="POST" class="pad-x-sm">
                    <div class="form-group">
                        <label class="control-label">expense name name</label>
                        <input placeholder="NAME" name="expensename" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Coast </label>
                        <input name="expensecoast" class="form-control" placeholder="in FRW" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Description </label>
                        <textarea name="expensedesc" class="form-control" type="text"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">executed on</label>
                        <input name="expensetime" id="datepicker" placeholder="JJ/MM/YYYY" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default mibtn" name="addexpense" type="submit">Save </button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12" id="next-form">
                <div class="row light-primary-color">
                    <div class="col-xs-12">
                        <div class="clearfix">
                            <div class="pull-left button-g-div">
                                <ul class="list-inline">
                                    <?php if ($adm['activate'] == "Sell Departement" OR $adm['activate'] == "Administrator") { ?>
                                    <li id="open-form-new-item" class="mi-btn text-primary-color"> <a href="#"><i class="fa fa-plus-circle"></i> New Expense</a></li>
                                    <?php } ?>
                                    <li id="close-form-new-item" class="mi-btn text-primary-color hidden"> <a href="#"><i class="fa fa-times-circle"></i> Close</a></li>
                                    <!--  <li class="mi-btn text-primary-color"> <a><i class="fa fa-print"></i> Print Summary</a></li>
                                  <li class="mi-btn text-primary-color"> <a href="#" id="open-form-import"><i class="fa fa-upload"></i> Import </a></li>-->
                                </ul>
                            </div>
                            <div class="pull-right button-g-div">
                                <ul class="list-inline">
                                    <?php
                                        while ($allinventaire = $inventaire->fetch()) { ?>
                                            <li class="mi-btn text-primary-color"><?= $allinventaire['futurename']?></li>
                                    <?php } ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading visible-sm-block visible-md-block visible-lg-block accent-color">
                                <h3 class="text-muted panel-title primary-text-color"><i class="fa fa-table"></i> Data Table of sales expenses</h3></div>
                            <div class="panel-body">
                                <div>
                                    <div>
                                        <div class="table-inner-header">
                                            <form class="form-inline" method="get">
                                                <div class="form-group table-search">
                                                    <div class="input-group">
                                                        <input name="nyasho" class="form-control" type="text" placeholder="Search" required>
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary accent-color" type="submit">Go!</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead class="dark-primary-color">
                                                    <tr class="dark-primary-color text-primary-color">
                                                        <th>name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                                                        <th>coast&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                                                        <th>description</th>
                                                        <th>Bought on</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    while ($dipselex = $selex->fetch()) {?>
                                                        <tr>
                                                            <td><?= $dipselex['purexname']?></td>
                                                            <td><?= $dipselex['purexcoast']?> FRW</td>
                                                            <td><?= $dipselex['purexdesc']?></td>
                                                            <td><?= $dipselex['purextime']?></td>
                                                        </tr>   
                                                   <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row">
                                        <?php
                                            if ($null >= 1) { ?>         
                                            <div class="col-md-6">
                                                <div class="para-pad pull-left">
                                                    <p class="lead secondary-text-color">Showing 
                                                    <?=$departser+1?> - 
                                                    <?php if (($departser+$itemparpageser)>$totalitemser) {
                                                       echo $totalitemser;
                                                    }else{echo ($departser+$itemparpageser);}?> of <?=$totalitemser?> Entries</p>
                                                </div>
                                                <div class="pull-right">
                                                    <nav>
                                                        <ul class="pagination">
                                                            <?php
                                                            for ($i=1; $i <=(ceil($totalitemser / $itemparpageser)) ; $i++) {
                                                            if($i == $_GET['page']){?>
                                                            <li class="active"><a><?=$i?></a></li>
                                                            <?php }else{?>
                                                                <li><a href="PurchaseCash.php?page=<?=$i?>"><?=$i?></a></li>
                                                           <?php } } ?>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                         <?php  } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                if ($null > 0) { ?>    
                            <div class="panel-footer"><span class="text-muted secondary-text-color">Updated Yesterday at 10:59</span></div>
                            <?php  }else{ ?>
                            <div class="panel-footer"><center><span style="color: red;font-size: 21px;">No asset registred</span></center></div>
                           <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div>
                            <h3 class="text-muted secondary-text-color">Reports Section</h3></div>
                        <div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Product sold Reports of the year</h3></div>
                                        <div class="panel-body">
                                             <p>Total : <span class="pull-right" style="font-size: 20px"><?=$repy?> FRW</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Product sold Reports of the month</h3></div>
                                        <div class="panel-body">
                                            <p>Total : <span class="pull-right" style="font-size: 20px"><?=$repmo?> FRW</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Product sold Reports of the day</h3></div>
                                        <div class="panel-body">
                                            <p>Total : <span class="pull-right" style="font-size: 20px"><?=$rep?> FRW</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid import-outer-div dark-primary-color" id="form-import-div">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                <div class="import-div">
                    <form class="form-import">
                        <div class="form-group">
                            <div id="custom-import-input" class="custom-import-input default-primary-color"><span class="custom-input-file-label text-primary-color">Select a file.......</span>
                                <input type="file" required="" class="input-file">
                            </div>
                        </div>
                        <p class="file-selected">No selected file</p>
                        <button class="btn btn-default import-div accent-color text-primary-color" type="button"><i class="fa fa-upload"></i> UPLOAD </button>
                        <p class="primary-text-color">File Format: <span class="secondary-text-color">xlsx, csv</span><a href="#" id="close-form-import" class="pull-right"><i class="fa fa-close"></i> Close</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/purchases.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/dashboardclient.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</body>

</html>