<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/database/forumQuery.php");
?>
<div class="container content has-text-centered" style="padding-top:2.5%;">
    <div class="tile is-ancestor is-vertical">
        <?php
        for ($i = 0; $i < sizeof($forumSelectAllData); $i++) {
            $thread = $forumSelectAllData[$i];
            $timestamp = strtotime($thread["time_created"]);
            if ($i % 3 == 0) {
                echo '<div class="tile is-parent">';
                displayForum($forumSelectAllData[$i], $timestamp);
            } else {
                displayForum($forumSelectAllData[$i], $timestamp);
            }

            if ( ($i + 1) % 3 == 0 ) {
                echo '</div>';
            }
        }
        ?>
    </div>
</div>

<?php
function displayForum($forumPost, $timestamp)
{
    echo '<div class="tile notification is-child">';
    echo '<article>
        <p class="title">' . $forumPost["title"] . '</p>
        <p class="subtitle"> @' . $forumPost["author"] . ' | ' . date("m-d-Y", $timestamp) . '</p>
        <p>' . $forumPost["text"] . '</p>
        ';
    echo '
        <form>
            <div class="field">
                <textarea class="textarea" id="postText" name="postText" placeholder="e.g. Hello world"></textarea>
            </div>
            <button class="button is-small is-rounded is-success">Reply</button>
        </form>
    </article>';
    echo '</div>';
}
?>