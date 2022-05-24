<?php
header('Content-Type: text/html; charset=UTF-8');
$EVENTSURL = "https://api.brawlapi.com/v1/events";
$ch = curl_init($EVENTSURL);

$headr = array();
$headr[] = "Accept: application/json";

curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Executing the CURL Request
$res = curl_exec($ch);
$data = json_decode($res, true);
curl_close($ch);

if (isset($data["reason"])) {
    echo "<p>", "Failed: ", $data["reason"], " : ", isset($data["message"]) ? $data["message"] : "", "</p></body></html>";
    exit;
}

// JSON ARRAY
// Endpoint Description: "https://api.brawlapi.com/v1/events"
$activeEvents = $data["active"];
$upcomingEvents = $data["upcoming"];
?>
