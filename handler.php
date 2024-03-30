<!DOCTYPE html>
<html>
  <head>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-light_green.min.css" />
    <script src = "https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Results</title>
  </head>

  <body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class = "mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class = "mdl-layout__header">
          <div class = "mdl-layout__header-row">
            <!-- Title -->
            <span class = "mdl-layout-title">Results</span>
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
    
    settype($diameter, "float");
    if ($diameter >= 0)
    {
    $radius = $diameter/2;
    $area = M_PI*radius**2;
    $circumference = M_PI*$diameter;
    echo "The area of the circle is:";
    echo $area;
    echo "The circumference of the circle is:";
    echo $circumference;
    }
    else {
      echo "Error!";
      echo "The diameter you input was either negative or not a number.";
      echo "Try again and make sure to only include positive numbers and not to include letters or units.";
    }
    
  
      #echo "Error!";
      #echo "The diameter you input was either negative or not a number.";
      #echo "Try again and make sure to only include positive numbers and not to include letters or units.";

    ?>
    </div>
  </body>
  
</html>
