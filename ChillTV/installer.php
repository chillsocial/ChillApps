<?php
if (!file_exists('../ChillTV')) {
    $storePath = '../ChillTV';
    mkdir($storePath, 0777, true);
    $chillRepo = 'https://raw.githubusercontent.com/chillsocial/ChillApps/main/';
  file_put_contents($storePath.'/feed.php', file_get_contents($chillRepo.'ChillTV/source/feed.php'));
  file_put_contents($storePath.'/index.php', file_get_contents($chillRepo.'ChillTV/source/index.php'));
  file_put_contents($storePath.'/loading.jpg', file_get_contents($chillRepo.'ChillTV/source/loading.jpg'));
  file_put_contents($storePath.'/preload.txt', file_get_contents($chillRepo.'ChillTV/source/preload.txt'));
  file_put_contents($storePath.'/setcdn.php', file_get_contents($chillRepo.'ChillTV/source/setcdn.php'));
  file_put_contents($storePath.'/setcid.php', file_get_contents($chillRepo.'ChillTV/source/setcid.php'));
  file_put_contents($storePath.'/stream.php', file_get_contents($chillRepo.'ChillTV/source/stream.php'));
  header("Location: menu.php?e=App setup complete!");
  die();
}else{
  header("Location: menu.php?e=You already installed this app!");
  die();
}
?>
