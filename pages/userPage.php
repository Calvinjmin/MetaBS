<html>
<?php include("../components/navbar/mainNavbar.php") ?>

<body>
    <link rel="stylesheet" href="/CSS/body.css" type="text/css">
    <p>User Page</p>
    <div class="container content has-text-centered" style="height: 95%;">
        <?php
        echo $_SESSION["username"];
        ?>
    </div>
</body>

</html>