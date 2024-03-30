<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
    
    <?php
    $diameter = "";
    if ( isset( $_POST['diameter'] ) ){
      $diameter = $_POST['diameter'];
    }
    try {
      settype($diameter, "float");
      $radius = diameter/2;
      $area = M_PI*radius**2;
      $circumference = M_PI*diameter;
    }
    catch (exception $letter) {

    }
    ?>
    
  </body>
  
</html>
