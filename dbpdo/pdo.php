<?php 
// connection
$bdc = new PDO('mysql:host=127.0.0.1;dbname=testing;port=3306', 'root','');
//error checking
$bdc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>