<?php

$musicDir = 'music/';
$songs = glob($musicDir . '*.{mp3}', GLOB_BRACE);
$song = $songs[array_rand($songs)];
echo "<audio controls autoplay=\"true\" loop=\"true\">
  <source src=\"".$song."\" type=\"audio/mpeg\">
  Your browser does not support the audio element.
</audio>"

?>
