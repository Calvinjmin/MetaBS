<?php 
// Begins PHP Session
if (!isset($_SESSION)) {
    session_start();
}

$_SESSION["username"] = "";
$_SESSION["password"] = "";
$_SESSION["email"] = "";
header("Location:../index.php");
exit;
?>