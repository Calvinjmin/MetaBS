<?php
include($_SERVER['DOCUMENT_ROOT']."/database/creds.php");

try {
    // Insert values in to the Postgresql DB
    $statement = "SELECT * FROM forum";
    $sql = $pdo->prepare($statement);
    $sql->execute();

    // Grabs an array of all the forum posts in the database
    $forumSelectAllData = $sql->fetchAll();
}
catch (PDOException $e) {
    $return = "Your fail message: " . $e->getMessage();
    echo "<script>";
    echo " alert('Invalid Error');      
            window.location.href='/pages/main.php';
            </script>";
}
?>