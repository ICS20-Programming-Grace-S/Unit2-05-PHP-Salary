<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Grace S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Salary Pay in PHP</title>
  </head>
  <body>
    
		<!-- PHP echo to print the html to the page -->
    <?php 
			echo "<center><h1>Salary Pay, with PHP</h1></center>";
			echo "<center><h3> Please Enter Your Employment Information:</h3><center>";
		?>

		<!-- Buttons and Text Field -->
    <form method= "post">
      Hours: <input type="number" name="hours">
      <br><br>
      Rate $ <input type="number" name="rate">
      <input type= "submit" name="submit" value="Pay">
    </form>

        <!-- Calculations for Salary and amount government will take -->
        <?php
          if(isset($_POST["submit"])) {
            $hours = $_POST["hours"];
            $rate = $_POST["rate"];
            $tax= 0.1805;
            $salary = $hours*$rate;
            $salary = number_format($salary, 2);
            $salary_taxed = $salary*$tax;
            $salary_taxed = number_format($salary_taxed, 2);
            echo "<br><br><h3>Your salary is $" . $salary . " <br> The government  will take $" . $salary_taxed . " as income tax.</h3>";
          }
        ?>
      </input>
  </body>
</html>