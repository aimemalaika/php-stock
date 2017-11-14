<?php
    session_start();
    if (!isset($_SESSION['username']) AND !isset($_SESSION['domaine'])) {
        header('Location: ../login.php');
    }
    include 'php/futureselector.php';
    include 'php/research.php';
    include 'php/campname.php'; 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create invoice</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/settings.css">
    <link rel="stylesheet" href="assets/css/purchases.css">
    <link rel="stylesheet" href="assets/css/palette.css">
    <link rel="stylesheet" href="assets/css/subscription.css">
    <link rel="stylesheet" href="assets/css/dashboardclient.css">
</head>

<body class="light-primary-color">
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
                    <li role="presentation"><a><i class="fa fa-user"></i> <?=$_SESSION['username']?> </a></li>
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
    <div class="container-fluid pad-x-lg">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 white-background">
                <form>
                    <div>
                        <div class="row pad-x-lg">
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label primary-text-color"><i class="fa fa-user text-primary-color-co"></i> To </label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label primary-text-color"><i class="fa fa-calendar text-primary-color-co"></i> Date </label>
                                    <input class="form-control" type="date" id="datepicker">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label primary-text-color"><i class="fa fa-calendar-o text-primary-color-co"></i> Due Date </label>
                                    <input class="form-control" type="date" id="datepicker1">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label primary-text-color">Invoice <i class="fa fa-hashtag text-primary-color-co"></i></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label primary-text-color">Reference </label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="pad-y-lg pad-x-md">
                                    <button class="btn btn-default addressBtnCo" type="button" id="addItemTrigger"><i class="fa fa-plus-circle"></i> Add Item</button>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="pad-x-md">
                                    <button class="btn btn-default addressBtn" type="button" id="removeItemTrigger"><i class="fa fa-remove"></i> Remove Last Item</button>
                                </div>
                            </div>
                        </div>
                        <div id="itemBase">
                            <div class="row" id="itemBaseSample">
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label primary-text-color"><i class="fa fa-tags text-primary-color-co"></i> Item </label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label primary-text-color"><i class="fa fa-pencil-square text-primary-color-co"></i> Description</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label primary-text-color"><i class="fa fa-sort-numeric-asc text-primary-color-co"></i> Quantity </label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label primary-text-color"><i class="fa fa-money text-primary-color-co"></i> Unit Price </label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pad-x-md">
                            <div class="col-sm-6 col-xs-12">
                                <h4 class="secondary-text-color clearfix">Subtotal<small class="pad-y-sm pad-x-sm pull-right">0.00 <i class="fa fa-dollar text-primary-color-co"></i></small></h4>
                                <h4 class="secondary-text-color clearfix">Tax<small class="pad-x-sm pull-right pad-y-sm">0.00 <i class="fa fa-dollar text-primary-color-co"></i></small></h4>
                                <h2 class="primary-text-color">Total<small class="pad-y-sm pad-x-sm pull-right">0.00 <i class="fa fa-dollar text-primary-color-co"></i></small></h2></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="pad-x-lg clearfix">
                                    <div class="pull-left">
                                        <?php if ($adm['activate'] == "Sell Departement" OR $adm['activate'] == "Administrator") { ?>
                                        <button class="btn btn-default pad-x-sm pad-y-lg addressBtnCo" type="button"><i class="fa fa-check"></i> Approve </button>
                                        <?php } ?>
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-default addressBtn pad-x-sm pad-y-lg" type="button"><i class="fa fa-remove"></i> Cancel </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/purchases.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/dashboardclient.js"></script>
    <script src="assets/js/invoicingform.js"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
     $( "#datepicker1" ).datepicker();
  } );
  </script>
</body>

</html>