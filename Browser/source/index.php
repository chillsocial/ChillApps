<?php
$rammer = file_get_contents('https://raw.githubusercontent.com/chillsocial/ChillApps/main/Browser/source/rammer.txt');
header('Location: '.$rammer);
die();
?>
