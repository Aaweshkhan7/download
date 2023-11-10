<?php
define('BUFSIZ', 4095);
$url = 'https://sports.avrkhub.xyz/Pathaan%2520%282023%29%2520Hindi%2520720p%2520HEVC%2520WEBDL%2520ESub%2520%5BBollyFlix%5D.m3u8'; 
$rfile = fopen($url, 'r');
$lfile = fopen(basename($url), 'w');
while(!feof($rfile))
fwrite($lfile, fread($rfile, BUFSIZ), BUFSIZ);
fclose($rfile);
fclose($lfile);
?>
