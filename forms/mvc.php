<?php
// MVP

$value = 1001;
$message = false;

    if($value == 0){
        $message = "value is 0";
    } else if ($value == 1){
        $message = "value is 1";
    } else if ($value > 1 && $value < 100) {
        $message = "values is more than one";
    } else if ($value > 100){
    $message = "value is more than 100 wow";
    }

?>

<h1>  MV test with a value  </h1>

<p> hello this is a example of application of Model View Controller</p>

<h2>the value of the variable $value is...</h2>

<?php 
    
    echo $message;
?>

