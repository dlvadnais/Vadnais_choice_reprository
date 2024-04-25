<?php
include 'dbh.php';


$queue = "SELECT * FROM user_mental;";
$statement = $pdo->prepare($queue);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<style>
table, th, td {
  border:1px solid black;
}
</style>


<table>
    <?php
    if (empty($results)) 
    {

    }
    else 
    {

       foreach ($results as $row)
       {

            echo "<tr><th>";
            echo htmlspecialchars($row["rate"]);
            echo "</th><th>";
            echo htmlspecialchars($row["reason"]);
            echo "</th>";
        
        }
    }
        ?>
</table>