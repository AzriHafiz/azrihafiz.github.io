<?php
$opts = ['http' => ['method' => 'GET', 'header' => ['User-Agent: PHP']]];
$context = stream_context_create($opts);
$json = file_get_contents("https://api.github.com/repos/AzriHafiz/Prodigy/commits", false, $context);
$obj = json_decode($json, true);
?>
<table>
<?php foreach ($obj as $o) { ?>
    <tr>
        <td><?php echo $o["sha"]; ?></td>
        <td><?php echo $o["commit"]["author"]["name"]; ?></td>
        <td><?php echo $o["commit"]["author"]["email"]; ?></td>
        <td><?php echo $o["commit"]["message"]; ?></td>
    </tr>
<?php } ?>
</table>