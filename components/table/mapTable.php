<p class="bodyText">
<?php
echo date('l jS \of F Y');
foreach ($mapData as $md ) {
    echo '<p>' . $md["name"] . '</p>';
}
?>
</p>