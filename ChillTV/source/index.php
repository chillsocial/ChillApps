<title>Chill TV | Launching...</title>
<head>
<style>
body {
  background-color: black;
  color: white;
  font-family: Arial, Helvetica, sans-serif;
}

h1 {
	font-size: 175px;
    height: 50px;
}

h2 {
	font-size: 25px;
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
<meta http-equiv="refresh" content="4; url=<?php
if(isset($_COOKIE['cdn'])){
	echo 'stream.php';
}else{
	echo 'setcdn.php';
}
?>" />
</head>
<body>
<center>
<h1>Chill TV</h1>
<br>
<?php
$contents = file_get_contents("https://axoltlapi.herokuapp.com/");
$json = json_decode($contents);
echo '<img src="'.$json->url.'" alt="Axolotl Image" width="300" height="300"> <h2>'.$json->facts.'</h2>';
?>
<p>Enjoy this axolotl image and fact from <b>axoltlapi.herokuapp.com</b> as Chill TV boots up!</p>
</center>
</body>