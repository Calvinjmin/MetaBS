<html>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../../scripts/indivBrawler.js"> </script>

<!-- CSS -->
<link rel="stylesheet" href="/CSS/table.css" type="text/css">

<div class="container is-widescreen">
    <?php
    // Creating the Brawler Table with Bulma CSS
    echo "<table class=\"table is-bordered is-striped is-narrow is-hoverable is-fullwidth\">";
    echo "<tr> <th>Name</th> <th>Rarity</th> <th>Class</th></tr>";

    foreach ($brawlers as $bra) {
        echo "<tr>";

        // Inserting Image + Brawler Name
        echo '<td> <img src= "' . $bra["imageUrl"] . '" width=30 height=30  style="padding-right: 2px">
            <a onclick="indivBrawler(this)">' . $bra["name"].'</a> </td>';

        echo '<td>' . $bra["rarity"]["name"] . '</td>';
        echo '<td>' . $bra["class"]["name"] . '</td>';
        
        /*
            Removing Gadgets & Star Power on Table 
            if ($bra["gadgets"] == NULL) {  // No available gadgets
                echo '<td colspan="2"> N/A </td>';
            } else if (count($bra["gadgets"]) < 2) {    // 1 Gadget
                echo '<td colspan="2">' . $bra["gadgets"][0]["name"] . '</td>';
            } else {    // 2 Gadgets
                foreach ($bra["gadgets"] as $gad) {
                    echo '<td>' . $gad["name"] . '</td>';
                }
            }

            if ($bra["starPowers"] == NULL) {   // No Star Powers
                echo '<td colspan="2"> N/A </td>';
            } else if (count($bra["starPowers"]) < 2) {     // 1 Star Power
                echo '<td colspan="2">' . $bra["starPowers"][0]["name"] . '</td>';
            } else {    // 2 Star Power
                foreach ($bra["starPowers"] as $sp) { 
                    echo '<td>' . $sp["name"] . '</td>';
                }
            }
        */
        echo "</tr>";
    }
    echo "</table>";
    ?>

</div>


</html>