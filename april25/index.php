<!DOCTYPE html>
<html lang="en">

<head>
    <meta charsrt="UTF-8">
</head>

<body>

<h2>what is the current state of the world?</h2>


<form class="searchform" action="formHandler.php" method="post">

    <label for="search"> select </label>

    <select name='world' id="world-select">
    <option value="">--Please choose an option--</option>
    <option value="bad ">bad </option>
    <option value="very bad ">very bad </option>
    <option value="the world is ending ">the world is ending </option>
    </select>

    <p>Why</p>
    <input type="text" name="reason">
    
    <input type="submit" value="Add to Table" action="formHandler.php">
</form>






<?php
$dsn = "mysql:host=localhost;dbname=mentalstate";

$query = "SELECT * FROM mentalstate";


echo "<b> <center>Database Output</center> </b> <br> <br>";

while ($row = $result->fetch_assoc()) {
    $field1name = $row["col1"];
    $field2name = $row["col2"];


    echo '<b>'.$field1name.$field2name.'</b><br />';
    

} 
$result->free();
