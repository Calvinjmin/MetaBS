<?php
if (!isset($_SESSION)) {
    session_start();
}
$_SESSION["brawlerName"] = $_REQUEST["brawlerName"];
echo $_SESSION["brawlerName"];
exit;
