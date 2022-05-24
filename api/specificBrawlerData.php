<?php
session_start();
$BRAWLERNAME = $_SESSION["brawlerName"];
$BRAWLERID = 16000023;
$BRAWLERURL = 'https://api.brawlapi.com/v1/brawlers/'.$BRAWLERID;
$ch = curl_init($BRAWLERURL);

$headr = array();
$headr[] = "Accept: application/json";

curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$res = curl_exec($ch);
$data = json_decode($res, true);
curl_close($ch);

if (isset($data["reason"])) {
    echo "<p>", "Failed: ", $data["reason"], " : ", isset($data["message"]) ? $data["message"] : "", "</p></body></html>";
    exit;
}

// JSON ARRAY
// Endpoint Description: https://brawlapi.com/#/endpoints/brawlers/BRAWLERID
$brawlerData = $data;
?>