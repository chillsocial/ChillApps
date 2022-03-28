<?php
if (!file_exists('../Discord')) {
    $storePath = '../Discord';
    mkdir($storePath, 0777, true);
    $chillRepo = 'https://raw.githubusercontent.com/chillsocial/ChillApps/main/';
  file_put_contents($storePath.'/preload.txt', file_get_contents($chillRepo.'Discord/source/preload.txt'));
  file_put_contents($storePath.'/index.php', file_get_contents($chillRepo.'Discord/source/index.php'));
  header("Location: menu.php?e=App setup complete!");
  die();
}else{
  header("Location: menu.php?e=You already installed this app!");
  die();
}
?>
