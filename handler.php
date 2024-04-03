<!DOCTYPE html>
<html>
  <head>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-light_green.min.css" />
    <script src = "https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <title>Results</title>
  </head>

  <body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class = "mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class = "mdl-layout__header">
          <div class = "mdl-layout__header-row">
            <!-- Title -->
            <span class = "mdl-layout-title">Circle Area and Circumference Calculator</span>
        </header>

        <div class = "mdl-layout__drawer">
          <span class = "mdl-layout-title">Circle Area and Circumference Calculator</span>
          <nav class = "mdl-navigation">
            <a class = "mdl-navigation__link" href = "index.html">Welcome Page</a>
          </nav>
        </div>
    <?php
    $diameter = "";
    if ( isset( $_POST['diameter'] ) ){
      $diameter = $_POST['diameter'];
    }  
    if ($diameter >= 0 && is_numeric($diameter))
    {
    $radius = $diameter/2;
    $area = M_PI*$radius**2;
    $circumference = M_PI*$diameter;
    echo "<h1><center><font color='darkgreen'> Results: </h1></center></font color='darkgreen'>";
    echo "<h3><center><font color='green'> The area of the circle is: <br></font color='green'><font color='limegreen'>". $area . "</font color='limegreen'></center></h3>";
    echo "<br>";
    echo "<h3><center><font color='green'> The circumference of the circle is: <br></font color='green'><font color='limegreen'>". $circumference . "</font color='limegreen'></center></h3>";
    echo "<br>";
    }
    else {
      echo "<h1><center><font color='darkgreen'> Error! </font color='darkgreen'></center></h1>";
      echo "<h3><center><font color='green'> The diameter you input was either negative or not a number. </font color='limegreen'></center></h3>";
      echo "<h3><center><font color='green'> Make sure to only include positive numbers and not to include letters or units. </font color='limegreen'></center></h3>";
      echo "<br>";
    }
    ?>
    <a href=index.html>
      <center><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Try Again</button></center>
    </a>
    </div>
  </body>  
</html>
