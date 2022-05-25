<?php
include_once("../database/creds.php");

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

try {
    $statement = "SELECT * FROM accounts WHERE username= '$username'";
    $sql = $pdo->query($statement);
    $data = $sql->fetch();

    if ($data != null) {
        if ($password == $data["password"]) {
            loginUser();
        } else {
            echo "<script>alert('Invalid Credentials')</script>";
            // REDIRECT HERE BACK TO LOGIN
        }
    } else {
        echo "<script>alert('Invalid Credentials')</script>";
        // REDIRECT HERE BACK TO LOGIN
    }
} catch (PDOException $e) {
    $return = "Your fail message: " . $e->getMessage();
}


function loginUser()
{
    // Begins PHP Session
    if (!isset($_SESSION)) {
        session_start();
    }

    $_SESSION["username"] = $_REQUEST["username"];
    $_SESSION["password"] = $_REQUEST["password"];
    header("Location:../pages/userPage.php");
    exit;
}
