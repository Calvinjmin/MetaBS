<?php
//include_once("creds.php");
header('Content-Type: text/html; charset=UTF-8');
$BRAWLERURL = "https://api.brawlstars.com/v1/brawlers";
$TOKEN = getenv('TOKEN');
$ch = curl_init($BRAWLERURL);

$headr = array();
$headr[] = "Accept: application/json";
$headr[] = "Authorization: Bearer " . $TOKEN;

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
// id - Integer | name - String | starPowers - Array ( 0 and 1 | id and name )
// gadgets - Array ( 0 and 1 | id and name )
$brawlers = $data["items"];
?>