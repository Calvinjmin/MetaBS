<html>
<?php include("../components/navbar/mainNavbar.php") ?>
<?php include("../api/specificBrawlerDataAPI.php") ?>

<body>
    <div class="container" style="padding-top: 20px;">
        <div class="tile is-ancestor is-vertical">
            <div class="tile is-parent">
                <article class="tile is-3 is-child notification is-info">
                    <p class="title"><?php echo $brawlerData["name"] ?></p>
                    <img src=<?php echo $brawlerData["imageUrl"] ?> width="150px" height="150px">
                </article>

                <article class="tile is-child notification">
                    <p class="title">About the Brawler</p>
                    <p><?php echo $brawlerData["description"]?></p>
                    <p style="padding-top: 10px;">Rarity: <?php echo $brawlerData["rarity"]["name"]?></p>
                    <p>Class: <?php echo $brawlerData["class"]["name"]?></p>
                </article>
            </div>

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