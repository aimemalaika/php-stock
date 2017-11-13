<?php
include "php/bddprincipal.php";
include 'php/createaccount.php';
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.3.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/javascript-logo-1052x1052.png" type="image/x-icon">
  <meta name="description" content="">
  <meta name="google-site-verification" content="POEOyT-xKnF9tJdBBhS4nI_z3P-eiACqauJkOJ7ZDW8" />
  <title>Ihuza Rwanda</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/css/home.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <style type="text/css">
      .pricing:hover{
        border: 5px solid green;
        border-radius: 5px;
      }
  </style>

</head>
<body>
<section class="menu cid-qwvcV5NmrF" once="menu" id="menu1-0" data-rv-view="228">
    <nav class="navbar navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                         <img style="width: 2em;height: 2em;" src="assets/images/javascript-logo-1052x1052.png" alt="Mobirise" title="" media-simple="true">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="index.html"></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.html#content5-3">
                        Features</a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.html#content5-8">
                        Pricing</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.html#content4-s">
                        Landowners</a></li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.html#content5-k">Testimony</a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.html#form4-u">Contact Us
                    </a></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-7" href="#" id="signBtn">Sign Up</a></div>
        </div>
    </nav>
</section>
<section class="cid-qwvd5pXPyx mbr-fullscreen" id="header15-2" data-rv-view="230">



    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right" style="margin-top: 105px;">
<div class="row">
    <div class="mbr-white col-lg-8 col-md-7 content-container">
        <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1" style="float: left;float: left;margin-top: -9px;height: 354px;color: #e4ff00;font-family: aria;font-size: 77px;">
            I
        </h1>
        <p class="mbr-text pb-3 mbr-fonts-style display-5" >
            HUZA.COM provide custom inventory software for purchase and retail inventory software for rent (That includes; Stock, Cash, Sales and Assets Management among others).<br><br>
            Under Retail Inventory Software, we also have different packages ranging form Basic to Corporate packages.

            As for the Custom Inventory Software we offer our clients the chance to customize their own inventory system through us.<!-- Sign-up is FREE. No Credit Card Required - &nbsp;I have read and accept Company's <a href="#">Terms And Conditions</a><br> -->
        </p>
    </div>
    <div class="col-lg-4 col-md-5">
    <div class="form-container">
        <?php
                if (isset($erreur)) { ?>
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script type="text/javascript">
                       swal({
                          title: "Oooops !",
                          text: "<?=$erreur?>",
                          icon: "error",
                          button: "Please try again",
                        });
                    </script>
            <?php    }
            ?>
        <div class="media-container-column animated" id="signingForm">
            <form class="mbr-form" method="POST"  data-form-title="Form">
            <input type="hidden" data-form-email="true" value="p4L3g72e6wOalcUQXe5pdDSvzj440a2d3OEnouxdSUXNoEbHCjrwASXcGTd4b+N1DojltlWgQMdHhM90SJnf6JAQapHZD2hW8a/d8OJid4y+6YSULECI4jOzGXHxuh1M">

                    <div class="form-group">
                        <input type="text" class="form-control px-3" name="shopname" data-form-field="Name" placeholder="Shop name" id="name-header15-2" required="">
                    </div>

                    <div class="form-group">
                        <input type="tel" class="form-control px-3" name="telnum" data-form-field="Name" placeholder="Telephone number" id="name-header15-21" required="">
                    </div>

                <span class="input-group-btn"><button class="btn btn-form btn-primary-outline display-4" name="submit" style="width: 100%">Create Account</button></span>
            </form>

        </div>
    </div>
    </div>
</div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="mbr-section content5 cid-qwvdgce8gn" id="content5-3" data-rv-view="233">



    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    FEATURES</h2>

                <!-- <p class="mbr-text align-center mbr-white pb-3 mbr-fonts-style display-7">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                </p> -->

            </div>
        </div>
    </div>
</section>

<!-- <section class="mbr-section article content11 cid-qwvthsxPbZ" id="content11-t" data-rv-view="236">


    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol>
                    <li><strong>MOBILE FRIENDLY</strong> - no special actions required, all sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site, it will adapt automagically. <a href="#">Try it now!</a></li>
                    <li><strong>EASY AND SIMPLE</strong> - cut down the development time with drag-and-drop website builder. Drop the blocks into the page, edit content inline and publish - no technical skills required. <a href="#">Try it now!</a></li>
                    <li><strong>UNIQUE STYLES</strong> - choose from the large selection of latest pre-made blocks - full-screen intro, bootstrap carousel, content slider, responsive image gallery with lightbox, parallax scrolling, video backgrounds, hamburger menu, sticky header and more. <a href="#">Try it now!</a></li>
                </ol>
            </div>
        </div>
    </div>
