<?php 
echo "<h1>isset</h1>"; 
echo "<h2> Return true if a key is on an array</h1>";

$za = array();
$za["name"] ="ander";
$za["type"] ="human";
$za["description"] ="a human male";
$za["interest"] = "coding";


echo isset($za["description"]) ? "desc is on za": "is not im sorry bud"; 
echo "<br>";
echo isset($za["name"]) ? "name is on az and is ". $za["name"]: "is not sorry bud";

echo "<h1> Count </h1>";

echo count($za) . " is the amount of items of za";

echo "<h1> sort by key - ksort</h1>";
ksort($za);

print_r($za);

echo "<h1> sort by values - asort</h1>";
asort($za);

print_r($za);


echo "<h1> explode - exploding arrays </h1>";

$text = "this text will be divided into several pieces of elements";
$chop = explode(" ", $text);

echo $text;
echo "<br> <h1> see?</h1>";
print_r($chop) ;


?>
