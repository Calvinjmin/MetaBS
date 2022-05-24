<html>
<?php include("../components/navbar/mainNavbar.php") ?>
<?php include("../api/specificBrawlerData.php") ?>

<body>
    <link rel="stylesheet" href="/CSS/body.css" type="text/css">
    <div class="container content has-text-centered" style="height: 95%;">
        <h2 class="title is-2">
            <?php
            print_r($BRAWLERNAME);
            ?>
        </h2>

    </div>
</body>

</html>