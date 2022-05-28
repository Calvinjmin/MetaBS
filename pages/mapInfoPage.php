<html>
<?php include("../components/navbar/mainNavbar.php");
include($_SERVER['DOCUMENT_ROOT'] . "/api/eventsAPI.php");
?>

<body>
    <link rel="stylesheet" href="/CSS/body.css" type="text/css">
    <div class="container content has-text-centered" style="height: 95%;">
        <div class="tabs is-centered is-toggle is-fullwidth">
            <ul>
                <li class="is-active">
                    <a>
                        <span class="icon is-small"><img src="<?php echo $gemGrabMaps[0]["map"]["gameMode"]["imageUrl"] ?>"></span>
                        <span>Gem Grab</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="icon is-small"><img src="<?php echo $knockoutMaps[0]["map"]["gameMode"]["imageUrl"] ?>"></span>
                        <span>Knockout</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="icon is-small"><img src="<?php echo $brawlBallMaps[0]["map"]["gameMode"]["imageUrl"] ?>"></span>
                        <span>Brawl Ball</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="icon is-small"><img src="<?php echo $bountyMaps[0]["map"]["gameMode"]["imageUrl"] ?>"></span>
                        <span>Bounty</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="icon is-small"><img src="<?php echo $heistMaps[0]["map"]["gameMode"]["imageUrl"] ?>"></span>
                        <span>Heist</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="icon is-small"><img src="<?php echo $soloShowndownMaps[0]["map"]["gameMode"]["imageUrl"] ?>"></span>
                        <span>Solo Showdown</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="icon is-small"><img src="<?php echo $duoShowdownMaps[0]["map"]["gameMode"]["imageUrl"] ?>"></span>
                        <span>Duo Showdown</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>