<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/database/forumQuery.php");
?>
<div class="container content has-text-centered" style="height: 95%; padding-top:2.5%;">
    <div class="tile is-ancestor is-primary">
        <?php
        foreach ($forumSelectAllData as $fd) {
            echo '<div class="tile">';
            echo    '<article class="tile is-child ">
                        <p class="title">' . $fd["title"] . '</p>
                        <p class="subtitle">' . $fd["author"] . '</p>
                        <p>Date Created:'.$fd["time_created"].'</p>
                        <p>' . $fd["text"] . '</p>
                    </article>';
            echo '</div>';
        }
        ?>
    </div>
</div>