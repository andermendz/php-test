<?php
$a = 10;
$b = 100;
$c = $a + $b;

$d = "10";


echo "the value of a + b is equal to $c". " where a is = $a and b is = $b \n";

echo 10 + $d . " where one of the values is a string";

$m = $a > $b ? " a is bigger than b" : "a is smaller than b";

echo $m

?>

<br>

<?php
$q = " this is the original quote";
echo $q;
$q .= " this was added";

echo $q;

?>
<br>
<br>


<?php 

$text = "this is a text";

echo "the word te in in the variable text at  " . strpos($text,"a");

if (strpos($text, "th") == false)
    echo "th  is at " . strpos($text,"th");

?>

<br>
<br>

<php ?></php>