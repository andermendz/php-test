<h1>Form</h1>
<?php
$oldguess = isset($_POST['guest']) ? $_POST['guest'] : "";
// HTTP INJECTION fixe by httpentities
?>


<form method="post">
<p><label for="guest"> Input you'r name</label>
<input type="text" name="guest" id="guest"
            value="<?= htmlentities($oldguess) ?>">
</p>
<input type="submit">

</form>

<?php 

print_r($_POST)

?>