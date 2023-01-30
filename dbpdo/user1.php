<?php
require_once 'pdo.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) ) {

$sql = "INSERT INTO USERS (name, email, password) VALUES (:name,:email,:password)";


$stm = $bdc->prepare($sql);
$stm->execute(
    array(
        ':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password']
    )
);

    $_POST['name'] = false;
    $_POST['email'] = false;
    $_POST['password'] = false;
}



?>
<html>
<form method="post">
    <table border="1">

        <?php
        $stm = $bdc->query('SELECT user_id,name,email,password FROM users');
        while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>";
            echo $row['user_id'];
            echo "</td><td>";
            echo $row['name'];
            echo "</td><td>";
            echo $row['email'];
            echo "</td><td>";
            echo $row['password'];
            echo "</td></td>";
        };

        ?>
    </table>

    <?php 

    ?>

    <h2>Test form with PDO</h2>

    <p> Name : <input type="text" id="f01" name="name"> </p>
    <p> Email : <input type="email" id="f02" name="email"> </p>
    <p> Password : <input type="password" id="f03" name="password"> </p>
    <p> <input type="submit" value="Add New User"> </p>



</form>

</html>