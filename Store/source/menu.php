<title>Chill App Store</title>
<head>
<style>
body {
  background-color: black;
  color: white;
  font-family: Arial, Helvetica, sans-serif;
}

a:link {
  color: white;
}

a:visited {
  color: white;
}

a:hover {
  color: white;
}

a:active {
  color: white;
}
</style>
</head>
<body>
<center>
<h1>Chill App Store</h1>
<?php
if(!file_exists("repo.txt")){
	echo '<h2>Set the Store Repository</h2><p>Enter the Github repository you want to get Chill Apps from, or <a href="setrepo.php?r=chillsocial/ChillApps">click here to connect to the official Chill Apps Repo</a>. You can change the repo later.</p><form action="setrepo.php" method="get">
<input type="text" name="r" id="r" value="chillsocial/ChillApps" required><input type="submit" value="Connect">
</form>
';
	
}else{
	if(isset($_GET['e'])){
		echo $_GET['e'];
	}
	$r = file_get_contents("repo.txt");
	echo '<p>Connected to repo <b>'.$r.'</b>. Want to change it?</p><form action="setrepo.php" method="get">
<input type="text" name="r" id="r" value="chillsocial/ChillApps" required><input type="submit" value="Connect">
</form>';
	echo '<p>Click the app you want to install to install it to Chill Apps!</p></center><ul>';
	$appList = file_get_contents($r.'contents.txt');
	$j = json_decode($appList);
	foreach ($j as $value) {
		echo '<li><a href="dl.php?a='.$value.'">'.$value.'</a></li>';
	}
	echo '</ul>';
}
?>
