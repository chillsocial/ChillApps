<?php
file_put_contents("repo.txt",'https://raw.githubusercontent.com/'.$_GET['r'].'/main/');
header("Location: menu.php");
die();
?>