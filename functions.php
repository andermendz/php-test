
<?php
require "./toberequired.php";

function repeter($a, $b)
{
    for ($i = 0; $i < $b; $i++) {
        print "<br>";
        print $a;
    }
}

repeter("this is a text", 4);


function hello()
{
    return "hello";
}

echo "<br>";
echo "<br>";
print hello() . " matthew";



?>
