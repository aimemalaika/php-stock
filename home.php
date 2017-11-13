<?php
  session_start();
    if (!isset($_SESSION['username']) AND !isset($_SESSION['shopname'])) {
        header('Location: login');
    }
?>
<!DOCTYPE HTML>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Home</title>

<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="img/small-logo-01.png">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='style.css' rel='stylesheet' type='text/css'>

</head>

<body>

<a name="ancre"></a>

<!-- CACHE -->
<div class="cache"></div>

<!-- HEADER -->

<div id="wrapper-header">
	<div id="main-header" class="object">
		<strong><div class="logo">Welcome to Shop name</div></strong>
		<div id="main_tip_search">
	<a style="font-size:20px;color: whitesmoke" href="php/logout.php">Deconnection</a>
</div>
  </div>
</div>


<!-- PORTFOLIO -->

	<div id="wrapper-container">

		<div class="container object">

			<div id="main-container-image">
					<h1 style="text-align: center;width: 77%;">Purchase</h1>
					<section class="work">

						<figure class="white">
							<a href="purchase-cash">
								<img src="img/psd-4.jpg" alt="" />
								<dl>
									<dt>Purchase on cash</dt>
									<dd>Clicking on this button you will be able to view and add all puchase made by your client on cash.If it is what you are looking for click to enter!</dd>
								</dl>
							 </a>
              <div id="wrapper-part-info">
              	<div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
              	<div id="part-info">Purchase on cash</div>
							</div>
            </figure>

						<figure class="white">
							<a href="purchase-credit">
								<img src="img/font-1.jpg" alt="" />
								<dl>
									<dt>Purchase on credit</dt>
									<dd>Clicking on this button you will be able to view and add all puchase made by your client on credit.If it is what you are looking for click to enter!</dd>
								</dl>
							</a>
              <div id="wrapper-part-info">
              	<div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div>
              	<div id="part-info">Purchase on credit</div>
							</div>
						</figure>

						<figure class="white">
							<a href="place-oder">
								<img src="img/psd-1.jpg" alt="" />
								<dl>
									<dt>Place an oder</dt>
									<dd>Clicking on this button you will be able to oder a product to your supplier.If it is what you are looking for click to enter!</dd>
								</dl>
							</a>
              <div id="wrapper-part-info">
              	<div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
              	<div id="part-info">Place an oder</div>
							</div>
						</figure>
					<section>

			</div>

		</div>

	</div>


<!-- SCRIPT -->
<!-- PORTFOLIO -->

	<div id="wrapper-container">

		<div class="container object">

			<div id="main-container-image1">
					<h1 style="text-align: center;width: 77%;">Sales</h1>
					<section class="work">

						<figure class="white">
							<a href="sale-cash">
								<img src="img/psd-4.jpg" alt="" />
								<dl>
									<dt>Sale on cash</dt>
									<dd>Clicking on this button you will be able to view and add all puchase made by your client on cash.If it is what you are looking for click to enter!</dd>
								</dl>
							</a>
              <div id="wrapper-part-info">
              	<div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
              	<div id="part-info">Sale on cash</div>
							</div>
            </figure>

						<figure class="white">
							<a href="sale-credit">
								<img src="img/font-1.jpg" alt="" />
								<dl>
									<dt>Sale on credit</dt>
									<dd>Clicking on this button you will be able to view and add all sale made by your client on credit.If it is what you are looking for click to enter!</dd>
								</dl>
							</a>
              <div id="wrapper-part-info">
              	<div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div>
              	<div id="part-info">Sale on credit</div>
							</div>
						</figure>

						<figure class="white">
							<a href="create-bill">
								<img src="img/psd-1.jpg" alt="" />
								<dl>
									<dt>Create a bill</dt>
									<dd>Clicking on this button you will be able to create a bill for your your client.If it is what you are looking for click to enter!</dd>
								</dl>
							</a>
              <div id="wrapper-part-info">
              	<div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
              	<div id="part-info">Create a bill</div>
							</div>
						</figure>
					<section>

			</div>

		</div>

	</div>


<!-- SCRIPT -->
<!-- PORTFOLIO -->

	<div id="wrapper-container">

		<div class="container object">

			<div id="main-container-image2">
					<h1 style="    text-align: center;width: 94%">Inventory</h1>
					<section class="work">

						<figure class="white">
							<a href="asset-traking">
								<img src="img/psd-4.jpg" alt="" />
								<dl>
									<dt>Asset tracking</dt>
									<dd>Clicking on this button you will be able to view and add all asset of your company.If it is what you are looking for click to enter!</dd>
								</dl>
							</a>
	            <div id="wrapper-part-info">
	            	<div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
	            	<div id="part-info">Asset tracking</div>
							</div>
            </figure>

						<figure class="white">
							<a href="sale-expense">
								<img src="img/font-1.jpg" alt="" />
								<dl>
									<dt>Sales expenses</dt>
									<dd>Clicking on this button you will be able to view and add all sales expenses of your shop.If it is what you are looking for click to enter!</dd>
								</dl>
							</a>
              <div id="wrapper-part-info">
              	<div class="part-info-image"><img src="img/icon-font.svg" alt="" width="28" height="28"/></div>
              	<div id="part-info">Purchases expenses</div>
							</div>
						</figure>

						<figure class="white">
							<a href="purchase-expense">
								<img src="img/psd-1.jpg" alt="" />
								<dl>
									<dt>Purchases expenses</dt>
									<dd>Clicking on this button you will be able to view and add all Purchases expenses of your shop.If it is what you are looking for click to enter!</dd>
								</dl>
							</a>
							<div id="wrapper-part-info">
								<div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
								<div id="part-info">Purchases expenses</div>
							</div>
						</figure>

						<figure class="white">
							<a href="stock-management">
								<img src="img/psd-1.jpg" alt="" />
								<dl>
									<dt>Stock managemt</dt>
									<dd>Clicking on this button you will be able to view and add all product you want to sell.If it is what you are looking for click to enter!</dd>
								</dl>
							</a>
              <div id="wrapper-part-info">
              	<div class="part-info-image"><img src="img/icon-psd.svg" alt="" width="28" height="28"/></div>
              	<div id="part-info">Stock managemt</div>
							</div>
						</figure>

					<section>

			</div>

		</div>

	</div>


<!-- SCRIPT -->
<div id="wrapper-copyright">
		<div class="copyright">
    		<div class="copy-text object">Copyright © 2017. by IHUZA.COM</a></div>

			<div class="wrapper-navbouton">
    			<div class="google object">g</div>
    			<div class="facebook object">f</div>
    			<div class="linkin object">i</div>
    			<div class="dribbble object">d</div>
    		</div>
    	</div>
    </div>

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
