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
    <title>settings</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/settings.css">
    <link rel="stylesheet" href="assets/css/purchases.css">
    <link rel="stylesheet" href="assets/css/palette.css">
    <link rel="stylesheet" href="assets/css/subscription.css">
    <link rel="stylesheet" href="assets/css/dashboardclient.css">
</head>

<body>
    <form method="post" enctype="multipart/form-data">
    <div class="dark-primary-color">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-2 col-sm-8 col-sm-offset-2 white-background">
                    <div class="page-header">
                        <h1 class="primary-text-color">Account Setup <small class="secondary-text-color">Please Fill in information</small></h1></div>
                </div>
                <div class="col-sm-8 col-sm-offset-2 white-background">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <h3 class="secondary-text-color">Purchases </h3>
                            <div class="checkbox">
                                <label>
                                <?php
                                if ($ex0==0) {?>
                                    <input name="purchase[]" value='<a href="PurchaseCash.php?page=1">Purchase Cash</a>' type="checkbox">Purchase Cash</label>
                                <?php }else{?>
                                    <label><input type="checkbox" checked="true" disabled="true" name="">Purchase Cash</label>
                                <?php } ?>
                            </div>
                            <div class="checkbox">
                                <label>
                                <?php
                                if ($ex1==0) {?>
                                    <input name="purchase[]" value='<a href="PurchaseCredit.php?page=1">Purchase Credit</a>' type="checkbox">Purchase Credit</label>
                                <?php }else{?>
                                    <label><input type="checkbox" checked="true" disabled="true" name="">Purchase Credit</label>
                                <?php } ?>
                            </div>


                            <h3 class="secondary-text-color">Sales </h3>
                            <div class="checkbox">
                                <label>
                                <?php
                                if ($ex2==0) {?>
                                    <input name="sales[]" value='<a href="CreateInvoice.php?page=1">Create invoice</a>' type="checkbox">Create invoice</label>
                                <?php }else{?>
                                    <label><input type="checkbox" checked="true" disabled="true" name="">Create invoice</label>
                                <?php } ?>
                            </div>
                            <div class="checkbox">
                                <label>
                                <?php
                                if ($ex3==0) {?>
                                    <input name="sales[]" value='<a href="Placeanorder.php?page=1">Place an order</a>' type="checkbox">Place an order</label>
                                <?php }else{?>
                                    <label><input type="checkbox" checked="true" disabled="true" name="">Place an order</label>
                                <?php } ?>
                            </div>
                            <div class="checkbox">
                                <label>
                                <?php
                                if ($ex4==0) {?>
                                    <input name="sales[]" value='<a href="SalesCash.php?page=1">Sales cash</a>' type="checkbox">Sales cash</label>
                                <?php }else{?>
                                    <label><input type="checkbox" checked="true" disabled="true" name="">Sales cash</label>
                                <?php } ?>
                            </div>
                            <div class="checkbox">
                                <label>
                                <?php
                                if ($ex5==0) {?>
                                    <input name="sales[]" value='<a href="SalesCredit.php?page=1">Sales credit</a>' type="checkbox">Sales credit</label>
                                <?php }else{?>
                                    <label><input type="checkbox" checked="true" disabled="true" name="">Sales credit</label>
                                <?php } ?>
                            </div>


                            <h3 class="secondary-text-color">Inventory </h3>
                            <div class="checkbox">
                                <label>
                                <?php
                                if ($ex6==0) {?>
                                    <input name="inventory[]" value='<a href="Assetstracking.php">Assets tracking</a>' type="checkbox">Assets tracking</label>
                                <?php }else{?>
                                    <label><input type="checkbox" checked="true" disabled="true" name="">Assets tracking</label>
                                <?php } ?>
                            </div>
                            <div class="checkbox">
                                <label>
                                <?php
                                if ($ex7==0) {?>
                                    <input name="inventory[]" value='<a href="Salesexpensereport.php">Sales expense report</a>' type="checkbox">Sales expense report</label>
                                <?php }else{?>
                                    <label><input type="checkbox" checked="true" disabled="true" name="">Sales expense report</label>
                                <?php } ?>
                            </div>
                            <div class="checkbox">
                                <label>
                                <?php
                                if ($ex8==0) {?>
                                    <input name="inventory[]" value='<a href="Purchaseexpensereport.php">Purchase expense report</a>' type="checkbox">Purchase expense report</label>
                                <?php }else{?>
                                    <label><input type="checkbox" checked="true" disabled="true" name="">Purchase expense report</label>
                                <?php } ?>
                            </div>
                            <div class="checkbox">
                                <label>
                                <?php
                                if ($ex9==0) {?>
                                    <input name="inventory[]" value='<a href="Stockmanagement.php">Stock management</a>' type="checkbox">Stock management</label>
                                <?php }else{?>
                                    <label><input type="checkbox" checked="true" disabled="true" name="">Stock management</label>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>

                <div class="col-sm-8 col-sm-offset-2 white-background last-col">
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-5">
                            <a href="javascript:history.go(-1)"onMouseOver="self.status.referrer;return true" style="border: 3px solid #448aff;padding: 8px;width: inherit;" class="btn btn-link mibtn" type="submit">EXIT</a>
                            <button name="addfut" class="btn btn-default mibtn" type="submit">SAVE </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/purchases.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/dashboardclient.js"></script>
</body>

</html>