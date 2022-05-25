<?php 
// Begins PHP Session
if (!isset($_SESSION)) {
    session_start();
}

$_SESSION["username"] = "";
$_SESSION["password"] = "";
header("Location:../index.php");
exit;
?>