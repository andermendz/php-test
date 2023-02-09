<?php
require_once "Car.php";


$ford = new Car();

$ford -> setMarca('Ford'); 
$ford -> setModelo('Mustang');

$ford->conduciendo() ;

?>