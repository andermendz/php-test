<p>this are the form type</p>

<form method="post">

<p> <label for="f01"> Name:</label>
<input type="text" name="name" id="f01" ></p>

<p> <label for="f02"> Lastname</label>
<input type="text" name="lastname" id="f02" ></p>

<p> <label for="f03a"> age</label>
<input type="number" name="age" id="f03a" >

<p> <label for="f03"> email</label>
<input type="email" name="email" id="f03" >

<p> Time
<input type="radio" name="when" value="AM" checked> AM
<input type="radio" name="when" value="PM" > PM
<p> Class<br>
    <input type="checkbox" name = "c1" value="class1"> class1 <br>
    <input type="checkbox" name = "c2" value="class2"> class2 <br>
    <input type="checkbox" name = "c3" value="class3"> class3 <br>
</p>
<p> <label for="f04"> Select your class mate</label>
    <select name="classmate" id="f04">
        <option value="0">---</option>
        <option value="1">eric</option>
        <option value="2">frederic</option>
        <option value="3">vladimir</option>
        <option value="4">joseph</option>
    </select>

</p>
<p> <label for="textf"> Text Area</label> <br>
    <textarea name="textar" id="textf" cols="30" rows="10">

    </textarea>
</p>

<p> <label for="f05"> password</label>
<input type="password" name="password" id="f05" size="10">

<p> <label for="favc"> Select your favorite color</label>
    <input type="color" name="favc" id="favc"></p>


<p><input type="submit" name="button" value="thebutton"></p>


</form>

<?php
print_r($_POST);
?>