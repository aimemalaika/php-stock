<?php
    session_start();
    if (!isset($_SESSION['username']) AND !isset($_SESSION['domaine'])) {
        header('Location: ../login.php');
    }
    include 'php/research.php'; 
    include 'php/addagent.php';
    include 'php/campname.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
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
    <div class="container-fluid hidden">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-1" role="tab" data-toggle="tab"><i class="fa fa-book"></i> Address Book</a></li>
                            <li><a href="#tab-2" role="tab" data-toggle="tab"><i class="fa fa-user"></i> Agents </a></li>
                        <li><a href="#tab-3" role="tab" data-toggle="tab"><i class="fa fa-home"></i> Third Tab</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" role="tabpanel" id="tab-1">
                            <div class="pad-x-sm">
                                <div><a class="btn btn-default" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" role="button" href="#collapse-1">New Contact</a>
                                    <div class="collapse" id="collapse-1">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-8">
                                                <form class="form-horizontal">
                                                    <div class="form-group">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="newContactName">Full Name</label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input class="form-control" type="text" id="newContactName">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-4">
                                                            <label class="control-label">Email Address</label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input class="form-control" type="email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-4">
                                                            <label class="control-label">Phone Number</label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input class="form-control" type="tel">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-8 col-sm-offset-4">
                                                            <button class="btn btn-default" type="submit">Save </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pad-y-md pad-x-sm light-primary-color">
                                <ul class="list-inline">
                                    <li class="mi-btn"> <a href="#"><i class="fa fa-envelope-o"></i> Message </a></li>
                                </ul>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Select All</th>
                                                <th>Full Name</th>
                                                <th>Email Address</th>
                                                <th>PhoneNumber </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Cell 1</td>
                                                <td>Cell 2</td>
                                                <td>Cell 2</td>
                                                <td>Cell 2</td>
                                            </tr>
                                            <tr>
                                                <td>Cell 3</td>
                                                <td>Cell 4</td>
                                                <td>Cell 4</td>
                                                <td>Cell 4</td>
                                            </tr>
                                        </tbody>
                                        <caption>172 Contacts</caption>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="tab-2">
                            <p>Second tab content.</p>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="tab-3">
                            <p>Third tab content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-3 aside-menu-left pad-x-md default-primary-color fade in" id="aside-menu-left">
                <div class="text-right pad-x-sm div-menu-close-btn">
                    <button class="btn btn-default addressBtn" type="button" id="close-btn"> <i class="fa fa-close"></i></button>
                </div>
                <div class="pad-x-lg clearfix">
                    <div class="text-right">
                        <a href="javascript:history.go(-1) onMouseOver="self.status.referrer;return true"" class="btn btn-default addressBtn" type="button">Go Back</a>
                    </div>
                </div>
               <!--  <div class="pad-x-sm">
                    <form class="form-inline">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="search contacts">
                            <div class="input-group-btn">
                                <button class="btn btn-default addressBtn" type="button"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <form class="form-inline">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="search agent">
                            <div class="input-group-btn">
                                <button class="btn btn-default addressBtn" type="button"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div> -->
                <ul class="nav nav-pills nav-stacked">
                    <li class="active sidebar"><a href="#addressBookDiv" class="text-primary-color" data-toggle="pill"><i class="fa fa-book"></i> Address Book</a></li>
                    <?php if ($adm['activate'] == "Administrator" OR $adm['activate'] == "Human Ressource") { ?>
                    <li class="sidebar"><a href="#agentsDiv" class="text-primary-color" data-toggle="pill"><i class="fa fa-group"></i> Agents </a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-md-10 col-sm-9 col-sm-offset-3 col-xs-12 aside-menu-right" id="aside-menu-right">
                <div class="tab-content">
                    <div id="addressBookDiv" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-12 pad-y-lg pad-x-md">
                                <div class="pad-x-sm div-menu-btn">
                                    <button class="btn btn-default addressBtn" type="button" id="menu-btn"> <i class="fa fa-th-list"></i></button>
                                </div>
                                <div><a class="btn btn-default addressBtn" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" role="button" href="#collapse-2">New Contact</a><span class="pull-right" style="color: red;font-size: 20px"><?php if (isset($erreur)) {echo $erreur;}?></span>
                                    <div class="collapse pad-y-sm pad-x-lg white-background" id="collapse-2">
                                        <div class="col-md-6 col-sm-10 col-xs-12">
                                            <form class="form-horizontal" method="POST">
                                                <div class="form-group">
                                                    <div class="col-sm-4 text-right">
                                                        <label class="control-label" for="flname">Full Name</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" name="fullname" type="text" id="flname">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-4 text-right">
                                                        <label class="control-label" for="emadd">E-mail Address</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" name="email" type="email" id="emadd">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-4 text-right">
                                                        <label class="control-label" for="pnber">Phone Number</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" name="phone" type="tel" id="pnber">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-4">
                                                        <button class="btn btn-default addressBtn" type="submit" name="addcontact"><i class="fa fa-save"></i> Save New Contact</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 default-primary-color pad-y-lg pad-x-sm">
                                <p>Address book</p>
                            </div>
                            <div class="col-md-12 pad-x-sm white-background">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Email Address</th>
                                                <th>PhoneNumber </th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                            while ($ela = $sela->fetch()) {?>
                                            <tr>
                                                <td><?=$ela['fullname']?></td>
                                                <td><?=$ela['email']?></td>
                                                <td><?=$ela['phone']?></td>
                                                <td><a href="mailto:<?=$ela['email']?>" onclick="window.open(this.href); return false;"> Send mail</a> | <a href="php/delete.php?add=<?=$ela['email']?>">remove</a><!-- |  <a href="php/delete.php?mail=">Update</a> --></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                        <caption><?=$number?> Contacts</caption>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="agentsDiv" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12 pad-y-lg pad-x-md">
                                <div class="pad-x-sm div-menu-btn">
                                    <button class="btn btn-default addressBtn" type="button" id="menu-btn"> <i class="fa fa-th-list"></i></button>
                                </div>
                                <div><a class="btn btn-default addressBtn" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-3" role="button" href="#collapse-3">New Agent</a>
                                    <div class="collapse pad-y-sm pad-x-lg white-background" id="collapse-3">
                                        <div class="col-md-6 col-sm-10 col-xs-12">
                                            <form class="form-horizontal" method="POST">
                                                <div class="form-group">
                                                    <div class="col-sm-4 text-right">
                                                        <label class="control-label" for="flname">Full Name</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" name="username" type="text" id="flname">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-4 text-right">
                                                        <label class="control-label" for="emadd">E-mail Address</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" name="mail" type="email" id="emadd">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-4 text-right">
                                                        <label class="control-label" for="pnber">Phone Number</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" name="phone" type="tel" id="pnber">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-4 text-right">
                                                        <label class="control-label" >Begginning of contract</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" name="bofcontrat" type="tel" id="datepicker">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-4 text-right">
                                                        <label class="control-label" >End of contract</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" name="eofcontrat" type="tel" id="datepicker1">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-4 text-right">
                                                        <label class="control-label" >Date of birth</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" name="dob" type="tel" id="datepicker2">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-4 text-right">
                                                        <label class="control-label" >Nationnality</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" name="natio" type="tel" id="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-4 text-right">
                                                        <label class="control-label" >Departement</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" name="rang">
                                                            <option value="Purchaise Departement">Purchaise</option>
                                                            <option value="Sell Departement">SELL</option>
                                                            <option value="Human Ressource">Human ressource</option>
                                                            <option value="Asset Management">Asset management</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-4">
                                                        <button class="btn btn-default addressBtn" type="submit" name="submit"><i class="fa fa-save"></i> Save New Agent</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 default-primary-color pad-y-lg pad-x-sm">
                                <p>Agent list</p>
                            </div>
                            <div class="col-md-12 pad-x-sm white-background">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Email Address</th>
                                                <th>PhoneNumber </th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                            while ($el = $sel->fetch()) {?>
                                            <tr>
                                                <td><?=$el['username']?></td>
                                                <td><?=$el['email']?></td>
                                                <td><?=$el['confcode']?></td>
                                                <td><a href="mailto:<?=$el['email']?>" onclick="window.open(this.href); return false;"> Send mail</a> | <a href="php/delete.php?add=<?=$el['email']?>">remove</a><!-- |  <a href="php/delete.php?mail=">Update</a> --></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                        <caption><?=$numbers-1?> Employees</caption>
                                    </table>
                                </div>
                            </div>
                        </div>
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
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker1" ).datepicker();
    $( "#datepicker2" ).datepicker();
  } );
  </script>
</body>

</html>
