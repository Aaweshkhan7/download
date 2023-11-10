<?php
define('BUFSIZ', 4095);
$url = 'https://filestreambot-pradarsh12.koyeb.app/13903/codecanyon_20759294_playtube_the_ultimate_php_video_sharing_platform.zip?hash=AgADMQ'; 
$rfile = fopen($url, 'r');
$lfile = fopen(basename($url), 'w');
while(!feof($rfile))
fwrite($lfile, fread($rfile, BUFSIZ), BUFSIZ);
fclose($rfile);
fclose($lfile);
?>