<?php 
include_once($_SERVER['DOCUMENT_ROOT'] . "/api/mapAPI.php");
foreach ($duoShowdownMaps as $m ) {
    echo '<div>';
    echo '<p>' .$m["name"] . '</p>';
    echo '<p>' .$m["id"] . '</p>';
    echo '</div>';
}
?>