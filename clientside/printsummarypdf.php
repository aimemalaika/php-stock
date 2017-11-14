<?php
    ob_start();
    require_once("dompdf/autoload.inc.php");
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'test');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $sql = "select * from excelimport";
    $result = mysqli_query($db,$sql);
    $sql = "show fields from excelimport";
    $header = mysqli_query($db, $sql);
    
    $report_name = (isset($_GET["report_name"])) ? '$_GET["report_name"]' : 'Report';
    
    $my_html = "";
    
?>
<html>
    <head>   
    <style>
        table, th, td {
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        table {
            width:90%;
        }
        td, th {
            padding: 7px;
        }
        th {
            background-color: #ccc;
        }
        h2{
            text-align: center;
            text-decoration: underline;
        }
    </style>
    </head>
    <body>
        <div class="container-fluid pad-x-lg">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 white-background">
                    <h2 class="text-center"><?=$report_name;?></h2>
                    <table border="1" class="table table-bordered">
                        <tr>
                        <?php $c = 0;
                        foreach($header as $heading):
                            $column_heading = $heading['Field'];
                            switch ($c):case 1:?>
                                    <th><?=$column_heading;?>
                                    <?php break;?>
                                <?php case 2: ?>
                                    <th><?=$column_heading;?>
                                    <?php break; ?>
                                <?php case 3: ?>
                                    <th><?=$column_heading;?>
                                    <?php break; ?>
                                <?php case 4: ?>
                                    <th><?=$column_heading;?>
                                    <?php break; ?>
                                <?php case 5: ?>
                                    <th><?=$column_heading;?>
                                    <?php break; ?>
                                <?php case 6: ?>
                                    <th><?=$column_heading;?>
                                    <?php break;?>
                                <?php default: ?>
                                    <?php break; ?>
                            <?php endswitch; ?>
                            </th>
                            <?php $c += 1; ?>
                        <?php endforeach; ?>
                        </tr>
                        
                        <?php foreach($result as $rs): ?>
                            <tr>
                            <?php $c = 0;
                            foreach($rs as $da):       
                                switch ($c):case 1: ?>
                                        <td><?=$da;?>
                                        <?php break;?>
                                    <?php case 2: ?>
                                        <td><?=$da;?>
                                        <?php break;?>
                                    <?php case 3: ?>
                                        <td><?=$da;?>
                                        <?php break; ?>
                                    <?php case 4: ?>
                                        <td><?=$da;?>
                                        <?php break; ?>
                                    <?php case 5: ?>
                                        <td><?=$da;?>
                                        <?php break; ?>
                                    <?php case 6: ?>
                                        <td><?=$da;?>
                                        <?php break;?>
                                    <?php default: ?>
                                        <?php break; ?>
                                <?php endswitch; ?>
                                </td>
                                <?php $c += 1; ?>
                            <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?> 
                    </table>                
                </div>
            </div>
        </div>
    </body>
</html>
    
    
<?php 
    $my_html .= ob_get_clean();
    $dompdf->loadHtml($my_html);
    $dompdf->render();
    $canvas = $dompdf->get_canvas();
    $font = $dompdf->getFontMetrics()->get_font("helvetica");
    
    $size = 10;
    $color = array(0,0,0);
    $text_height = $dompdf->getFontMetrics()->get_font_height($font, $size);
    $w = $canvas->get_width();
    $h = $canvas->get_height();
    $y = $h - 2 * $text_height - 24;
    $canvas->line(16, $y, $w - 16, $y, $color, 1);
    $y += $text_height;
    $canvas->page_text(16, $y, "Page: {PAGE_NUM} of {PAGE_COUNT}", $font, $size, $color);
    
    $pdf_str = $dompdf->output();
    file_put_contents("report.pdf", $pdf_str);
    
    // to prompt for download
    // $dompdf->stream();
?>
