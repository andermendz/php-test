<h1>Form</h1>
<?php
$oldguess = isset($_POST['guest']) ? $_POST['guest'] : "";
// HTTP INJECTION // CROSS SITE SCRIPTING
?>


<form method="post">
<p><label for="guest"> Input you'r name</label>
<input type="text" name="guest" id="guest"
            value="<?= $oldguess?>">
</p>
<input type="submit">

</form>

<?php 

print_r($_POST)

?>

/> <h1>el epep</h1>