<?php 

$dbc = new PDO('mysql:host=localhost;port=3306;dbname=misc','ander','zap');

$users = $dbc->query("SELECT * FROM users");

while ($row = $users ->fetch(PDO::FETCH_ASSOC)){
    print_r($row);
    echo "<br>";
}




?>