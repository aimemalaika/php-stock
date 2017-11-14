<?php 
    require_once("dompdf/autoload.inc.php");
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    
    $invoice_to  = $_POST["invoice_to"];
    $invoice_date = $_POST["invoice_date"];
    $invoice_due_date = $_POST["invoice_due_date"];
    $invoice_number = $_POST["invoice_number"];
    $invoice_ref = $_POST["invoice_ref"];
    $invoice_disc = $_POST["invoice_disc"];
    $invoice_acc = $_POST["invoice_acc"];
    $items = $_POST["items"];
    $invoice_sub_total = (isset($_POST["invoice_sub_total"])) ? $_POST["invoice_sub_total"] : 0.00;
    $invoice_tax = (isset($_POST["invoice_tax"])) ? $_POST["invoice_tax"] : 0.00;
    $invoice_total = (isset($_POST["invoice_total"])) ? $_POST["invoice_total"] : 0.00;
    
    $my_html = "";
    
    // print_r($items);
    ob_start();
    
?>
<html>

<head>
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
    <div class="container-fluid pad-x-lg">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 white-background">
                <h2 class="text-center">INVOICE</h2>
                <form>
                    <div>
                        <div class="row pad-x-lg">
                            <table class="table table-bordered">
                                <tr>
                                    <th>To</th>
                                    <th></i> Date</th>
                                    <th></i> Due Date</th>
                                    <th></i> Invoice</th>
                                    <th>Reference</th>
                                </tr>
                                <tr>
                                    <td><?=$invoice_to;?></td>
                                    <td><?=$invoice_date;?></td>
                                    <td><?=$invoice_due_date;?></td>
                                    <td><?=$invoice_number;?></td>
                                    <td><?=$invoice_ref;?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="row pad-x-sm">
                            <table class="table table-bordered">
                            <tr>
                                <th>ITEM</th>
                                <th>DESCRIPTION</th>
                                <th>QUANTITY</th>
                                <th>UNIT PRICE</th>
                            </tr>
                            <?php $counter = 0; ?>
                            <?php foreach($items as $item):
                                switch($counter%4):case 0: ?>
                                    <tr><td><?=$item;?></td>
                                    <?php break; ?>
                                    <?php case 1: ?>
                                    <td><?=$item;?></td>
                                    <?php break; ?>
                                    <?php case 2: ?>
                                    <td><?=$item;?></td>
                                    <?php break; ?>
                                    <?php case 3: ?>
                                    <td><?=$item;?></td></tr>
                                    <?php break; ?>
                                    <?php default: ?>
                                    <?php break;  ?>
                                <?php endswitch; ?>
                                <?php $counter += 1; ?>
                            <?php endforeach; ?>
                            </table>
                        </div>
                        <div class="row pad-x-md">
                            <table class="table">
                                <tr><td><h4 class="primary-text-color">Discount: </h4></td><td><?=$invoice_disc;?></td></tr>
                                <tr><td><h4 class="primary-text-color">Account: </h4></td><td><?=$invoice_acc;?></td></tr>
                            </table>
                        </div>
                        <div class="row pad-x-md">
                            <table class="table">
                                <tr><td><h4 class="secondary-text-color clearfix">Subtotal<small class="pad-y-sm pad-x-sm pull-right"><?=$invoice_sub_total;?> $</small></h4></td></tr>
                                <tr><td><h4 class="secondary-text-color clearfix">Tax<small class="pad-x-sm pull-right pad-y-sm"><?=$invoice_tax;?> $</small></h4></td></tr>
                                <tr><td><h2 class="primary-text-color">Total<small class="pad-y-sm pad-x-sm pull-right"><?=$invoice_total;?> $</small></h2></td></tr>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

<?php
$my_html .= ob_get_clean();
$dompdf->loadHtml($my_html);
$dompdf->render();
$pdf_str = $dompdf->output();
// file_put_contents("invoice.pdf", $pdf_str);

// to promt for download

$dompdf->stream("invoice.pdf");
?>