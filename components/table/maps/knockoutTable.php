<table class="table is-bordered is-striped is-fullwidth is-hoverable">
<tr> <th>Map Name</th> <th>Image</th> </tr>
<?php 
include_once($_SERVER['DOCUMENT_ROOT'] . "/api/mapAPI.php");
foreach ($knockoutMaps as $m ) {
    echo '<tr>';
    echo '<td>' .$m["name"] . '</td>';
    echo '<td> <img src="'. $m["imageUrl"] .'" width=300 height= 200> </td>';
    echo '</tr>';
}
?>
</table>