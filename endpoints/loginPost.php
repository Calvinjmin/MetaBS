<?php
include_once("../database/creds.php");

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

try {
    // Trying to grab an instance from Accounts for credentials
    $statement = "SELECT * FROM accounts WHERE username= '$username'";
    $sql = $pdo->query($statement);
    $data = $sql->fetch();

    if ($data != null) {
        if ($password == $data["password"]) {
            loginUser( $data );
        } else {            // REDIRECT HERE BACK TO LOGIN, Invalid Password
            echo "<script>";
            echo " alert('Invalid Credentials. Try Again!');      
                    window.location.href='/pages/loginPage.php';
                    </script>";

        }
    } else {        // REDIRECT HERE BACK TO LOGIN, Invalid Username
        echo "<script>";
        echo " alert('Invalid Credentials. Try Again!.');      
                window.location.href='/pages/loginPage.php';
                </script>";
    }
} catch (PDOException $e) {
    $return = "Your fail message: " . $e->getMessage();
}


// Logs the User into the Session and Redirects
function loginUser( $sqlData )
{
    // Begins PHP Session
    if (!isset($_SESSION)) {
        session_start();
    }

    $_SESSION["username"] = $sqlData["username"];
    $_SESSION["password"] = $sqlData["password"];
    $_SESSION["email"] = $sqlData["email"];
    echo "<script>";
    echo " alert('Signed In.');      
            window.location.href='/pages/userPage.php';
            </script>";
    exit;
}
