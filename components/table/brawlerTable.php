<html>
<link rel="stylesheet" href="/CSS/table.css" type="text/css">
<?php
echo "<table class=\"table is-bordered is-striped is-narrow is-hoverable is-fullwidth\">";
echo "<tr> <th>Name</th> <th colspan=\"2\">Gadget</th> <th colspan=\"2\">Star Power</th></tr>";
foreach ($brawlers as $bra) {
    echo "<tr>";
    echo '<td> <img src= "' . $bra["imageUrl"] . '" width=30 height=30>' . $bra["name"] . ' </td>';
    if ($bra["gadgets"] == NULL) {
        echo '<td colspan="2"> N/A </td>';
    } else if (count($bra["gadgets"]) < 2) {
        echo '<td colspan="2">' . $bra["gadgets"][0]["name"] . '</td>';
    } else {
        foreach ($bra["gadgets"] as $gad) {
            echo '<td>' . $gad["name"] . '</td>';
        }
    }

    if ($bra["starPowers"] == NULL) {
        echo '<td colspan="2"> N/A </td>';
    } else if (count($bra["starPowers"]) < 2) {
        echo '<td colspan="2">' . $bra["starPowers"][0]["name"] . '</td>';
    } else {
        foreach ($bra["starPowers"] as $sp) {
            echo '<td>' . $sp["name"] . '</td>';
        }
    }
    echo "</tr>";
}
echo "</table>";
?>

</html>