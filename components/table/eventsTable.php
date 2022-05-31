<!-- Grabs Active + Upcoming Events -->
<?php include_once("./api/eventsAPI.php") ?>

<div class="bodyMap">
    <div class="container content has-text-centered">

        <!-- Prints Current Date -->
        <p class="subtitle">
            <strong>
                <?php
                echo 'Events on ' . date('l jS \of F Y');
                echo '<br>';
                ?>
            </strong>
        </p>

        <!-- Column Container (Bulma) -->
        <div class="columns is-centered" style="padding-top: 1%; ">
            <?php
            for ($x = 0; $x < sizeof($activeEvents); $x += 2) {
                $ae1 = $activeEvents[$x];
                $ae2 = $activeEvents[$x + 1];

                echo '<div class =column>';

                echo '<div class=card>';
                echo '<div class="card-header">' . $ae1["map"]["gameMode"]["name"]. ' | '. $ae1["map"]["name"] . '</div>';
                echo '<div class="card-image"> 
                            <img src=' . $ae1["map"]["imageUrl"] . ' width=172.5 height=262.5> 
                      </div>';
                echo '</div>';


                echo '<div class=card style="margin-top: 5%">';
                echo '<div class="card-header">' . $ae1["map"]["gameMode"]["name"]. ' | '. $ae1["map"]["name"] . '</div>';
                echo '<div class="card-image"> 
                            <img src=' . $ae1["map"]["imageUrl"] . ' width=172.5 height=262.5> 
                      </div>';
                echo '</div>';

                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>