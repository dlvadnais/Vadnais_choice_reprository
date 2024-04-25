<?php

if (!empty($_POST)) {
    $rate = $_POST['world'];
    $reason = $_POST['reason'];

    try {
        require_once "dbh.php";
        $query = "INSERT INTO user_mental (rate,reason) VALUES (?,?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$rate,$reason]);

        $pdo = null;
        $stmt = null;
        header("Location: ./index.php");
        die();

    } 
    catch(Exception $e) {
        die("Query failed: " . $e->getMessage());

    }
}
else{
    echo "Hit Else";
    header("Location: ./index.php");
}