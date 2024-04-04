<!DOCTYPE html>
<html lang="en">

<head>
    <meta charsrt="UTF-8">
</head>

<body>

<h2>what is the current state of the world?</h2>


<form class="searchform" action="search.php" method="post">
    <label for="search"> select </label>
    <select name="world" id="world-select">
  <option value="">--Please choose an option--</option>
  <option value="bad">bad</option>
  <option value="very bad">very bad</option>
  <option value="the world is ending">the world is ending</option>
</select>
    Why <input type="text" reason="reason">
    
    <input type="submit" value="Add to Table">
</form>


<?php

$dsn = "mysql:host=localhost;dbname=namesalary";
$dbusername = "root";
$dbpassword = "";
