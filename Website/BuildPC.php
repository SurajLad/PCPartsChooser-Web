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
			  <a class="mdl-navigation__link" href="">Branded PC's</a>
			  <a class="mdl-navigation__link" href="HowTo.html">How To Build PC</a>
              <a class="mdl-navigation__link" href="">FAQ</a>
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
          <a href="#features" class="mdl-layout__tab">Branded PC's</a>
          <a href="HowTo.html" class="mdl-layout__tab">How To Build PC</a>
          <a href="#features" class="mdl-layout__tab">FAQ</a>
          <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" id="add">
            <i class="material-icons" role="presentation">message</i>
            <span class="visuallyhidden">Add</span>
          </button>
        </div>
      </header>
	  <!--- Header Ends Here ---> 
      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">
            <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
              <h3>Build Your PC</h3>
                
             <p> Use A Following Menu To Select An Desired Product And It Will Automatically Added Into List Along With Its Pricing
        </p>
                <br>
            <div id="customers">
              <table id="Table1" class="mdl-data-table mdl-js-data-table mdl-data-table--selectable" align="center">
              <thead>
                <tr >
                  <th class="mdl-data-table__cell--non-numeric">Component</th>   
                    <th>Selection</th>
                    <th>Price</th>
                    <th>Best Buy</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">Processor</td>
                  <td>
                      <button onclick="getCPU()" id="showModal" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="ADD">
                         Choose a CPU
                       </button>
                      <dialog id="cpu" class="mdl-dialog">
                            <h4 class="mdl-dialog__title">CPU - Heart Of Computer System</h4>
                            <div class="mdl-dialog__content">
                              <h6 id="nm2">Select The The Best CPU For Your Build In Desired Price</h6>
                                <center>
                                <!-- PHP Code For Data Retrivel From DB -->
                                <?php
                                    $link = mysqli_connect("localhost", "root", "", "DNSComps");
                                    if($link === false){
                                        die("ERROR: Could not connect. " . mysqli_connect_error());
                                    }
                                    $sql = "SELECT * FROM CPU";
                                    if($result = mysqli_query($link, $sql)){
                                        if(mysqli_num_rows($result) > 0){
                                            echo "<table id=\"choose-address-table\" class=\"ui-widget ui-widget-content mdl-data-table mdl-js-data-table\">";
                                                echo "<tr class=\"ui-widget-header\">";
                                                    echo "<th></th>";
                                                    echo "<th>No.</th>";
                                                    echo "<th>Name</th>";
                                                    echo "<th>ClockSpeed</th>";
                                                    echo "<th>Core</th>";
                                                    echo "<th>Price</th>";
                                                    echo "<th>Selection</th>";
                                                echo "</tr>";
                                                while($row = mysqli_fetch_array($result)){
                                                echo "<tr>";
                                                    echo "<td>" . $row['id'] . "</td>";
                                                    echo "<td class=\"nm1\"> " . $row['Name'] . "</td>";
                                                    echo "<td>" . $row['ClockSpeed'] . "</td>";
                                                    echo "<td>" . $row['Core'] . "</td>";
                                                    echo "<td class=\"nm2\"> " . $row['price'] . "</td>";
                                                    echo "<td> <button type=\"button\" class=\"cpuadd mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" >ADD</button> ";
                                                    echo "</td>";
                                                    echo "<td style=\"display:none;\" class=\"link\">". $row['Link'] . "</td>";
                                                echo "</tr>";
                                            }
                                            echo "</table>";
                                            mysqli_free_result($result);
                                        } else{
                                            echo "No records matching your query were found.";
                                        }
                                    }else{
                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                    }
                                mysqli_close($link);
                                    ?>  
                                </center>
                            </div>
                            <div class="mdl-dialog__actions">
                              <button type="button" class="mdl-button close">DONE</button>
                            </div>
                      </dialog>
                      
                  </td>
                  <td id="pricecpu">₹0</td>
                    <td id="BuyCPU">
                        <a href="#" class="mdl-button" role="button" id="cpubuyid">Click Here</a>
                    </td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric">Motherboard</td>
                  <td>
                      <button onclick="getMOBO()" id="show-MOBO" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
                         Choose a Motherboard
                       </button>
                      <dialog id="mobo" class="mdl-dialog">
                            <h4 class="mdl-dialog__title">Motherboard - Where Everything Gets Connected</h4>
                            <div class="mdl-dialog__content">
                              <h6>Select The The Best Motherboard For Your Build In Desired Price</h6>
                                <center>
                                <!-- PHP Code For Data Retrivel From DB -->
                                <?php
                                    $link = mysqli_connect("localhost", "root", "", "DNSComps");
                                    if($link === false){
                                        die("ERROR: Could not connect. " . mysqli_connect_error());
                                    }
                                    $sql = "SELECT * FROM mobo";
                                    if($result = mysqli_query($link, $sql)){
                                        if(mysqli_num_rows($result) > 0){
                                            echo "<table id=\"choose-address-table\" class=\"ui-widget ui-widget-content mdl-data-table mdl-js-data-table\">";
                                                echo "<tr class=\"ui-widget-header\">";
                                                    echo "<th></th>";
                                                    echo "<th>No.</th>";
                                                    echo "<th>Name</th>";
                                                    echo "<th>Socket Type</th>";
                                                    echo "<th>Form Factor</th>";
                                                    echo "<th>price</th>";
                                                    echo "<th>Selection</th>";
                                                echo "</tr>";
                                                while($row = mysqli_fetch_array($result)){
                                                echo "<tr>";
                                                    echo "<td>" . $row['id'] . "</td>";
                                                    echo "<td class=\"nm1\"> " . $row['Name'] . "</td>";
                                                    echo "<td>" . $row['SocketType'] . "</td>";
                                                    echo "<td>" . $row['FormFactor'] . "</td>";
                                                    echo "<td class=\"nm2\"> " . $row['Price'] . "</td>";
                                                    echo "<td> <button type=\"button\" class=\"moboadd mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" >ADD</button> ";
                                                    echo "</td>";
                                                    echo "<td style=\"display:none;\" class=\"link\">". $row['Link'] . "</td>";
                                                echo "</tr>";
                                            }
                                            echo "</table>";
                                            mysqli_free_result($result);
                                        } else{
                                            echo "No records matching your query were found.";
                                        }
                                    }else{
                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                    }
                                mysqli_close($link);
                                    ?>  
                                </center>
                                <br>
                            </div>
                            <div class="mdl-dialog__actions">
                              <button type="button" class="mdl-button close">DONE</button>
                            </div>
                      </dialog>
                  </td>
                  <td id="pricemobo">₹0</td>
                    <td id="Buymobo">
                        <a href="#" class="mdl-button" role="button" id="mobobuyid">Click Here</a>
                    </td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric">Graphic Card </td>
                    <td>
                      <button onclick="getGPU()" id="show-GPU" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
                         Choose a GPU
                       </button>
                        <dialog id="GPU" class="mdl-dialog">
                            <h4 class="mdl-dialog__title">Graphics Card - Meant For Power !</h4>
                            <div class="mdl-dialog__content">
                              <h6>Select The The Best Graphics Card For Your Build In Desired Price</h6>
                                <center>
                                <!-- PHP Code For Data Retrivel From DB -->
                                <?php
                                    $link = mysqli_connect("localhost", "root", "", "DNSComps");
                                    if($link === false){
                                        die("ERROR: Could not connect. " . mysqli_connect_error());
                                    }
                                    $sql = "SELECT * FROM GPU";
                                    if($result = mysqli_query($link, $sql)){
                                        if(mysqli_num_rows($result) > 0){
                                            echo "<table id=\"choose-address-table\" class=\"ui-widget ui-widget-content mdl-data-table mdl-js-data-table\">";
                                                echo "<tr class=\"ui-widget-header\">";
                                                    echo "<th></th>";
                                                    echo "<th>No.</th>";
                                                    echo "<th>Name</th>";
                                                    echo "<th>Company</th>";
                                                    echo "<th>Memory</th>";
                                                    echo "<th>price</th>";
                                                    echo "<th>Selection</th>";
                                                echo "</tr>";
                                                while($row = mysqli_fetch_array($result)){
                                                echo "<tr>";
                                                    echo "<td>" . $row['id'] . "</td>";
                                                    echo "<td class=\"nm1\"> " . $row['Name'] . "</td>";
                                                    echo "<td>" . $row['Series'] . "</td>";
                                                    echo "<td>" . $row['Memory'] . "</td>";
                                                    echo "<td class=\"nm2\"> " . $row['Price'] . "</td>";
                                                    echo "<td> <button type=\"button\" class=\"gpuadd mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" >ADD</button> ";
                                                    echo "</td>";
                                                    echo "<td style=\"display:none;\" class=\"link\">". $row['Link'] . "</td>";
                                                echo "</tr>";
                                            }
                                            echo "</table>";
                                            mysqli_free_result($result);
                                        } else{
                                            echo "No records matching your query were found.";
                                        }
                                    }else{
                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                    }
                                mysqli_close($link);
                                    ?>  
                                </center>
                                <br>
                            </div>
                            <div class="mdl-dialog__actions">
                              <button type="button" class="mdl-button close">DONE</button>
                            </div>
                      </dialog>
                    </td>
                  <td id="pricegpu">₹0</td>
                    <td id="BuyGPU">
                         <a href="#" class="mdl-button" role="button" id="gpubuyid">Click Here</a>
                    </td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric">Memory</td>
                    <td>
                        <button onclick="getRAM()" id="show-RAM"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
                         Choose a Memory
                       </button>
                        <dialog id="RAM" class="mdl-dialog">
                            <h4 class="mdl-dialog__title">Memory - Program Reside Here </h4>
                            <div class="mdl-dialog__content">
                              <h6>Select The The Best RAM For Your Build In Desired Price</h6>
                                <center>
                                 <?php
                                    $link = mysqli_connect("localhost", "root", "", "DNSComps");
                                    if($link === false){
                                        die("ERROR: Could not connect. " . mysqli_connect_error());
                                    }
                                    $sql = "SELECT * FROM RAM";
                                    if($result = mysqli_query($link, $sql)){
                                        if(mysqli_num_rows($result) > 0){
                                            echo "<table id=\"choose-address-table\" class=\"ui-widget ui-widget-content mdl-data-table mdl-js-data-table\">";
                                                echo "<tr class=\"ui-widget-header\">";
                                                    echo "<th></th>";
                                                    echo "<th>No.</th>";
                                                    echo "<th>Name</th>";
                                                    echo "<th>Speed</th>";
                                                    echo "<th>Memory</th>";
                                                    echo "<th>price</th>";
                                                    echo "<th>Selection</th>";
                                                echo "</tr>";
                                                while($row = mysqli_fetch_array($result)){
                                                echo "<tr>";
                                                    echo "<td>" . $row['id'] . "</td>";
                                                    echo "<td class=\"nm1\"> " . $row['Name'] . "</td>";
                                                    echo "<td>" . $row['Speed'] . "</td>";
                                                    echo "<td>" . $row['Memory'] . "</td>";
                                                    echo "<td class=\"nm2\"> " . $row['Price'] . "</td>";
                                                    echo "<td> <button type=\"button\" class=\"ramadd mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" >ADD</button> ";
                                                    echo "</td>";
                                                    echo "<td style=\"display:none;\" class=\"link\">". $row['Link'] . "</td>";
                                                echo "</tr>";
                                            }
                                            echo "</table>";
                                            mysqli_free_result($result);
                                        } else{
                                            echo "No records matching your query were found.";
                                        }
                                    }else{
                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                    }
                                mysqli_close($link);
                                    ?>  
                                </center>
                                <br>
                            </div>
                            <div class="mdl-dialog__actions">
                              <button type="button" class="mdl-button close">DONE</button>
                            </div>
                      </dialog>
                    </td>
                  <td id="priceRAM">₹0</td>
                    <td id="BuyRAM">
                        <a href="#" class="mdl-button" role="button" id="rambuyid">Click Here</a>
                    </td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric">Case/Cabinet</td>
                    <td>
                        <button id="show-Case" onclick="getCase()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
                         Choose a Case/Cabinet
                       </button>
                         <dialog id="Case" class="mdl-dialog">
                            <h4 class="mdl-dialog__title">Cabinet - Where All the Glory is Represented :) </h4>
                            <div class="mdl-dialog__content">
                              <h6>Select The The Best Cabinet For Your Build In Desired Price</h6>
                                <center>
                                 <?php
                                    $link = mysqli_connect("localhost", "root", "", "DNSComps");
                                    if($link === false){
                                        die("ERROR: Could not connect. " . mysqli_connect_error());
                                    }
                                    $sql = "SELECT * FROM cabinet";
                                    if($result = mysqli_query($link, $sql)){
                                        if(mysqli_num_rows($result) > 0){
                                            echo "<table id=\"choose-address-table\" class=\"ui-widget ui-widget-content mdl-data-table mdl-js-data-table\">";
                                                echo "<tr class=\"ui-widget-header\">";
                                                    echo "<th></th>";
                                                    echo "<th>No.</th>";
                                                    echo "<th>Name</th>";
                                                    echo "<th>Type</th>";
                                                    echo "<th>price</th>";
                                                    echo "<th>Selection</th>";
                                                echo "</tr>";
                                                while($row = mysqli_fetch_array($result)){
                                                echo "<tr>";
                                                    echo "<td>" . $row['id'] . "</td>";
                                                    echo "<td class=\"nm1\"> " . $row['Name'] . "</td>";
                                                    echo "<td>" . $row['Type'] . "</td>";
                                                    echo "<td class=\"nm2\"> " . $row['Price'] . "</td>";
                                                    echo "<td> <button type=\"button\" class=\"caseadd mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" >ADD</button> ";
                                                    echo "</td>";
                                                    echo "<td style=\"display:none;\" class=\"link\">". $row['Link'] . "</td>";
                                                echo "</tr>";
                                            }
                                            echo "</table>";
                                            mysqli_free_result($result);
                                        } else{
                                            echo "No records matching your query were found.";
                                        }
                                    }else{
                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                    }
                                mysqli_close($link);
                                    ?>  
                                <br>
                                </center>
                            </div>
                            <div class="mdl-dialog__actions">
                              <button type="button" class="mdl-button close">DONE</button>
                            </div>
                      </dialog>
                    </td>
                  <td id="priceCase">₹0</td>
                    <td id="BuyCase">
                        <a href="#" class="mdl-button" role="button" id="casebuyid">Click Here</a>
                    </td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric">Storage</td>
                    <td>
                        <button id="show-HDD" onclick="getHDD()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
                         Choose a Storage
                       </button>
                        <dialog id="HDD" class="mdl-dialog">
                            <h4 class="mdl-dialog__title">HDD - Home For Data And Information :) </h4>
                            <div class="mdl-dialog__content">
                              <h6>Select The The Best HDD For Your Build In Desired Price</h6>
                                <center>
                                 <?php
                                    $link = mysqli_connect("localhost", "root", "", "DNSComps");
                                    if($link === false){
                                        die("ERROR: Could not connect. " . mysqli_connect_error());
                                    }
                                    $sql = "SELECT * FROM storage";
                                    if($result = mysqli_query($link, $sql)){
                                        if(mysqli_num_rows($result) > 0){
                                            echo "<table id=\"choose-address-table\" class=\"ui-widget ui-widget-content mdl-data-table mdl-js-data-table\">";
                                                echo "<tr class=\"ui-widget-header\">";
                                                    echo "<th></th>";
                                                    echo "<th>No.</th>";
                                                    echo "<th>Name</th>";
                                                    echo "<th>Capacity</th>";
                                                    echo "<th>price</th>";
                                                    echo "<th>Selection</th>";
                                                echo "</tr>";
                                                while($row = mysqli_fetch_array($result)){
                                                echo "<tr>";
                                                    echo "<td>" . $row['id'] . "</td>";
                                                    echo "<td class=\"nm1\"> " . $row['Name'] . "</td>";
                                                    echo "<td>" . $row['Capacity'] . "</td>";
                                                    echo "<td class=\"nm2\"> " . $row['Price'] . "</td>";
                                                    echo "<td> <button type=\"button\" class=\"hddadd mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" >ADD</button> ";
                                                    echo "</td>";
                                                    echo "<td style=\"display:none;\" class=\"link\">".$row['Link'] . "</td>";
                                                echo "</tr>";
                                            }
                                            echo "</table>";
                                            mysqli_free_result($result);
                                        } else{
                                            echo "No records matching your query were found.";
                                        }
                                    }else{
                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                    }
                                mysqli_close($link);
                                    ?>  
                                </center>
                                <br>
                            </div>
                            <div class="mdl-dialog__actions">
                              <button type="button" class="mdl-button close">DONE</button>
                            </div>
                      </dialog>
                    </td>
                  <td id="priceHDD">₹0</td>
                    <td id="BuyHDD">
                         <a href="#" class="mdl-button" role="button" id="hddbuyid">Click Here</a>
                    </td>
                </tr>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric">Power Supply</td>
                    <td>
                        <button id="show-psu" onclick="getPSU()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
                         Choose a PSU
                       </button>
                        <dialog id="PSU" class="mdl-dialog">
                            <h4 class="mdl-dialog__title">PSU - Without It Nothing Will Start :) </h4>
                            <div class="mdl-dialog__content">
                              <h6>Select The The Best PSU For Your Build In Desired Price</h6>
                                <center>
                                 <?php
                                    $link = mysqli_connect("localhost", "root", "", "DNSComps");
                                    if($link === false){
                                        die("ERROR: Could not connect. " . mysqli_connect_error());
                                    }
                                    $sql = "SELECT * FROM psu";
                                    if($result = mysqli_query($link, $sql)){
                                        if(mysqli_num_rows($result) > 0){
                                            echo "<table id=\"choose-address-table\" class=\"ui-widget ui-widget-content mdl-data-table mdl-js-data-table\">";
                                                echo "<tr class=\"ui-widget-header\">";
                                                    echo "<th></th>";
                                                    echo "<th>No.</th>";
                                                    echo "<th>Name</th>";
                                                    echo "<th>Eficiency</th>";
                                                    echo "<th>Watt</th>";
                                                    echo "<th>Price</th>";
                                                    echo "<th>Selection</th>";
                                                echo "</tr>";
                                                while($row = mysqli_fetch_array($result)){
                                                echo "<tr>";
                                                    echo "<td>" . $row['id'] . "</td>";
                                                    echo "<td class=\"nm1\"> " . $row['Name'] . "</td>";
                                                    echo "<td>" . $row['Eficiency'] . "</td>";
                                                    echo "<td>" . $row['Watt'] . "</td>";
                                                    echo "<td class=\"nm2\"> " . $row['Price'] . "</td>";
                                                    echo "<td> <button type=\"button\" class=\"psuadd mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored\" >ADD</button> ";
                                                    echo "</td>";
                                                    echo "<td style=\"display:none;\" class=\"link\">".$row['Link'] . "</td>";
                                                echo "</tr>";
                                            }
                                            echo "</table>";
                                            mysqli_free_result($result);
                                        } else{
                                            echo "No records matching your query were found.";
                                        }
                                    }else{
                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                    }
                                mysqli_close($link);
                                    ?>  
                                </center>
                                <br>
                            </div>
                            <div class="mdl-dialog__actions">
                              <button type="button" class="mdl-button close">DONE</button>
                            </div>
                      </dialog>
                    </td>
                  <td id="pricePSU">₹0</td>
                    <td id="BuyPSU">
                         <a href="#" class="mdl-button" role="button" id="PSUbuyid">Click Here</a>
                    </td>
                </tr>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">  </td>
                    <td><h5>Total</h5>
                    </td>
                    <td id="priceTotal">₹0</td>
                    <td id="saveAsPDF">
                        <button type="button" class="mdl-button" onclick="demoFromHTML()">Save As PDF (Soon)</button>
                    </td>
                </tr>
              </tbody>     
            </table>
                </div>
