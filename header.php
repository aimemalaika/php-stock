<?php
  session_start();
    if (!isset($_SESSION['username']) AND !isset($_SESSION['shopname'])) {
        header('Location: login');
    }
?>
<a name="ancre"></a>

<!-- CACHE -->
<div class="cache"></div>

<!-- HEADER -->

<div id="wrapper-header">
	<div id="main-header" class="object">
		<div class="logo" style="margin-top:7px;"><strong>Company name</stong></div>
        <div id="main_tip_search">
      <a class="ret" style="text-decoration: none;color:gray;" href="home">go to main menu</a>
		</div>
        <div id="stripes"></div>
    </div>
</div>

<!-- NAVBAR -->

<div id="wrapper-navbar">
    </div>
    <div id="wrapper-navbar" style="opacity: 1; height: 60px;">
		<div class="navbar object">
    		<div id="wrapper-sorting">
            <div id="wrapper-title-1">
            <div class="top-rated object">pppppp</div>
    		</div>
            </div>
            <div id="wrapper-bouton-icon">
              <div style="float:right" class="top-rated object"><a href="">Log out</a></div>
              <div style="float:right" class="top-rated object"><a href="">Add a team member</a></div>
              <div style="float:right" class="top-rated object"> hi name!</div>
			      </div>
    	</div>
    </div>