</section> -->

<section class="features6 cid-qwvdXjHZ5g" id="features6-5" data-rv-view="237">




    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <!-- <div class="card-img pb-3">
                    <span class="mbri-bootstrap mbr-iconfont" media-simple="true"></span>
                </div> -->
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        Web based
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                      IHUZA is the leading web-based Inventory software. You can access data information from any device, any place, and at any time...<a href="">(read more)</a><!--
                      Open from high-end businesses (corporates, manufactures, etc )  to low-end businesses. Add and track purchase orders, expenses, sales, inventory, performance dashboard, calendar, invoice, automated marketing, etc.  -->
                    </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <!-- <div class="card-img pb-3">
                    <span class="mbri-touch mbr-iconfont" media-simple="true"></span>
                </div> -->
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        Purchase orders
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Tie your orders sources while processing instant order communications your customers as well your suppliers with... <a href="">(read more)</a>
                    </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
               <!--  <div class="card-img pb-3">
                    <span class="mbri-responsive mbr-iconfont" media-simple="true"></span>
                </div> -->
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        Perfect inventory
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Track precisely the value of products and items you have, set thresholds for re-order to eliminate backorders, be notified ...<br><a href="">(read more)</a>
                    </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <!-- <div class="card-img pb-3">
                    <span class="mbri-desktop mbr-iconfont" media-simple="true"></span>
                </div> -->
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        Company URL
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       MoThe Company URL feature allows you to use your company’s subdomain as a URL for your IHUZA account.<br><br><br>
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>

<section class="features6 cid-qwvdYXqZ7b" id="features6-6" data-rv-view="240">




    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <!-- <div class="card-img pb-3">
                    <span class="mbri-bootstrap mbr-iconfont" media-simple="true"></span>
                </div> -->
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        Audits
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Audits help companies to monitor regular checkpoints in the asset life cycle. Verify daily possession by having custodians acknowledge ... &nbsp&nbsp&nbsp&nbsp<a href="">(read more)</a>
                    </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <!-- <div class="card-img pb-3">
                    <span class="mbri-touch mbr-iconfont" media-simple="true"></span>
                </div> -->
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        Import and Export
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Use our dynamic import technology to import and export data and information. This makes adding, updating and downloading information fast and easy.
                    </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <!-- <div class="card-img pb-3">
                    <span class="mbri-responsive mbr-iconfont" media-simple="true"></span>
                </div> -->
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        Access Control
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Limit visibility of certain features based on users group, location, or both. This is particularly useful when managing multiple ... <br><a href="">(read more)</a>
                    </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <!-- <div class="card-img pb-3">
                    <span class="mbri-desktop mbr-iconfont" media-simple="true"></span>
                </div> -->
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7">
                        Data Backups
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Want snapshots of your data to be available for offline use? Automate data exports to external server on regular intervals. You can even ...<br><a href="">(read more)</a>
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>

<section class="mbr-section content5 cid-qwveNaJ1Vd" id="content5-8" data-rv-view="243">





    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    PACKAGE PRICES<br></h2>

                <!-- <p class="mbr-text align-center mbr-white pb-3 mbr-fonts-style display-7">
                    All pricing plans include all features plus technical support - choose now based on your usage!
                </p> -->

            </div>
        </div>
    </div>
</section>

