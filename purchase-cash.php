<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Purchase cash</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="default.css" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="style/style.css">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" type="image/png" href="img/small-logo-01.png">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body>
  <?php include 'header.php'; ?>
<div id="wrapper">
  <div id="content" style="border-bottom: 7px solid #F4F4F4;">
    <div id="sidebar">
      <ul>
          <h2>Client list</h2>
          <ul>
            <li><i style="font-size: 17px;color: #60ff00;" class="fa fa-ellipsis-h" aria-hidden="true"></i> <a href="#">client one</a></li>
            <li><i style="font-size: 17px;color: #60ff00;" class="fa fa-ellipsis-h" aria-hidden="true"></i> <a href="#">client one</a></li>
            <li><i style="font-size: 17px;color: #60ff00;" class="fa fa-ellipsis-h" aria-hidden="true"></i> <a href="#">client one</a></li>
            <li><i style="font-size: 17px;color: #60ff00;" class="fa fa-ellipsis-h" aria-hidden="true"></i> <a href="#">client one</a></li>
            <li><i style="font-size: 17px;color: #60ff00;" class="fa fa-plus-square-o" aria-hidden="true"></i> <a href="#">Add purchase cash</a></li>
          </ul>
        </ul>
    </div>
    <!-- end #sidebar -->
    <div id="blog">
      <center><h2 style="margin-top: 17px;">List of available product</h2></center>
      <div class='package'>
        <div class='name'>Iphone 6</div>
        <div class='trial'>price: 100 000 frw</div>
        <hr>
        <div class='trial'>Description</div>
        <hr>
        <br>
        <div style="margin-bottom: -7px;max-height: 48px;overflow: hidden;">
            babababbaba abbababab abbababa abba abba ba abbaba ba aba ba aba ba ab
            babababbaba abbababab abbababa abba abba ba abbaba ba aba ba aba ba ab
            babababbaba abbababab abbababa abba abba ba abbaba ba aba ba aba ba ab
        </div>
        <div class='trial'>Available stock</div>
        <hr>
        <br>
        <center><h4 style="margin-top: -4px;color:black">120 iphone(s)</h4></center>
        <a href="#0" class='trial trialbut'>Purchase and details</a>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
<!-- SCRIPT -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
  <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
  <script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
	<script type="text/javascript" src="js/fastclick.min.js"></script>
	<script type="text/javascript" src="js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" src="js/jquery.animate-shadow-min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script>
function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}
addLoadEvent(preloader);

</script>
</body>
</html>
