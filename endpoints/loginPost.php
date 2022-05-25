<?php
// Begins PHP Session
if (!isset($_SESSION)) {
    session_start();
}

$_SESSION["username"] = $_REQUEST["username"];
$_SESSION["password"] = $_REQUEST["password"];
header("Location:../pages/userPage.php");
exit;
?>