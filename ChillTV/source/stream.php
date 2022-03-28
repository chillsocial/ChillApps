<title>Chill TV | Menu</title>
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
<h1>Chill TV</h1>
<h4>Connected to CDN <?php
echo $_COOKIE['cdn'];
?> <a href="setcdn.php">Change CDN?</a></h4>
<?php
error_reporting(0);
if(isset($_COOKIE['cdn'])){
error_reporting(0);
$string = file_get_contents($_COOKIE['cdn']);
preg_match_all('/(?P<tag>#EXTINF:-1)|(?:(?P<prop_key>[-a-z]+)=\"(?P<prop_val>[^"]+)")|(?<something>,[^\r\n]+)|(?<url>http[^\s]+)/', $string, $match );
$count = count( $match[0] );
$result = [];
$index = -1;
for( $i =0; $i < $count; $i++ ){
    $item = $match[0][$i];
    if( !empty($match['tag'][$i])){
        ++$index;
    }elseif( !empty($match['prop_key'][$i])){
        $result[$index][$match['prop_key'][$i]] = $match['prop_val'][$i];
    }elseif( !empty($match['something'][$i])){
        $result[$index]['something'] = $item;
    }elseif( !empty($match['url'][$i])){
        $result[$index]['url'] = $item ;
    }
}
foreach ($result as $value) {
	if(isset($value['tvg-name']) && isset($value['url'])){
		echo '<a href="feed.php?v='.urlencode($value['url']).'" target="_blank"; return false;"><img src="'.$value['tvg-logo'].'" alt="'.$value['tvg-name'].'" width="100" height="100"></a>';
	}
}
}else{
	header("Location: setcdn.php");
	die();
}
?>