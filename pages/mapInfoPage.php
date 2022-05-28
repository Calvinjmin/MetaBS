<html>
<?php include("../components/navbar/mainNavbar.php");
include($_SERVER['DOCUMENT_ROOT'] . "/api/mapAPI.php");
?>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/scripts/tabChanger.js"> </script>

<body>
    <link rel="stylesheet" href="/CSS/body.css" type="text/css">
    <div class="container content has-text-centered" style="height: 95%;">
        <div class="tabs is-centered is-toggle is-fullwidth">
            <ul>
                <li id="gemGrabTab" class="is-active">
                    <a onclick="switchToGemGrab()">
                        <span class="icon is-small"><img src="<?php echo $gemGrabMaps[0]["gameMode"]["imageUrl"] ?>"></span>
                        <span>Gem Grab</span>
                    </a>
                </li>
                <li id="knockoutTab">
                    <a onclick="switchToKnockout()">
                        <span class="icon is-small"><img src="<?php echo $knockoutMaps[0]["gameMode"]["imageUrl"] ?>"></span>
                        <span>Knockout</span>
                    </a>
                </li>
                <li id="brawlBallTab">
                    <a onclick="switchToBrawlBall()">
                        <span class="icon is-small"><img src="<?php echo $brawlBallMaps[0]["gameMode"]["imageUrl"] ?>"></span>
                        <span>Brawl Ball</span>
                    </a>
                </li>
                <li id="bountyTab">
                    <a onclick="switchToBounty()">
                        <span class="icon is-small"><img src="<?php echo $bountyMaps[0]["gameMode"]["imageUrl"] ?>"></span>
                        <span>Bounty</span>
                    </a>
                </li>
                <li id="heistTab">
                    <a onclick="switchToHeist()">
                        <span class="icon is-small"><img src="<?php echo $heistMaps[0]["gameMode"]["imageUrl"] ?>"></span>
                        <span>Heist</span>
                    </a>
                </li>
                <li id="soloShowTab">
                    <a onclick="switchToSoloShow()">
                        <span class="icon is-small"><img src="<?php echo $soloShowndownMaps[0]["gameMode"]["imageUrl"] ?>"></span>
                        <span>Solo Showdown</span>
                    </a>
                </li>
                <li id="duoShowTab">
                    <a onclick="switchToDuoShow()">
                        <span class="icon is-small"><img src="<?php echo $duoShowdownMaps[0]["gameMode"]["imageUrl"] ?>"></span>
                        <span>Duo Showdown</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div id="gemGrabContent">
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/table/maps/gemGrabTable.php"); ?>
        </div>

        <div id="knockoutContent" class="is-hidden">
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/table/maps/knockoutTable.php"); ?>
        </div>

        <div id="brawlBallContent" class="is-hidden">
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/table/maps/brawlBallTable.php"); ?>
        </div>

        <div id="bountyContent" class="is-hidden">
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/table/maps/bountyTable.php"); ?>
        </div>

        <div id="heistContent" class="is-hidden">
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/table/maps/heistTable.php"); ?>
        </div>

        <div id="soloShowContent" class="is-hidden">
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/table/maps/soloShowTable.php"); ?>
        </div>

        <div id="duoShowContent" class="is-hidden">
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/table/maps/duoShowTable.php"); ?>
        </div>

    </div>
</body>

</html>