<section class="cid-qwveVgs7qe" id="pricing-tables3-9" data-rv-view="246">




    <div class="container">
        <div class="media-container-row">
            <div class=" col-12 col-lg-4 col-md-6 my-2">
                <div class="pricing over">
                    <div class="plan-header">
                        <div class="plan-price over">
                            <span class="price-value mbr-fonts-style display-5">
                                RFW
                            </span><br>
                            <span style="font-size: 52px;" class="price-figure mbr-fonts-style display-1">
                                30 000
                            </span>
                            <h3 class="plan-title mbr-fonts-style display-5">
                                Basic</h3>
                            <br><br><br>
                            <h4>One user</h4>
                            <hr>
                            <h4>100 products</h4>
                            <hr>
                        </div>
                    </div>
                    <div class="plan-body">
                        <p class="mbr-text mbr-fonts-style display-7">

                        </p>
                        <div class="mbr-section-btn pt-4 text-center"><a href="" class="btn btn-primary display-4">SUBSCRIBE<br></a></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 col-md-6 my-2">
                <div class="pricing">
                    <div class="plan-header">
                        <div class="plan-price">
                            <span class="price-value mbr-fonts-style display-5">
                                RFW
                            </span><br>
                            <span style="font-size: 52px;" class="price-figure mbr-fonts-style display-1">
                                50 000
                            </span>
                            <h3 class="plan-title mbr-fonts-style display-5">
                                Premium
                            </h3>
                             <br><br><br>
                            <h4>10 user</h4>
                            <hr>
                            <h4>500 products</h4>
                            <hr>
                        </div>
                    </div>
                    <div class="plan-body">
                        <p class="mbr-text mbr-fonts-style display-7">

                        </p>
                        <div class="mbr-section-btn pt-4 text-center"><a href="" class="btn btn-primary display-4">
                                SUSBCRIBE<br></a></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 col-md-6 my-2">
                <div class="pricing">
                    <div class="plan-header">
                        <div class="plan-price">
                            <span class="price-value mbr-fonts-style display-5">
                                RFW
                            </span><br>
                            <span style="font-size: 52px;" class="price-figure mbr-fonts-style display-1">
                                100 000
                            </span>
                            <h3 class="plan-title mbr-fonts-style display-5">
                                Corporate</h3>
                            <br><br><br>
                            <h4>unlimited user</h4>
                            <hr>
                            <h4>unlimited products</h4>
                            <hr>
                        </div>
                    </div>
                    <div class="plan-body ">
                        <p class="mbr-text mbr-fonts-style display-7">

                        </p>
                        <div class="mbr-section-btn pt-4 text-center"><a href="" class="btn btn-primary display-4">
                                SUBSCRIBE<br></a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="mbr-section article content9 cid-qwvff1Ltmy" id="content9-c" data-rv-view="249">



    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-fonts-style display-7">40 days for free trial Subscription. These first forty days (40) for monthly subscriptions are free, cheap, or deeply discounted! Getting your first 40 days free for trial is a great way to try our software and we truly believe that your going to enjoy our services! </div>
            <hr class="line" style="width: 25%;">
        </div>
        </div>
</section>

<section class="mbr-section content4 cid-qwvsEtYDdO" id="content4-s" data-rv-view="251">



    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">Landowners</h2>


            </div>
        </div>
    </div>
</section>

