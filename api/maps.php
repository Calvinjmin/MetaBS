<?php
header('Content-Type: text/html; charset=UTF-8');
$MAPURL = "https://api.brawlapi.com/v1/maps";
$ch = curl_init($MAPURL);

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
// Endpoint Description: "https://api.brawlapi.com/v1/maps"
$mapData = $data["list"];
?>
