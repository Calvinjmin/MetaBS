<?php
// ENDPOINT for POST REQUEST on Brawler Table

// Begins PHP Session
if (!isset($_SESSION)) {
    session_start();
}

$_SESSION["brawlerName"] = $_REQUEST["brawlerName"];
echo $_SESSION["brawlerName"];

exit;
