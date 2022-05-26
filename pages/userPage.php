<html>
<?php include("../components/navbar/mainNavbar.php") ?>

<body>
    <link rel="stylesheet" href="/CSS/body.css" type="text/css">
    <div class="container content has-text-centered" style="height: 95%; padding-top:2.5%;">
        <div class="card">
            <div class="card-image">
                <img src="https://i.ibb.co/dBvVJCg/94ee69c06e464d8897a0e5427a68e716.png" alt="Placeholder image" width="500" height="500">
            </div>
            <div class="card-content">
                <div class="media-content">
                    <p class="title is-4"><?php
                                            echo ucfirst(strtolower($_SESSION["firstName"]));
                                            echo "\t";
                                            echo ucfirst(strtolower($_SESSION["lastName"]));
                                            ?></p>
                    <p class="subtitle is-6">
                        <?php
                        echo "@" . $_SESSION["username"];
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>