<?php
file_put_contents("tempInstaller.php",file_get_contents(file_get_contents("repo.txt").$_GET['a']));
header("Location: tempInstaller.php");
die();
?>