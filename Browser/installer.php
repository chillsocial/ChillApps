<?php
if (!file_exists('../Browser')) {
    $storePath = '../Browser';
    mkdir($storePath, 0777, true);
    $chillRepo = 'https://raw.githubusercontent.com/chillsocial/ChillApps/main/';
  file_put_contents($storePath.'/preload.txt', file_get_contents($chillRepo.'Browser/source/preload.txt'));
  file_put_contents($storePath.'/index.php', file_get_contents($chillRepo.'Browser/source/index.php'));
  header("Location: menu.php?e=App setup complete!");
  die();
}else{
  header("Location: menu.php?e=You already installed this app!");
  die();
}
?>
