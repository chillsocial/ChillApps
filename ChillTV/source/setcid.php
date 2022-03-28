<?php
if(isset($_POST['cdn'])){
	setcookie("cdn", 'https://raw.githubusercontent.com/iptv-restream/iptv-channels/master/channels/'.$_POST['cdn'].'.m3u', time()+31536000,'/');
	header("Location: index.php");
	die();
}
?>