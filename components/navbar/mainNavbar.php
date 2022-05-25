<?php
session_start();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<nav class="navbar" role="navigation" aria-label="main navigation">

    <!-- LEON IMAGE BRAND  -->
    <div class="navbar-brand">
        <img src="https://brawlstarsup.com/wp-content/uploads/2018/12/leon.png" width="59.18" height="50">

        <a href="/index.php" class="navbar-item">
            Meta BS
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

            <a href="/pages/forumIndexPage.php" class="navbar-item">
                Forum
            </a>
        </div>

        <!-- Dropdown Menu (Users) -->
        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a href="/pages/loginPage.php" class="navbar-link">
                    <?php
                    if (!$_SESSION["username"]) {
                        echo 'Welcome!';
                    } else {
                        echo $_SESSION["username"];
                    }
                    ?>
                </a>
                <div class="navbar-dropdown">
                    <?php
                    if ($_SESSION["username"]) {
                        echo '<a href="/pages/userPage.php" class="navbar-item">Account</a>';
                        echo '<a href="/endpoints/logout.php" class="navbar-item">Logout</a>';
                    } else {
                        echo '<a class="navbar-item">Sign Up</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</nav>