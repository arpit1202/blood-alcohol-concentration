<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $weight = $_POST['weight'];
    $unit = $_POST['unit'];
    $gender = $_POST['gender'];
    $drinks = $_POST['drinks'];
    $alcohol_content = $_POST['alcohol_content'];
    $time_elapsed = $_POST['time_elapsed'];

    if ($unit == "kg") {
        $weight = $weight * 2.20462; 
    }

    //gender constant
    if ($gender == "male") {
        $gender_constant = 0.73;
    } else {
        $gender_constant = 0.66;
    }
    

    // total alcohol consumed in grams
   $alcohol_consumer = $drinks * $alcohol_content;

    
    $BAC = ($alcohol_consumer * 5.14 / $weight * $gender_constant) - (0.015 * $time_elapsed);


    session_start();
     $_SESSION['BAC']=$BAC;
     header("Location:/index.php");
}
?>

