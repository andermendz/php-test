<?php
require_once 'pdo.php';

$users = $bdc->query('select * from users' );

echo '<table border= 1>';
echo '<tr><th>';
print_r('Name');
echo ' </th><th>';
print_r('Email');
echo '</th><th>';
print_r('Password');
echo '</th></tr>';
while ($row = $users->fetch(PDO::FETCH_ASSOC) ){
    echo '<tr><td>';
    print_r($row['name']. '');
    echo ' </td><td>';
    print_r($row['email']. ''); 
    echo '</td><td>';
    print_r($row['password']. ''); 
    echo '</td></tr>';
}


echo '</table>';

?>