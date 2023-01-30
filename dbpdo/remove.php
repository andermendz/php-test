<?php 
require_once 'pdo.php';

if (isset($_POST['user_id'])){
    $sql = "DELETE FROM users WHERE user_id = :zip ";
    echo "<pre> $sql </pre>";
    $stm = $bdc->prepare($sql);
    $stm -> execute(array(
        ':zip' => $_POST['user_id'] 
    ));
};


?>

<html>

<h2>Delete a User</h2>
    
<form method="post">



    <p> ID to Delete <input type="text" name="user_id" size="5"> </p>
    <p> <input type="submit" value="Delete"> </p>


</form>

<?php 
    echo  $_POST['user_id'] ;
    ?>


</html>