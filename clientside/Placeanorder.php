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
    <title>Place an oder</title>
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
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 pad-x-lg">
                    <center><h4>Place an oder</h4></center>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-4 text-right">
                                    <label class="control-label hidden-xs">Item name </label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="text-primary-color-co"><i class="fa fa-tag"></i></span></div>
                                        <input class="form-control" type="text" placeholder="Item">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 text-right">
                                    <label class="control-label hidden-xs">Description </label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="text-primary-color-co"><i class="fa fa-edit"></i></span></div>
                                        <textarea rows="4" class="form-control" type="text" placeholder="Item Description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 text-right">
                                    <label class="control-label hidden-xs">Quantity </label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="text-primary-color-co"><i class="fa fa-ticket"></i></span></div>
                                        <input class="form-control" type="text" placeholder="Quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 text-right">
                                    <label class="control-label hidden-xs">Your phone number </label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="text-primary-color-co"><i class="fa fa-ticket"></i></span></div>
                                        <input class="form-control" type="tel" placeholder="telephone number with country code">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 text-right">
                                    <label class="control-label hidden-xs">Your email</label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="text-primary-color-co"><i class="fa fa-envelope"></i></span></div>
                                        <input class="form-control" type="text" placeholder="Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 text-right">
                                    <label class="control-label hidden-xs">Receiver email</label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="text-primary-color-co"><i class="fa fa-envelope"></i></span></div>
                                        <input class="form-control" type="text" placeholder="Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-push-4">
                                    <?php if ($adm['activate'] == "Sell Departement" OR $adm['activate'] == "Administrator") { ?>
                                    <button class="btn btn-default addressBtnCo pad-y-lg pad-x-sm" type="button"><i class="fa fa-cart-plus"></i> Place An Order</button>
                                    <?php } ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/purchases.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/dashboardclient.js"></script>
</body>

</html>