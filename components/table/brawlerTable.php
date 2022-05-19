<?php 
include("../../api/brawlerData.php");
include("../navbar/mainNavbar.php");
echo "<table class=\"table is-bordered is-striped is-narrow is-hoverable is-fullwidth\">";
echo "<tr> <th>Name</th> <th colspan=\"2\">Gadget</th> <th colspan=\"2\">Star Power</th></tr>";
foreach( $brawlers as $bra ) {
    echo "<tr>";
    echo '<td>' . $bra["name"] . '</td>';
    if ( count($bra["gadgets"]) < 2 ) {
        echo '<td colspan="2">' . $bra["gadgets"][0]["name"] . '</td>';  
    }
    else {
        foreach ( $bra["gadgets"] as $gad) {
            echo '<td>' . $gad["name"] . '</td>';    
        }
    }
    if ( count($bra["starPowers"]) < 2 ) {
        echo '<td colspan="2">' . $bra["starPowers"][0]["name"] . '</td>';
    }
    else {
        foreach ( $bra["starPowers"] as $sp) {
            echo '<td>' . $sp["name"] . '</td>';    
        }
    }
    echo "</tr>";
}
echo "</table>";
?>
