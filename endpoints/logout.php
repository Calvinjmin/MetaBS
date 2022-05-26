<?php 
// Begins PHP Session
if (!isset($_SESSION)) {
    session_start();
}

$_SESSION["username"] = "";
$_SESSION["password"] = "";
$_SESSION["email"] = "";
$_SESSION["firstName"] = "";
$_SESSION["lastName"] = "";
header("Location:../index.php");
exit;
?>