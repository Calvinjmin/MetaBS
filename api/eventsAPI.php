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

$gemGrabMaps = array();
$knockoutMaps = array();
$bountyMaps = array();
$brawlBallMaps = array();
$heistMaps = array();
$soloShowndownMaps = array();
$duoShowdownMaps = array();

// Sort the Arrays into their Game Modes
foreach ($activeEvents as $map) {
    $mapType = $map["map"]["gameMode"]["name"];

    switch ($mapType) {
        case "Gem Grab":
            $gemGrabMaps[] = $map;
            break;
        case "Bounty":
            $bountyMaps[] = $map;
            break;
        case "Brawl Ball":
            $brawlBallMaps[] = $map;
            break;
        case "Heist":
            $heistMaps[] = $map;
            break;
        case "Solo Showdown":
            $soloShowndownMaps[] = $map;
            break;
        case "Duo Showdown":
            $duoShowdownMaps[] = $map;
            break;
        case "Knockout":
            $knockoutMaps[] = $map;
            break;
    }
}

foreach ($upcomingEvents as $map) {
    $mapType = $map["map"]["gameMode"]["name"];

    switch ($mapType) {
        case "Gem Grab":
            $gemGrabMaps[] = $map;
            break;
        case "Bounty":
            $bountyMaps[] = $map;
            break;
        case "Brawl Ball":
            $brawlBallMaps[] = $map;
            break;
        case "Heist":
            $heistMaps[] = $map;
            break;
        case "Solo Showdown":
            $soloShowndownMaps[] = $map;
            break;
        case "Duo Showdown":
            $duoShowdownMaps[] = $map;
            break;
        case "Knockout":
            $knockoutMaps[] = $map;
            break;
    }
}