<br>
           <br>
            </div>
                
          </section>
		</div>
		  <!-- Footer Starts Here-->
        
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
    <button onclick="parent.location='Register.html'" id="viewsource" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Login/Register</button>
      <dialog id="register" class="mdl-dialog">
            <h4 class="mdl-dialog__title">Register Now -</h4>
            <div class="mdl-dialog__content">
                <center><img src="user1.jpg" width="20%" height="20%"></center><br>
                    <div class="form__article">
                            <h4>Personal data</h4>
                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="firstName" value=""/>
                                    <label class="mdl-textfield__label" for="firstName">First name</label>
                                </div>

                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="lastname" value=""/>
                                    <label class="mdl-textfield__label" for="lastname">Last name</label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="birthday" value=""/>
                                    <label class="mdl-textfield__label" for="birthday">Birthdate</label>
                                </div>

                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                                    <input class="mdl-textfield__input" value="Male" type="text" id="gender" readonly tabIndex="-1"/>
                                    <label class="mdl-textfield__label" for="gender">Gender</label>

                                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="gender">
                                        <li class="mdl-menu__item">Male</li>
                                        <li class="mdl-menu__item">Female</li>
                                    </ul>
                                </div>
                            </div>
                         <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                                <input class="mdl-textfield__input" type="text" id="email">
                                <label class="mdl-textfield__label" for="email">Email ID</label>
                            </div>
                             <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                                <input class="mdl-textfield__input" type="text" id="address">
                                <label class="mdl-textfield__label" for="address">Address</label>
                            </div>
                        </div>
                        <h4>Login data</h4>
                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="firstName" value=""/>
                                    <label class="mdl-textfield__label" for="firstName">User name</label>
                                </div>

                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="lastname" value=""/>
                                    <label class="mdl-textfield__label" for="lastname">Password</label>
                                </div>
                            </div>
                        <center><button onclick="" id="register2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">Register</button>
                        <button type="button" class="mdl-button close">Cancel</button></center>
                    </div>
                <br>
            </div>
      </dialog>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        
  </body>
    <script src="PCTool.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="tableExport.js"></script>
        <script type="text/javascript" src="jquery.base64.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>
            
        <script type="text/javascript" src="jspdf/libs/sprintf.js"></script>
        <script type="text/javascript" src="jspdf/jspdf.js"></script>
        <script type="text/javascript" src="jspdf/libs/base64.js"></script>
    <script type="text/javascript" src="jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.2/jspdf.plugin.autotable.js"></script>

    <script>
        var $Total=0;
        $(".cpuadd").click(function() {
            var $row = $(this).closest("tr");     // Find the row
            var $text = $row.find(".nm1").text(); // Find the text
            var $text3 = $row.find(".link").text();
            var $Price = $row.find(".nm2").text();
            
            $Total = parseInt($Total) + parseInt($Price);
            
            document.getElementById("showModal").innerHTML = $text;
            document.getElementById("pricecpu").innerHTML = "₹"+$Price; 
            document.getElementById("priceTotal").innerHTML = "₹"+ $Total; 
            
            var a = document.getElementById('cpubuyid'); //or grab Link And Paste in Click Here
            a.setAttribute("href", $text3);
        });
        $(".moboadd").click(function() {
            var $row = $(this).closest("tr");     // Find the row
            var $text = $row.find(".nm1").text(); // Find the text
            var $Price = $row.find(".nm2").text();
            var $text3 = $row.find(".link").text();
            
            $Total = parseInt($Total) + parseInt($Price);
            
            document.getElementById("show-MOBO").innerHTML = $text;
            document.getElementById("pricemobo").innerHTML = "₹"+$Price; 
            document.getElementById("priceTotal").innerHTML = "₹"+ $Total; 
            
            var a = document.getElementById('mobobuyid'); //or grab Link And Paste in Click Here
            a.setAttribute("href", $text3);
        });
        $(".gpuadd").click(function() {
            var $row = $(this).closest("tr");     // Find the row
            var $text = $row.find(".nm1").text(); // Find the text
            var $Price = $row.find(".nm2").text();
            var $text3 = $row.find(".link").text();
            var $Price = $row.find(".nm2").text();
            
            $Total = parseInt($Total) + parseInt($Price);
            
            document.getElementById("show-GPU").innerHTML = $text;
            document.getElementById("pricegpu").innerHTML = "₹"+$Price; 
            document.getElementById("priceTotal").innerHTML = "₹"+$Total;
            
            var a = document.getElementById('gpubuyid'); //or grab Link And Paste in Click Here
            a.setAttribute("href", $text3);
        });
        $(".ramadd").click(function() {
            var $row = $(this).closest("tr");     // Find the row
            var $text = $row.find(".nm1").text(); // Find the text
            var $Price = $row.find(".nm2").text();
            var $text3 = $row.find(".link").text();
            
            $Total = parseInt($Total) + parseInt($Price);
            
            document.getElementById("show-RAM").innerHTML = $text;
            document.getElementById("priceRAM").innerHTML = "₹"+$Price; 
            document.getElementById("priceTotal").innerHTML = "₹"+ $Total;
            
            var a = document.getElementById('rambuyid'); //or grab Link And Paste in Click Here
            a.setAttribute("href", $text3);
        });
         $(".caseadd").click(function() {
            var $row = $(this).closest("tr");     // Find the row
            var $text = $row.find(".nm1").text(); // Find the text
            var $Price = $row.find(".nm2").text();
            var $text3 = $row.find(".link").text();
              
            $Total = parseInt($Total) + parseInt($Price);
             
            document.getElementById("show-Case").innerHTML = $text;
            document.getElementById("priceCase").innerHTML = "₹"+$Price; 
            document.getElementById("priceTotal").innerHTML = "₹"+ $Total;
             
            var a = document.getElementById('casebuyid'); //or grab Link And Paste in Click Here
            a.setAttribute("href", $text3);
        });
        $(".hddadd").click(function() {
            var $row = $(this).closest("tr");     // Find the row
            var $text = $row.find(".nm1").text(); // Find the text
            var $Price = $row.find(".nm2").text();
            var $text3 = $row.find(".link").text();
            
            $Total = parseInt($Total) + parseInt($Price);
            
            document.getElementById("show-HDD").innerHTML = $text;
            document.getElementById("priceHDD").innerHTML = "₹"+$Price; 
            document.getElementById("priceTotal").innerHTML = "₹"+ $Total;
            
            var a = document.getElementById('hddbuyid'); //or grab Link And Paste in Click Here
            a.setAttribute("href", $text3);
        });
         $(".psuadd").click(function() {
            var $row = $(this).closest("tr");     // Find the row
            var $text = $row.find(".nm1").text(); // Find the text
            var $Price = $row.find(".nm2").text();
            var $text3 = $row.find(".link").text();
             
            $Total = parseInt($Total) + parseInt($Price);
             
            document.getElementById("show-psu").innerHTML = $text;
            document.getElementById("pricePSU").innerHTML = "₹"+$Price;
            document.getElementById("priceTotal").innerHTML = "₹"+ $Total;
             
            var a = document.getElementById('PSUbuyid'); //or grab Link And Paste in Click Here
            a.setAttribute("href", $text3);
        });
</script>
</html>
