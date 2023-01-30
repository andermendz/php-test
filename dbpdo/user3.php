<?php
require_once 'pdo.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {

    $sql = "INSERT INTO USERS (name, email, password) VALUES (:name,:email,:password)";


    $stm = $bdc->prepare($sql);
    $stm->execute(
        array(
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':password' => $_POST['password']
        )
    );
}

if (isset($_POST['delete']) && isset($_POST['user_id'])) {
    $sql = "DELETE FROM users WHERE user_id = :zip ";
    echo "<pre> $sql </pre>";
    $stm = $bdc->prepare($sql);
    $stm->execute(array(
        ':zip' => $_POST['user_id']
    ));
};



?>
<html>
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
        echo "</td><td>";
        echo '<form method = "post"> <input type = "hidden" ';
        echo ' name= "user_id" value= "' . $row['user_id'] . '">';
        echo '<input type="submit" name="delete" value = "delete" >';
        echo "</form>";
        echo "</td></td>";
    };

    ?>
</table>

<form method="post">

    <?php
    print_r($_POST);
    ?>


    <h2>Test form with PDO</h2>



    <p> Name : <input type="text" id="f01" name="name"> </p>
    <p> Email : <input type="email" id="f02" name="email"> </p>
    <p> Password : <input type="password" id="f03" name="password"> </p>
    <p> <input type="submit" value="Add New User"> </p>



</form>

</html>