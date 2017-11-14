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
    <title>ASSETS TRACKING</title>
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
                <form method="POST" action="" class="pad-x-sm">
                    <div class="form-group">
                        <label class="control-label">Type of asset</label>
                        <input placeholder="NAME" name="type" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Description </label>
                        <textarea name="description" placeholder="type your text here" class="form-control" type="text"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Comment </label>
                        <textarea name="comment" class="form-control" placeholder="Type your text here" type="text"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Depreciation date</label>
                        <input name="depreciationdate" id="datepicker" placeholder="JJ/MM/YYYY" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Rate</label>
                        <input name="rate" placeholder="eg : 30 %" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Depreciation method</label>
                        <select name="depreciationmethod" class="form-control">
                            <option value="No depreciation">No depreciation</option>
                            <option value="Short line">Short line</option>
                            <option value="Decline balance">Decline balance</option>
                            <option value="Decline balance 150%">Decline balance 150%</option>
                            <option value="Decline balance 200%">Decline balance 200%</option>
                            <option value="Full depreciation">Full depreciation</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Avereging method</label>
                        <select name="avereging" class="form-control">
                            <option value="Full month">Full month</option>
                            <option value="Actual days">Actual days</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Effective</label>
                        <input name="effective" placeholder="eg : 10 Years" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Coast</label>
                        <input name="coast" placeholder="eg : 123333" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default mibtn" name="addasset" type="submit">Save </button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12" id="next-form">
                <div class="row light-primary-color">
                    <div class="col-xs-12">
                        <div class="clearfix">
                            <div class="pull-left button-g-div">
                                <ul class="list-inline">
                                    <?php if ($adm['activate'] == "Asset Management" OR $adm['activate'] == "Administrator") { ?>
                                    <li id="open-form-new-item" class="mi-btn text-primary-color"> <a href="#"><i class="fa fa-plus-circle"></i> New Asset</a></li>
                                    <?php } ?>
                                    <li id="close-form-new-item" class="mi-btn text-primary-color hidden"> <a href="#"><i class="fa fa-times-circle"></i> Close</a></li>
                                     <!--<li class="mi-btn text-primary-color"> <a><i class="fa fa-print"></i> Print Summary</a></li>
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
                                <h3 class="text-muted panel-title primary-text-color"><i class="fa fa-table"></i> Data of assets of the company</h3></div>
                            <div class="panel-body">
                                <div>
                                    <div>
                                        <div class="table-inner-header">
                                            <form class="form-inline" method="get">
                                                <div class="form-group table-search">
                                                    <div class="input-group">
                                                        <input name="ass" class="form-control" type="text" placeholder="Search" required>
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
                                                        <th>Type</th>
                                                        <th>Description</th>
                                                        <th>Comment</th>
                                                        <th>Depreciation date</th>
                                                        <th>Depreciation method</th>
                                                        <th>Rate</th>
                                                        <th>avereging</th>
                                                        <th>Effective</th>
                                                        <th>Coast</th>
                                                        <th>Status sold/in use</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    while ($dipass = $selass->fetch()) {?>
                                                        <tr>
                                                            <td><?= $dipass['type']?></td>
                                                            <td><?= $dipass['description']?></td>
                                                            <td><?= $dipass['comment']?></td>
                                                            <td><?= $dipass['depreciationdate']?></td>
                                                            <td><?= $dipass['depreciationmethod']?></td>
                                                            <td><?= $dipass['rate']?></td>
                                                            <td><?= $dipass['avereging']?></td>
                                                            <td><?= $dipass['effective']?></td>
                                                            <td><?= $dipass['coast']?> FRW</td>
                                                            <td><?php if ($dipass['Date_Time']=="In use") {echo $dipass['Date_Time'].' |> <a style="color: green; font-weight: bold;" href="php/sell.php?id='.$dipass["id"].'">Sell</a>';}else{echo $dipass['Date_Time'];}?> </td>
                                                        </tr>   
                                                   <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row">
                                        <?php
                                            if ($zero >= 1) { ?>         
                                            <div class="col-md-6">
                                                <div class="para-pad pull-left">
                                                    <p class="lead secondary-text-color">Showing 
                                                    <?=$departass+1?> - 
                                                    <?php if (($departass+$itemparpageass)>$totalitemass) {
                                                       echo $totalitemass;
                                                    }else{echo ($departass+$itemparpageass);}?> of <?=$totalitemass?> Entries</p>
                                                </div>
                                                <div class="pull-right">
                                                    <nav>
                                                        <ul class="pagination">
                                                            <?php
                                                            for ($i=1; $i <=(ceil($totalitemass / $itemparpageass)) ; $i++) {
                                                            if($i == $_GET['page']){?>
                                                            <li class="active"><a><?=$i?></a></li>
                                                            <?php }else{?>
                                                                <li><a href="Assetstracking.php?page=<?=$i?>"><?=$i?></a></li>
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
                                if ($zero >= 1) { ?>    
                            <div class="panel-footer"><span class="text-muted secondary-text-color">Updated Yesterday at 10:59</span></div>
                            <?php  }else{ ?>
                            <div class="panel-footer"><center><span style="color: red;font-size: 21px;">No asset registred</span></center></div>
                           <?php } ?>
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