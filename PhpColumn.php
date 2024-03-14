<!DOCTYPE html>
<html>
<head>
    <title>Add to Table</title>
</head>
<body>

<h2>Add to Table</h2>
<!-- this bit sets up the form that lets the user imput their name and salary-->

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="name">
    Salary: <input type="text" name="salary">
    <input type="submit" value="Add to Table">
</form>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $salary = $_POST['salary'];

    // Append the submitted data to a file
    $file = 'data.txt';
    $current = file_get_contents($file);
    $current .= $name . ',' . $salary . "\n";
    file_put_contents($file, $current);
}

// Display the table with all previous inputs
echo "<h2>Previous Inputs:</h2>";
echo "<table>";
echo "<tr><th>Name</th><th>Salary</th></tr>";

// Read all the data from the file and put it in the table
$file = 'data.txt';
if (file_exists($file)) {
    $data = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($data as $line) {
        list($name, $salary) = explode(',', $line);
        echo "<tr><td>$name</td><td>$salary</td></tr>";
    }
}

echo "</table>";
?>

</body>
</html>