<!DOCTYPE html>
<html>
<head>
    <title>Add to Table</title>
</head>
<body>

<h2>Add to Table</h2>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="name">
    Salary: <input type="text" name="salary">
    <input type="submit" value="Add to Table">
</form>


<?php

$dsn = "mysql:host=localhost;dbname=namesalary";
$dbusername = "root";
$dbpassword = "root";
