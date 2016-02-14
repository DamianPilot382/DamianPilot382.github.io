<?php

$musicDir = 'music/';
$songs = glob($musicDir . '*.{mp3}', GLOB_BRACE);
$song = $songs[array_rand($songs)];
echo "<audio src=\"".$song."\" autoplay=\"true\" hidden=\"true\" loop=\"true\" control></audio>";
?>
