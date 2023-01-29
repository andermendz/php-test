<?php 
// connection
$bdc = new PDO('mysql:host=localhost;dbname=testing;port=3306', 'andermendz','keyw');
//error checking
$bdc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>