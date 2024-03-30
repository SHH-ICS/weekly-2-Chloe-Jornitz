<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Results</title>
  </head>

  <body>
    
    <?php
    $diameter = "";
    if ( isset( $_POST['diameter'] ) ){
      $diameter = $_POST['diameter'];
    }
    try {
      settype($diameter, "float");
      if ($diameter >= 0)
      {
      $radius = diameter/2;
      $area = M_PI*radius**2;
      $circumference = M_PI*diameter;
      echo "Results";
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
    }
    catch (exception $letter) {
      echo "Error!";
      echo "The diameter you input was either negative or not a number.";
      echo "Try again and make sure to only include positive numbers and not to include letters or units.";
    }
    ?>
    
  </body>
  
</html>
