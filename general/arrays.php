<h1> Arrays</h1>

<?php

$s = ["First", "Second"];

// key value
$stuff = array("name" => "Anderson", "age" => "20", "lastname" => "Mendoza");

echo "the fist element of the array is $s[0] and the second is $s[1]";

?>

<h1> key / value</h1>
<br>
<?php 

echo $stuff["name"];
echo "<br>";
print_r($stuff);
?>

<br>

<h1>var_dump(</h1>
<?php 
$stuff = false;

var_dump($stuff);


?>
<h1>add to an array</h1>

<br>
<?php
$stuff[] = "added 1";
$stuff[] = "added 2";

print_r($stuff);


?>

<h1>For each</h1>

<?php  

$arr = array("name" => "Ander", "last_name" => "Mendoza", "age" => "20");

foreach($arr as $key => $value){
    echo "<br>";
    echo "key is $key and value is $value";
}

echo "<h1>For each without key value</h1>";

$ara = array("Ander", "Mendoza","20");

foreach($ara as $key => $value){
    echo "<br>";
    echo "key is $key and value is $value";
}

?>

<h1>For with array</h1>

<?php

$arra = array("one", "two", "three", "four", "five", "six", "seven");

for ($i = 0; $i < count($arra); $i++) {
    echo "<br>";
    echo $arra[$i];
}
;


?>
<br>
<h1> arrays of arrays</h1>
<br>
<?php 

$arrs = array("first" => array("fof", "sof","tof"),
        "second" => array("fos", "sos","tos"),
        "third" => array("fot", "sot","tot"));
        
echo $arrs["second"][1];


?>