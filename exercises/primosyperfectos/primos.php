<?php

function isPrime($i)
{

    if ($i == 2 || $i == 3 || $i == 5 || $i == 7 || $i == 11) {
        echo $i . " Es Primo <br>";
    } else if ($i % 2 != 0 && $i % 3 != 0 && $i % 5 !== 0 && $i % 7 !== 0 && $i % 11 !== 0) {
        echo $i . " Es Primo <br>";
    } else {
        echo $i . " No es Primo <br>";
    }
}

?>



<html>

<head>
    <title>Primos</title>
    <meta charset="utf-8">
</head>

<body>

    <form method="post">
        <h1> Elije un Posible Numero Primo</h1>
        <p> <label for="number"></label>
            <input type="text" name="number">
            <input type="submit">
        </p>

        <p>
            <?php isprime($_POST["number"]) ?> </p>



    </form>

</body>




</html>