<?php

function isPerfect($i)
{

    $sum = 0;
    for ($k = 1; $k < $i; $k++) {

        if ($i % $k == 0) {
            $sum += $k;
        }
    }

    if ($i == $sum) {
        echo $i . " Es Perfecto ";
    } else {
        echo $i . " No es perfecto";
    }
}






?>



<html>

<head>
    <title>Perfectos
    </title>
    <meta charset="utf-8">
</head>

<body>

    <form method="get">
        <h1> Elije un Posible Numero Perfecto</h1>
        <p> <label for="number"></label>
            <input type="text" name="number">
            <input type="submit">
        </p>
  
        
        <p> <?php isPerfect($_GET["number"]) ?> </p>



    </form>

</body>




</html>