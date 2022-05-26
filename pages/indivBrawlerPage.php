<html>
<?php 
// Begins PHP Session
if (!isset($_SESSION)) {
    session_start();
}
include("../api/specificBrawlerDataAPI.php");
include("../components/navbar/mainNavbar.php");
?>

<body>
    <link rel="stylesheet" href="/CSS/body.css" type="text/css">
    <div class="container has-text-centered" style="padding-top: 10px;">

        <!-- Main Body (Tile) -->
        <div class="tile is-ancestor is-vertical">

            <div class="tile is-parent">

                <!-- Brawler Name + Image -->
                <article class="tile is-3 is-child notification is-info">
                    <p class="title"><?php echo $brawlerData["name"] ?></p>
                    <img src=<?php echo $brawlerData["imageUrl"] ?> width="150px" height="150px">
                </article>

                <!-- Basic Information -->
                <article class="tile is-child notification">
                    <p class="title">About the Brawler</p>
                    <p><?php echo $brawlerData["description"] ?></p>
                    <p style="padding-top: 10px;">Rarity: <?php echo $brawlerData["rarity"]["name"] ?></p>
                    <p>Class: <?php echo $brawlerData["class"]["name"] ?></p>
                </article>

            </div>

            <!-- Attack Videos -->
            <div class="tile is-parent">
                <?php
                if ($brawlerData["videos"] != null) {
                    echo '<article class="tile is-child">';
                    echo '<p class="title">' . $brawlerData["name"] . '\'s Main Attack</p>';
                    echo '<video width="250" height="150" controls>';
                    echo '<source src=' . $brawlerData["videos"][0]["videoUrl"] . '>';
                    echo '</video>';
                    echo '</article>';

                    echo '<article class="tile is-child">';
                    echo '<p class="title">' . $brawlerData["name"] . '\'s Super Attack</p>';
                    echo '<video width="250" height="150" controls>';
                    echo '<source src=' . $brawlerData["videos"][1]["videoUrl"] . '>';
                    echo '</video>';
                    echo '</article>';
                }
                ?>
            </div>

        </div>
    </div>
</body>

</html>