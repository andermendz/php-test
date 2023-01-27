<?php

$oldguess = isset($_POST['guess']) ? $_POST['guess'] : "";
$mess = false;

if ($_POST['guess'] < 42) {
    $mess == "too low";
} else if ($_POST['guess'] > 42) {
    $mess = "too high bud";
} else if ($_POST['guess'] == 42) {
    $mess = "that right you got it";
}


?>

<html>

<head>
    <title>MVC</title>
</head>

</html>

<body style="font-family: Arial, Helvetica, sans-serif;">
    <h1>Guess the number</h1>

    <form method="post">

        <p> <label for="1"> Your Guess: </label>
            <input type="text" id="1" name="guess" value="<?= htmlentities($oldguess) ?>">
        </p>

        <input type="submit"> <br>

        <?php

        if ($mess !== false) {
            echo "<h1> $mess </h1>";
        }

        ?>

    </form>

    <?php
    print_r($_POST)
    ?>
</body>