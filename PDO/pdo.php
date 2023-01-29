<?php 

$dbc = new PDO('mysql:host=localhost;port=3306;dbname=misc','ander','zap');

$users = $dbc->query("SELECT * FROM users");

echo "<TABLE border=1";
echo "<tr><th>";
echo "Name";
echo "</th><th>";
echo "Email";
echo "</th><th>";
echo "Password";
echo "</th></tr>";
while ($row = $users ->fetch(PDO::FETCH_ASSOC)){

    echo "<tr><td>";
    echo $row['name'];
    echo "</td><td>";
    echo $row['email'];
    echo "</td><td>";
    echo $row['password'];
    echo "</td></tr>";
}


echo "</table>";

?>