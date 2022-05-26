<?php 
include_once("../database/creds.php");

// Grab the data the from the POST REQUEST
$username = $_REQUEST["username"];
$password = $_REQUEST["password"];
$email = $_REQUEST["email"];
$firstName = $_REQUEST["firstName"];
$lastName = $_REQUEST["lastName"];

try {
    // Insert values in to the Postgresql DB
    $statement = "INSERT INTO accounts (username, password, email, first_name, last_name) 
                    VALUES ( :username, :password, :email, :firstName , :lastName );";
    $sql = $pdo->prepare($statement);
    $sql->bindParam(':username', $username, PDO::PARAM_STR);
    $sql->bindParam(':password', $password, PDO::PARAM_STR);
    $sql->bindParam(':email', $email, PDO::PARAM_STR);
    $sql->bindParam(':firstName', $firstName, PDO::PARAM_STR);
    $sql->bindParam(':lastName', $lastName, PDO::PARAM_STR);
    $sql->execute();
    echo "<script>";
    echo " alert('Signed Up!');      
            window.location.href='/pages/user/loginPage.php';
            </script>";
}
catch (PDOException $e) {
    $return = "Your fail message: " . $e->getMessage();
    echo "<script>";
    echo " alert('Invalid Error');      
            window.location.href='/pages/user/signupPage.php';
            </script>";
}
