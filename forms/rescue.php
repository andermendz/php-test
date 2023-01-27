<form method="post">
<p> <label for="text">Input your text</label>
<input type="text" id="text" 
value=" <?= htmlentities($oldguess)?>">
</p>

<input type="submit" name="button" id="" >


</form>

<?=
$oldguess = 1223;
print_r($_POST);


?>