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

// Active Maps
$activeGemGrabMaps = array();
$activeKnockoutMaps = array();
$activeBountyMaps = array();
$activeBrawlBallMaps = array();
$activeHeistMaps = array();
$activeSoloShowndownMaps = array();
$activeDuoShowdownMaps = array();

// Upcoming Map
$upcomingGemGrabMaps = array();
$upcomingKnockoutMaps = array();
$upcomingBountyMaps = array();
$upcomingBrawlBallMaps = array();
$upcomingHeistMaps = array();
$upcomingSoloShowndownMaps = array();
$upcomingDuoShowdownMaps = array();

// Sort the Arrays into their Game Modes
foreach ($activeEvents as $map) {
    $mapType = $map["map"]["gameMode"]["name"];

    switch ($mapType) {
        case "Gem Grab":
            $activeGemGrabMaps[] = $map;
            break;
        case "Bounty":
            $activeBountyMaps[] = $map;
            break;
        case "Brawl Ball":
            $activeBrawlBallMaps[] = $map;
            break;
        case "Heist":
            $activeHeistMaps[] = $map;
            break;
        case "Solo Showdown":
            $activeSoloShowndownMaps[] = $map;
            break;
        case "Duo Showdown":
            $activeDuoShowdownMaps[] = $map;
            break;
        case "Knockout":
            $activeKnockoutMaps[] = $map;
            break;
    }
}

foreach ($upcomingEvents as $map) {
    $mapType = $map["map"]["gameMode"]["name"];

    switch ($mapType) {
        case "Gem Grab":
            $upcomingGemGrabMaps[] = $map;
            break;
        case "Bounty":
            $upcomingBountyMaps[] = $map;
            break;
        case "Brawl Ball":
            $upcomingBrawlBallMaps[] = $map;
            break;
        case "Heist":
            $upcomingHeistMaps[] = $map;
            break;
        case "Solo Showdown":
            $upcomingSoloShowndownMaps[] = $map;
            break;
        case "Duo Showdown":
            $upcomingDuoShowdownMaps[] = $map;
            break;
        case "Knockout":
            $upcomingKnockoutMaps[] = $map;
            break;
    }

}
