<?php
$_SESSION['login_user'] = "Guest";
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>DNS Computers</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="logo.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/logo.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #viewsource {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
    
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
  <!-- Header Starts Here--->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	  <div class="mdl-layout__drawer">
		<span class="mdl-layout-title">Menu</span>
			<nav class="mdl-navigation">
			  <a class="mdl-navigation__link" href="Home.php">Home</a>
			  <a class="mdl-navigation__link" href="RecommandedPC.html">Recommanded Rigs</a>
			  <a class="mdl-navigation__link" href="HowTo.html">How To Build PC</a>
              <a class="mdl-navigation__link" href="FAQ.html">FAQ</a>
			</nav>
	  </div>
	  
	   <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
		<div class="mdl-layout--large-screen-only mdl-layout__header-row"></div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
			<h2>DNS Computers</h2>
        </div>
		
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">		
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="Home.php" class="mdl-layout__tab is-active">Home</a>
          <a href="RecommandedPC.html" class="mdl-layout__tab">Recommanded Rigs</a>
          <a href="HowTo.html" class="mdl-layout__tab">How To Build PC</a>
          <a href="FAQ.html" class="mdl-layout__tab">FAQ</a>
          <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" id="add" onclick="parent.location='Contactus.html'">
            <i class="material-icons" role="presentation">message</i>
            <span class="visuallyhidden">Add</span>
          </button>
        </div>
      </header>
	  <!--- Header Ends Here ---> 
      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">
		<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>Want To Assemble New Computer System ??</h4>
				<center><img src="BuildPC.png" width="60%" height="40%"></center>
                <br>
                  <p class="mdl-card__supporting-text">Want to Assemble a Computer System In Your Desired Budget ?? Confused About Different Components and Their Pricing  ? Wanted to Get An Appoximate Pricing Before Actual Buying ? Here is Best Tool For it</p>
				</div>
              <div class="mdl-card__actions">
                <a href="BuildPC.php" class="mdl-button">Configure Now</a>
              </div>
            </div>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn3">
              <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn3">
              <li class="mdl-menu__item">Close</li>
            </ul>
        </section>
            
		<!-- Section Blog Posts-->
        
        <section class="section--center mdl-grid mdl-grid--no-spacing">
            <h4>Blog Posts</h4>
            <!-- Grid Layout Div-->
			<div class="mdl-grid">
			<!-- Grid 1 Starts -->
			<div class="mdl-cell mdl-cell--5-col">
				<div class="demo-card-wide mdl-card mdl-shadow--2dp">
				    <div class="mdl-card__title">
						<h4 class="mdl-card__title-text"> Intel 8th Gen CPUs Are Coming In October</h4>
					</div>
                    <center><img src="Post1.jpg" width="100%" height="100%"></center>
					
					<div class="mdl-card__actions mdl-card--border">
						<center><a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="Post1.html">
                                Read More</a>
                        </center>
					</div>
					<div class="mdl-card__menu">
						<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
							<i class="material-icons">share</i>
						</button>
					 </div>
				</div>
			</div>
		  	<!-- Grid 1 Ends -->
		   <!-- Grid 2 Starts -->
		   <div class="mdl-cell mdl-cell--5-col">
			<div class="demo-card-wide mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
						<h4 class="mdl-card__title-text">AMD Ryzen ThreadRipper 1900X Spotted in India</h4>
					</div>
                    <center><img src="Post2.jpg" width="90%" height="100%"></center>
					
					<div class="mdl-card__actions mdl-card--border">
						<center><a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="Post2.html">
                            Read More</a></center>
					</div>
					<div class="mdl-card__menu">
						<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
							<i class="material-icons">share</i>
						</button>
					 </div>
				</div>
			 </div>
			 <!-- Grid 2 Ends -->
			<br>
			<!-- Grid 3 Starts -->
			<div class="mdl-cell mdl-cell--5-col">
				<div class="demo-card-wide mdl-card mdl-shadow--2dp">
					<div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">[Tutorial] Learn How To Assemble PC ?</h2>
					</div>
                    <center><img src="Post3.png" width="90%" height="100%"></center>
					<div class="mdl-card__actions mdl-card--border">
						<center><a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="HowTo.html">
                            Read More</a></center>
					</div>
					<div class="mdl-card__menu">
						<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
							<i class="material-icons">share</i>
						</button>
					 </div>
				</div>
			</div>
		  	<!-- Grid 1 Ends -->
		   <!-- Grid 2 Starts -->
		   <div class="mdl-cell mdl-cell--5-col">
			<div class="demo-card-wide mdl-card mdl-shadow--2dp">
					<div class="mdl-card__title">
						<h4 class="mdl-card__title-text">Intel Discontinuing Production of 6th Gen Skylake CPUs</h4>
					</div>
                    <center><img src="post4.jpg" width="80%" height="0%"></center>
					<div class="mdl-card__actions mdl-card--border">
						<center><a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="Post4.html">Read More</a></center>
					</div>
					<div class="mdl-card__menu">
						<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
							<i class="material-icons">share</i>
						</button>
					 </div>
				</div>
			 </div>
			 <!-- Grid 2 Ends -->
			 </div>
          </section>
		 
		  <!-- Section Top- Builds -->
          <section class="section--footer mdl-color--white mdl-grid">
            <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
			 <center><img src="CS_icon40.png" width="50%" height="50%"></center>	
            </div>
            <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
               <h5><a href= "#" onclick="Get40KPC();" id="abc">40K Console Killer Build </a></h5>
              Want An Entry Level Gaming PC ? Which Will Run All AAA Titles at Medium-High Graphics at Decent FPS ? Then This 40K Console Killer Build is Perfect You :) 
                <dialog id="40KP" class="mdl-dialog">
                    <h5 class="mdl-dialog__title">40K Console Killer Build :- </h5>
                        <div class="mdl-dialog__content">
                            <center>
                              <table class="mdl-data-table mdl-js-data-table">
                                  <thead>
                                    <tr>
                                      <th class="mdl-data-table__cell--non-numeric">Component</th>
                                      <th class="mdl-data-table__cell--non-numeric">Selection</th>
                                      <th class="mdl-data-table__cell--non-numeric">Price?</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                       <tr>
                                      <td class="mdl-data-table__cell--non-numeric">CPU</td>
                                      <td class="mdl-data-table__cell--non-numeric">Intel Pentium 3.7GHz LGA 1151 G4560.</td>
                                      <td class="mdl-data-table__cell--non-numeric">5500</td>
                                    </tr>
                                      <tr>
                                      <td class="mdl-data-table__cell--non-numeric">GPU</td>
                                      <td class="mdl-data-table__cell--non-numeric">Zotac GTX 1050.</td>
                                      <td class="mdl-data-table__cell--non-numeric">8600</td>
                                    </tr>
                                      <tr>
                                      <td class="mdl-data-table__cell--non-numeric">MotherBoard</td>
                                      <td class="mdl-data-table__cell--non-numeric">Gigabyte H110MS2 LGA1151</td>
                                      <td class="mdl-data-table__cell--non-numeric">4200</td>
                                    </tr>
                                    <tr>
                                      <td class="mdl-data-table__cell--non-numeric">Cabinet</td>
                                      <td class="mdl-data-table__cell--non-numeric">Antec ASK-4000B-U3 Mid Tower Cabinet.</td>
                                      <td class="mdl-data-table__cell--non-numeric">1900</td>
                                    </tr>
                                    <tr>
                                      <td class="mdl-data-table__cell--non-numeric">Monitor</td>
                                      <td class="mdl-data-table__cell--non-numeric">LG 22MP8VQP 22" inch LED Backlit FHD Monitor.</td>
                                      <td class="mdl-data-table__cell--non-numeric">9600</td>
                                    </tr>
                                    <tr>
                                      <td class="mdl-data-table__cell--non-numeric">RAM</td>
                                      <td class="mdl-data-table__cell--non-numeric">Transcend DDR4-2133Mhz 4 GB PC DRAM.</td>
                                      <td class="mdl-data-table__cell--non-numeric">2261</td>
                                    </tr>
                                    <tr>
                                      <td class="mdl-data-table__cell--non-numeric">HDD</td>
                                      <td class="mdl-data-table__cell--non-numeric">Seagate Barracuda 1 TB Desktop Internal Hard Drive.</td>
                                      <td class="mdl-data-table__cell--non-numeric">3900</td>
                                    </tr>
                                      <tr>
                                      <td class="mdl-data-table__cell--non-numeric">PSU</td>
                                      <td class="mdl-data-table__cell--non-numeric">Corsair VS450</td>
                                      <td class="mdl-data-table__cell--non-numeric">2100</td>
                                    </tr>
                                      <tr>
                                      <td class="mdl-data-table__cell--non-numeric">Total</td>
                                      <td class="mdl-data-table__cell--non-numeric"></td>
                                      <td class="mdl-data-table__cell--non-numeric">40000</td>
                                    </tr> 
                                  </tbody>
                                </table>
                            </center>
                            <br>
                        </div>
                    <div class="mdl-dialog__actions">
                      <button type="button" class="mdl-button close">Cool</button>
                    </div>
                </dialog>
            </div>
            <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
              <center><img src="CS_icon50.png" width="50%" height="50%"></center>
            </div>
            <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
              <h5><a href= "#" onclick="Get50KPC();" id="xyz">50K Productivity Build </a></h5>
              Need A PC For To Do All Your Productivity Tasks Along With Casual Gaming ? Here is Best Auto Rigged 50K Build For You :)
            </div>
              <dialog id="50KP" class="mdl-dialog">
                    <h5 class="mdl-dialog__title">50K Productivity Build :- </h5>
                        <div class="mdl-dialog__content">
                            <center>
                              <table class="mdl-data-table mdl-js-data-table">
                                  <thead>
                                    <tr>
                                      <th class="mdl-data-table__cell--non-numeric">Component</th>
                                      <th class="mdl-data-table__cell--non-numeric">Selection</th>
                                      <th class="mdl-data-table__cell--non-numeric">Price?</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                       <tr>
                                      <td class="mdl-data-table__cell--non-numeric">CPU</td>
                                      <td class="mdl-data-table__cell--non-numeric">Intel Pentium 3.7GHz LGA 1151 G4560.</td>
                                      <td class="mdl-data-table__cell--non-numeric">5500</td>
                                    </tr>
                                      <tr>
                                      <td class="mdl-data-table__cell--non-numeric">GPU</td>
                                      <td class="mdl-data-table__cell--non-numeric">Zotac GTX 1050.</td>
                                      <td class="mdl-data-table__cell--non-numeric">8600</td>
                                    </tr>
                                      <tr>
                                      <td class="mdl-data-table__cell--non-numeric">MotherBoard</td>
                                      <td class="mdl-data-table__cell--non-numeric">Gigabyte H110MS2 LGA1151</td>
                                      <td class="mdl-data-table__cell--non-numeric">4200</td>
                                    </tr>
                                    <tr>
                                      <td class="mdl-data-table__cell--non-numeric">Cabinet</td>
                                      <td class="mdl-data-table__cell--non-numeric">Antec ASK-4000B-U3 Mid Tower Cabinet.</td>
                                      <td class="mdl-data-table__cell--non-numeric">1900</td>
                                    </tr>
                                    <tr>
                                      <td class="mdl-data-table__cell--non-numeric">Monitor</td>
                                      <td class="mdl-data-table__cell--non-numeric">LG 22MP8VQP 22" inch LED Backlit FHD Monitor.</td>
                                      <td class="mdl-data-table__cell--non-numeric">9600</td>
                                    </tr>
                                    <tr>
                                      <td class="mdl-data-table__cell--non-numeric">RAM</td>
                                      <td class="mdl-data-table__cell--non-numeric">Transcend DDR4-2133Mhz 4 GB PC DRAM.</td>
                                      <td class="mdl-data-table__cell--non-numeric">2261</td>
                                    </tr>
                                    <tr>
                                      <td class="mdl-data-table__cell--non-numeric">HDD</td>
                                      <td class="mdl-data-table__cell--non-numeric">Seagate Barracuda 1 TB Desktop Internal Hard Drive.</td>
                                      <td class="mdl-data-table__cell--non-numeric">3900</td>
                                    </tr>
                                      <tr>
                                      <td class="mdl-data-table__cell--non-numeric">PSU</td>
                                      <td class="mdl-data-table__cell--non-numeric">Corsair VS450</td>
                                      <td class="mdl-data-table__cell--non-numeric">2100</td>
                                    </tr>
                                      <tr>
                                      <td class="mdl-data-table__cell--non-numeric">Total</td>
                                      <td class="mdl-data-table__cell--non-numeric"></td>
                                      <td class="mdl-data-table__cell--non-numeric">40000</td>
                                    </tr> 
                                  </tbody>
                                </table>
                            </center>
                            <br>
                        </div>
                    <div class="mdl-dialog__actions">
                      <button type="button" class="mdl-button close">Cool</button>
                    </div>
                </dialog>
          </section>
		  <!-- Footer Starts Here-->
        </div>
          
          <div class="mdl-layout__tab-panel" id="features2">
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
              <h3>Yet To be Added</h3>
                <h2>Under Construction</h2>
             
            </div>
          </section>
          </div>
          <div class="mdl-layout__tab-panel" id="features3">
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
              <h3>Yet To be Added,Yes This One too :3</h3>
                <h2>Under Construction ....</h2> 
            </div>
          </section>
          </div>
          <div class="mdl-layout__tab-panel" id="features4">
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
              <h3>Sorry But This is Also </h3>
                <h2>Soon Will be All Fixed</h2> 
                <br>
                 <h3>Under Construction </h3> 
            </div>
          </section>
          </div>
        <footer class="mdl-mega-footer">
          <div class="mdl-mega-footer--middle-section">
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Features</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Terms</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Details</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">Spec</a></li>
                <li><a href="#">Tools</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">FAQ</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">Questions</a></li>
                <li><a href="#">Answers</a></li>
              </ul>
            </div>
          </div>
          <div class="mdl-mega-footer--bottom-section">
            <div class="mdl-logo">
             Copyright © 2017 - DNSComputers 
            </div>
            <ul class="mdl-mega-footer--link-list">
              <li><a href="Home.php">Home</a></li>
              <li><a href="#">Disclaimer</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
      <!-- Register/Login Button-->
    <button onclick="parent.location='Register.html'" id="viewsource" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Hello <?php echo $_SESSION["login_user"];?></button> 
      <!-- End Register/Login Button-->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="PCTool.js"></script>
    <script>
    function Get40KPC()
    {
    var dialog = document.getElementById('40KP');
    var showDialogButton = document.querySelector('#abc');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
      dialog.showModal();
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
    }
    function Get50KPC()
    {
    var dialog = document.getElementById('50KP');
    var showDialogButton = document.querySelector('#xyz');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
      dialog.showModal();
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
    }
      </script>
  </body>
</html>
