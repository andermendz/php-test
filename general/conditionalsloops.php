<h1> if else else if</h1>
<?php


$n = "";
// if else else if

if ($n > 50) {
    print "greater than 50";
} else if ($n < 50) {
    print "is shorter than 50";
} else {
    print "wtf dude";
}

?>

<br>
<br>

<h1>While</h1>

<?php
// while

$e = 0;

while ($e <= 10) {

    print "the value of e is $e \n";
    $e++;
}
?>

<br>
<br>

<h1> FOR </h1>
<h2>break</h2>
<?php

for ($i = 1; $i <= 10; $i++) {


    echo " $i times 5 : " . $i * 5;
    echo "<br>";
    
    if ($i == 5)
        break;

}


?>
<br>
<br>

<h1>continue</h1>

<?php
for ($v = 1; $v <= 100; $v++) {
    if (($v % 2) == 0) continue;

    echo "the number $v is not prime";
    echo "<br>";
}
?>