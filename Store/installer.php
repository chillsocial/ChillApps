<?php
if (!file_exists('../Store')) {
    $storePath = '../Store';
    mkdir($storePath, 0777, true);
  file_put_contents($storePath.'/dl.php', file_get_contents(file_get_contents('repo.txt').'Store/source/dl.php'));
  file_put_contents($storePath.'/index.php', file_get_contents(file_get_contents('repo.txt').'Store/source/index.php'));
  file_put_contents($storePath.'/menu.php', file_get_contents(file_get_contents('repo.txt').'Store/source/menu.php'));
  file_put_contents($storePath.'/preload.txt', file_get_contents(file_get_contents('repo.txt').'Store/source/preload.txt'));
  file_put_contents($storePath.'/setrepo.php', file_get_contents(file_get_contents('repo.txt').'Store/source/setrepo.php'));
  header("Location: menu.php?e=App setup complete!");
  die();
}else{
  header("Location: menu.php?e=You already installed this app!");
  die();
}
?>
