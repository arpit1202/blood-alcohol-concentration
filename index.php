<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Alcohol Calculator</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="container">
    <h2>Blood Alcohol Concentration Calculator</h2>
    <form action="alcoholcalculate.php" method="POST">
      <label for="weight">Weight:</label>
      <input type="number" id="weight" name="weight" placeholder="Enter your weight" required>

      <label for="unit">Weight Unit:</label>
      <select id="unit" name="unit" required>
        <option value="kg">Kilograms (kg)</option>
        <option value="lbs">Pounds (lbs)</option>
      </select>

      <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>

      <label for="drinks">Number of Drinks:</label>
      <input type="number" id="drinks" name="drinks" placeholder="Enter number of drinks" required>

      <label for="alcohol_content">Alcohol Content per Drink (grams):</label>
      <input type="number" id="alcohol_content" name="alcohol_content" placeholder="Enter alcohol content per drink"
        required>

      <label for="time_elapsed">Time Elapsed (hours):</label>
      <input type="number" id="time_elapsed" name="time_elapsed" placeholder="Enter time elapsed since drinking started"
        required>

      <button type="submit">Calculate BAC</button>
    </form>


    <div class="output-wrapper">
      <div> Your Blood Concentration is: <?php 
      $BAC = $_SESSION['BAC'];
      echo $BAC;
      
      ?><span></div>
      <div><?php if($BAC<0.08){
        echo "Safe to Drive";
       
    }else{
       echo "Unsafe to Drive";
    }?></span></div>
    </div>
  </div>

</body>

</html>