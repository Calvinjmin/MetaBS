<!-- Grabs Active + Upcoming Events -->
<?php include_once("./api/eventsAPI.php") ?>

<div class="bodyMap">
    <div class="container content has-text-centered">

        <!-- Prints Current Date -->
        <p>
            <?php
            echo 'Events on ' . date('l jS \of F Y');
            echo '<br>';
            ?>
        </p>

        <!-- Column Container (Bulma) -->
        <div class="columns is-centered" style="padding-top: 1%; ">
            <?php
            for ($x = 0; $x < sizeof($activeEvents); $x += 2) {
                $ae1 = $activeEvents[$x];
                $ae2 = $activeEvents[$x + 1];

                echo '<div class =column>';

                echo $ae1["map"]["gameMode"]["name"];
                echo '&nbsp;&nbsp;&nbsp;&nbsp';
                echo $ae1["map"]["name"];
                echo '<br>';
                echo '<img src=' . $ae1["map"]["imageUrl"] . ' width=172.5 height=262.5></img>';
                echo '<br>';

                echo $ae2["map"]["gameMode"]["name"];
                echo '&nbsp;&nbsp;&nbsp;&nbsp';
                echo $ae2["map"]["name"];
                echo '<br>';
                echo '<img src=' . $ae2["map"]["imageUrl"] . ' width=172.5 height=262.5></img>';

                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>