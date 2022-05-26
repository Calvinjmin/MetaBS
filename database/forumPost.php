<?php
include("./creds.php");

if (!isset($_SESSION)) {
    session_start();
}

// Grab the data the from the POST REQUEST
$title = $_REQUEST["title"];
$postText = $_REQUEST["postText"];
$author = $_SESSION["username"];

try {
    // Insert values in to the Postgresql DB
    $statement = "INSERT INTO forum (title, author, text) 
                    VALUES ( :title, :author, :text );";
    $sql = $pdo->prepare($statement);
    $sql->bindParam(':title', $title, PDO::PARAM_STR);
    $sql->bindParam(':author', $author, PDO::PARAM_STR);
    $sql->bindParam(':text', $postText, PDO::PARAM_STR);
    $sql->execute();
    echo "<script>";
    echo " window.location.href='/pages/forum/forumLandingPage.php';
            </script>";
    exit;
}
catch (PDOException $e) {
    $return = "Your fail message: " . $e->getMessage();
    echo "<script>";
    echo " alert('Invalid Error');      
            window.location.href='/pages/forum/forumLandingPage.php';
            </script>";
}

?>