<section class="tabs3 cid-qwvfWD3q0r" id="tabs3-g" data-rv-view="253">





    <div class="container">


    </div>
    <div class="container-fluid">
        <div class="row tabcont">
            <ul class="nav nav-tabs pt-3 mt-5" role="tablist">
                <li class="nav-item mbr-fonts-style"><a class="nav-link active display-7" role="tab" data-toggle="tab" href="#tabs3-g_tab0" aria-expanded="true">
                        Manufactures </a></li>
                <li class="nav-item mbr-fonts-style"><a class="nav-link active display-7" role="tab" data-toggle="tab" href="#tabs3-g_tab1" aria-expanded="true">
                        Distributors </a></li>
                <li class="nav-item mbr-fonts-style"><a class="nav-link active display-7" role="tab" data-toggle="tab" href="#tabs3-g_tab2" aria-expanded="true">Wholesalers</a></li>
                <li class="nav-item mbr-fonts-style"><a class="nav-link active display-7" role="tab" data-toggle="tab" href="#tabs3-g_tab3" aria-expanded="true">
                        Retailers</a></li>


            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row px-1">
            <div class="tab-content">
                <div id="tab1" class="tab-pane in active mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <!-- <div class="col-xs-12 col-md-6">


                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                No special actions required, all sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site, it will adapt automagically.<br><br><a href="#">GO TO LINK</a>
                            </p>
                        </div> -->

                        <div class="col-xs-12 col-md-6">


                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Assembling together or in a way packaging products before selling them?
                                <br>
                                Keep track of manufacturing products, control and process orders from your clients while having your company inventory as well marketing new products that you’re offering.
                            </p>
                        </div>




                    </div>
                </div>

                <div id="tab2" class="tab-pane  mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <!-- <div class="col-xs-12 col-md-6">


                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Cut down the development time with drag-and-drop website builder. Drop the blocks into the page, edit content inline and publish - no technical skills required.<br><br><a href="#">GO TO LINK</a>
                            </p>
                        </div> -->

                        <div class="col-xs-12 col-md-6">
                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Trade anything from high-end (electronics, equipment, etc.) to low-end (crafts, clothes, etc.) manage your sales, expenses, stocks, as well as valuating you’re your company worth, hence processing orders from to manufactures to your clients all within our software.
                            </p>
                        </div>




                    </div>
                </div>

                <div id="tab3" class="tab-pane  mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <!-- <div class="col-xs-12 col-md-6">


                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Choose from the large selection  pre-made blocks - full-screen intro, bootstrap carousel, slider, responsive image gallery with, parallax scrolling, sticky header and more.<br><br><a href="#">GO TO LINK</a>
                            </p>
                        </div>
 -->
                        <div class="col-xs-12 col-md-6">


                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Increase your revenue by increasing sales and reducing unnecessary expenses hence out competing your competitors?<br>
                                Manage your sales, expenses ,stocks and customize your invoices hence saving time by providing best services to your clients regardless to location.
                            </p>
                        </div>




                    </div>
                </div>

                <div id="tab4" class="tab-pane  mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <!-- <div class="col-xs-12 col-md-6">


                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                No special actions required, all sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site, it will adapt automagically.<br><br><a href="#">GO TO LINK</a>
                            </p>
                        </div> -->

                        <div class="col-xs-12 col-md-6">


                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                An individual or small-scale business selling few products produced on small scale?<br>
                                Monitor all your crucial actions by order and purchase from your suppliers, manufactures hence controlling and managing your daily transactions.
                            </p>
                        </div>

                    </div>
                </div>

                <div id="tab5" class="tab-pane  mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <div class="col-xs-12 col-md-6">


                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Cut down the development time with drag-and-drop website builder. Drop the blocks into the page, edit content inline and publish - no technical skills required.
                            </p>
                        </div>

                        <div class="col-xs-12 col-md-6">


                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Cut down the development time with drag-and-drop website builder. Drop the blocks into the page, edit content inline and publish - no technical skills required.
                            </p>
                        </div>




                    </div>
                </div>

                <div id="tab6" class="tab-pane  mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <div class="col-xs-12 col-md-6">


                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Choose from the large selection  pre-made blocks - full-screen intro, bootstrap carousel, slider, responsive image gallery with, parallax scrolling, sticky header and more.
                            </p>
                        </div>

                        <div class="col-xs-12 col-md-6">


                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Choose from the large selection  pre-made blocks - full-screen intro, bootstrap carousel, slider, responsive image gallery with, parallax scrolling, sticky header and more.
                            </p>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content5 cid-qwvhQmiS7s" id="content5-k" data-rv-view="256" style="padding-top: 184px;padding-bottom: 116px;">





    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2">Progress start with us!</h2>

               <!--  <p class="mbr-text align-center mbr-white pb-3 mbr-fonts-style display-7">
                    Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                </p> -->

            </div>
        </div>
    </div>
</section>

<section class="testimonials1 cid-qwIAw93V2W" id="testimonials1-w" data-rv-view="259">




    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 align-center">
                <h2 class="pb-3 mbr-fonts-style display-2">
                    OUR TESTIMONY
                </h2>
                <!-- <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-5">
                    This theme is based on Bootstrap 4 - most powerful mobile first framework
                </h3> -->
            </div>
        </div>
    </div>

    <div class="container pt-3 mt-2">
        <div class="media-container-row">
            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                       <!--  <div class="testimonial-photo">
                            <img src="assets/images/face1.jpg" media-simple="true">
                        </div> -->
                        <p class="mbr-text mbr-fonts-style display-7">
                        First we thought it would't work but with time we realised that the technology has an impact to our company.
                        </p>
                    </div><br><br><br><br><br>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                             The home store(Rwanda)
                        </div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7">
                               <!-- Developer -->
                        </small>
                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        <!-- <div class="testimonial-photo">
                            <img src="assets/images/face2.jpg" media-simple="true">
                        </div> -->
                        <p class="mbr-text mbr-fonts-style display-7">
                           Glad Iridis Group created significant software that our company is using and we noticed and can trace its impacts.
                        </p>
                    </div><br><br><br><br>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                             River Trading Ltd (Rwanda)
                        </div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7">
                              <!--  Developer -->
                        </small>
                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        <!-- <div class="testimonial-photo">
                            <img src="assets/images/face3.jpg" media-simple="true">
                        </div> -->
                        <p class="mbr-text mbr-fonts-style display-7">

                        Thank you IHUZA.COM for amazing product and
                        services that you provided to our company.
                        </p><br><br><br><br><br>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                             Evidence co Ltd (Rwanda)
                        </div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7">
                               <!-- Developer -->
                        </small>
                    </div>
                </div>
            </div>






        </div>
    </div>
