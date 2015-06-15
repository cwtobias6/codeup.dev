<?php
  var_dump($_GET);
  var_dump($_POST);
?>


<!DOCTYPE html>
<html>
<head><title>My Practice HTML Form</title></head>
<link rel="stylesheet" type="text/css" href="/css/form_practice.css">

<body>



<form method="POST" action="/form_practice.php">
    <h6>User Login</h6>
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="Enter Username Here">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Enter Password">
    </p>
    <p>
        <button>PRESS ME!!</button>
    </p>
</form>

<form method="POST" article="/form_practice.php">
    <h5>Compose an Email</h5>
    <label>
        TO:
        <input type="text" id="to" name="to" placeholder="Send To">
    </label><br>


    <label>
        FROM:
        <input type="text" id="from" name="from" placeholder="To Whom">
    </label><br>


    <label>
        SUBJECT:
        <input type="text" id="subject" name="subject" placeholder="Subject Matters">
    </label><br>


    <textarea id="email body" name="email body" rows="8" cols="50">Content Here!</textarea>

    <br>
    <input type="checkbox" id="email" name="email" value="Yes">
    <label for="email">Save Copy to sent folder?</label>

    <button>Send Email!</button>

</form>

<form>
    <h4>Multiple Choice Test</h4>
        <p>Best Athletic Brand??</p>
        <label>
            <input type="checkbox" name="q1[]" value="adidas">
            Adidas
        </label>

        <label>
            <input type="checkbox" name="q2[]" value="nike"selected>
            Nike
        </label>

        <label>
            <input type="checkbox" name="q3[]" value="underArmour">
            Under Armour
        </label>

        <p>Best Sport?</p>
            <label>
                <input type="radio" name="q2" value="track" selected>
                Track
            </label>

            <label>
                <input type="radio" name="q2" value="basketball">
                Basketball
            </label>

            <label>
                <input type="radio" name="q2" value="football">
                Football
            </label>
            
            <br>
            <label for="test">Best School:</label>
            <select id="test" name="test" multiple>
                <option value="MICDS">Micds</option>
                <option value="CODEUP">Codeup</option>
                <option value="GEORGETOWN">Georgetown</option>
            </select>

            <button>Click Here</button>

</form>
    <h3>Select Testing</h3>
        <label for="choice">Select your favorite pizza topping!</label>
        <select id="choice" name="choice">
                <option selected>Pepperoni</option>
                <option>Cheese</option>
                <option>Avovado</option>
        </select>

        <button>Should I Send!</button>
<form>


</form>

<!-- to, from, subject, body, and a send button)
 -->
</body>
</html>