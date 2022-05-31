<?php
// Begins PHP Session
if (!isset($_SESSION)) {
    session_start();

    if (!isset($_SESSION["username"])) {
        $_SESSION["username"] = "";
    }
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<nav class="navbar" role="navigation" aria-label="main navigation">

    <!-- METABS IMAGE BRAND  -->
    <div class="navbar-brand">
        <img src="https://i.ibb.co/dBvVJCg/94ee69c06e464d8897a0e5427a68e716.png" width="59.18" height="50">
        <a href="/index.php" class="navbar-item">
            Home
        </a>
    </div>

    <!-- Navigation Bar  -->
    <div class="navbar-menu is-active">

        <!-- Links -->
        <div class="navbar-start">
            <a href="/pages/aboutPage.php" class="navbar-item">
                About
            </a>

            <a href="/pages/brawlerInfoPage.php" class="navbar-item">
                Brawlers
            </a>

            <a href="/pages/mapInfoPage.php" class="navbar-item">
                Maps
            </a>

            <a href="/pages/forum/forumLandingPage.php" class="navbar-item">
                Forum
            </a>

        </div>

        <!-- Dropdown Menu (Users) -->
        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <p class="navbar-link">
                    <?php
                    if (!$_SESSION["username"]) {
                        echo 'Welcome!';
                    } else {
                        echo $_SESSION["username"];
                    }
                    ?>
                </p>
                <div class="navbar-dropdown">
                    <?php
                    if ($_SESSION["username"]) {
                        echo '<a href="/pages/user/userPage.php" class="navbar-item">Account</a>';
                        echo '<a href="/endpoints/logout.php" class="navbar-item">Logout</a>';
                    } else {
                        echo '<a href="/pages/user/loginPage.php" class="navbar-item">Login</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</nav>