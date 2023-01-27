<p>This is a form</p>

<form method="post">

<p> <label for="f01"> Name: </label>
<input type="text" name ="name" id="f01" size="30">
</p>
<p>
<label for="f02"> Password: </label>
<input type="password" name ="password" id="f02" size="20">
</p>
<p> <label for="f03">Username: </label>
    <input type="text" name = "username" id="f03" size="20">
</p>
<p> Select one option <br>
    <input type="radio" name="option" value="10" > 10
    <input type="radio" name="option" value="20" > 20
</p>
<p>Classes: <br>
    <input type="checkbox" name="class1" value="sc01"> sc01<br>
    <input type="checkbox" name="class2" value="sc02"> sc02<br>
    <input type="checkbox" name="class3" value="sc03"> sc03<br>
</p>
<p> <label for="f04">Select the hability: </label>
    <select name="hability" id="f04">
        <option value="0">A</option>
        <option value="1">B</option>
        <option value="2">C</option>
        <option value="3">D</option>
        <option value="4">E</option>
        <option value="5">F</option>
    </select>
</p>
<P> <label for="f05"></label><br>
    <textarea name="text" id="f05" cols="30" rows="10">el pepe jeje
    </textarea>
</P>

<input type="Submit">


</form>

<?php 
print_r($_POST)

?>