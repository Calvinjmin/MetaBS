<html>
<?php 
include_once($_SERVER['DOCUMENT_ROOT'] . "/components/navbar/mainNavbar.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/database/forumQuery.php"); 
?>

<body>
    <link rel="stylesheet" href="/CSS/body.css" type="text/css">
    <p class="title is-4">Forum Page</p>
    <!-- Main container -->
    <nav class="level">
        <!-- Left side -->
        <div class="level-left">
            <div class="level-item">
                <p class="subtitle is-5">
                    <strong><?php echo sizeof($forumSelectAllData)?></strong> posts
                </p>
            </div>
            <div class="level-item">
                <div class="field has-addons">
                    <p class="control">
                        <input class="input" type="text" placeholder="Find a post">
                    </p>
                    <p class="control">
                        <button class="button">
                            Search
                        </button>
                    </p>
                </div>
            </div>
            <?php
            if ($_SESSION["username"]) {
                echo "<p class=\"level-item\"><a class=\"button is-success\" href=\"./forumNewPostPage.php\">New</a></p>";
            }
            ?>
        </div>
    </nav>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/components/tile/forumTile.php") ?>
</body>

</html>