</section>

<section class="mbr-section form4 cid-qwvwG042yB" id="form4-u" data-rv-view="262">




    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJl-fYjiWk3BkRyAsdQaU2K_M" allowfullscreen=""></iframe></div>
            </div>
            <div class="col-md-6">

                <div>
                    <div class="icon-block pb-3">


                    </div>
                    <div class="icon-contacts pb-3">
                        <h5 class="align-left mbr-fonts-style display-7">STAY IN TOUCH</h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                            Tel: +250 788 455 454/ 789772610&nbsp;<br>
                            Email : support@ihuza.com
                        </p>
                    </div>
                </div>
                <div >
                    <div data-form-alert="" hidden="">Thanks for contacting us. we will get to u soon</div>
                    <form method="post" data-form-title="Mobirise Form"><!-- <input type="hidden" data-form-email="true" value="s7k+TO4jJMGiS3W1aYlr+wHFmK5W5d/9LXssktcZKZmWVQ7tZkdn6OaVYbb3o1rteX6b7gvPVL+XMs3AUEVVsLlBxR6RiYTuAokZd01yXDKiYQ2sKqjFi9oG1e7ndV60"> -->
                        <div class="row">
                            <div class="col-md-6 multi-horizontal" data-for="name">
                                <input type="text" class="form-control input" name="name" data-form-field="Name" placeholder="Your Full Name" required="" id="name-form4-u">
                            </div>

                            <div class="col-md-12" data-for="email">
                                <input type="text" class="form-control input" name="email" data-form-field="Email" placeholder="Email" required="" id="email-form4-u">
                            </div>
                            <div class="col-md-12" data-for="message">
                                <textarea class="form-control input" name="message" rows="3" data-form-field="Message" placeholder="Message" style="resize:none" id="message-form4-u"></textarea>
                            </div>
                            <div class="input-group-btn col-md-12" style="margin-top: 10px;"><button name="sendm" type="submit" class="btn btn-primary btn-form display-4">SEND MESSAGE</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer4 cid-qwviARUbYE" id="footer4-n" data-rv-view="265" style="background-color: #0437e9b3;">





    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-md-3 col-sm-4">
                <div class="mb-3 img-logo">
                    <a href="index.html">
                        <img src="assets/images/javascript-logo-1052x1052.png" alt="Mobirise" title="" media-simple="true">
                    </a>
                </div>
                <p class="mb-3 mbr-fonts-style foot-title display-7">IHUZA</p>
                <p class="mbr-text mbr-fonts-style display-7">
                    <a href="#" class="text-white">About Us</a><br>
                    <br><a href="#" class="text-white">Services</a><br>
                </p>
            </div>
            <div class="col-md-4 col-sm-8">
                <p class="mb-4 foot-title mbr-fonts-style display-7">
                    CONTACT
                </p>
                <p class="mbr-text mbr-fonts-style display-7">
                    Ihuza.com is one of Iridis Group Ltd a company that provide digital financial solution including inventory, ordering management system, automated marketing, etc.
                    <br>
                    IHUZA.COM (Iridis Group Ltd)
                    <br>
                    Tel : +250789772610
                    <br>
                    support@ihuza.com
                </p>
            </div>
            <div class="col-md-4 offset-md-1 col-sm-12">
                <p class="mb-4 foot-title mbr-fonts-style display-7">
                    SUBSCRIBE
                </p>
                <p class="mbr-text mbr-fonts-style display-7">
                    Get monthly updates and free resources.
                </p>
                <div class="mb-5">
                    <form method="post">
                        <div class="mbr-subscribe mbr-subscribe-dark input-group">
                            <input type="email" class="form-control" name="emails" required="" data-form-field="Email" id="email-footer4-n">
                            <span class="input-group-btn mx-2">
                            <button type="submit" name="subscri" class="btn btn-sm btn-primary display-4">Subscribe</button>
                            </span>
                        </div>
                    </form>
                </div>
                <p class="mb-4 mbr-fonts-style foot-title display-7">
                    CONNECT WITH US
                </p>
                <div class="social-list pl-0 mb-0">
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-googleplus socicon" media-simple="true"></span>
                            </a>
                        </div>

                </div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-12 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2017 IHUZA.COM (Iridis Group) - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  <script src="assets/js/home.js"></script>

  <input name="animation" type="hidden">
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59d86bc24854b82732ff4251/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  </body>
</html>
