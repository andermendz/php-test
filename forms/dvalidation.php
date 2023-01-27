<html>
<head>
<title>guess</title>
</head>
<body>
    <h1>Welcome Bud</h1>
    <p>

    <?php
    if ( ! isset($_GET["person"]) ){
        echo "dont exist";
    } else if ( strlen($_GET["person"] < 1) ){
        echo "too short";
    } else if ( is_numeric($_GET["person"]) ){
        echo "guess is not a number";
    } else if ( $_GET["person"] == "ander"){
        echo "congratulations";
    } else {
        echo "nanais";
        
    }
    


        ?>
    </p>

</body>

</html>