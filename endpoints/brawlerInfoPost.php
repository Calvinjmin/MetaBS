<?php
// ENDPOINT for POST REQUEST on Brawler Table

// How the data is transferred:
// 1. Click on Brawler Table (POST REQUEST)
// 2. Comes to the endpoint HERE
// 3. Session variables are initialized
// 4. API called is made

// Begins PHP Session
if (!isset($_SESSION)) {
    session_start();
}

$_SESSION["brawlerName"] = $_REQUEST["brawlerName"];
$_SESSION["brawlerID"] = $_REQUEST["brawlerID"];
echo $_SESSION["brawlerName"];

exit;
