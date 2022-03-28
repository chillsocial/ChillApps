<title>Chill TV | Set/Change CDN</title>
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
<h2>One last step! Please set a CDN.</h2>
<p>If you don't have an M3U URL or a M3U file saved to a server path, you can use a preset from the dropdown. Feel free to experiment and change the CDN, you can always change it later. After setting a CDN, your instance of Chill TV will restart.</p>

<?php
if(isset($_POST['cdn'])){
	setcookie("cdn", $_POST['cdn'], time()+31536000,'/');
	header("Location: index.php");
	die();
}else{
	setcookie("cdn", 'unsat', time()-31536000,'/');
echo '<form action="setcid.php" method="post">
<label for="cdn">Enter your lowercase two-letter CountryID to use IPTV-Restream CDN (for example, United States is <b>us</b> and United Kingdon is <b>uk</b>): </label>
<input type="text" name="cdn" id="cdn" minlength="2" maxlength="2" required>
<input type="submit" value="Set IPTV-Restream CDN">
</form>
<form action="setcdn.php" method="post">
<label for="cdn">Or select a presat CDN:</label>
<select name="cdn" id="cdn" required>
  <option value="https://raw.githubusercontent.com/Free-TV/IPTV/master/playlist.m3u8">Free-TV/IPTV (Global)</option>
  <option value="https://raw.githubusercontent.com/Free-IPTV/Countries/master/US01_USA.m3u">Free-IPTV/Countries (US-General)</option>
  <option value="https://raw.githubusercontent.com/Free-IPTV/Countries/master/US02_USA_Local.m3u">Free-IPTV/Countries (US-Local)</option>
  <option value="https://raw.githubusercontent.com/Free-IPTV/Countries/master/US08_USA_Redbox.m3u">Free-IPTV/Countries (US-RedBox)</option>
  <option value="https://raw.githubusercontent.com/Free-IPTV/Countries/master/US12_USA_Filmrise.m3u">Free-IPTV/Countries (US-FilmRise)</option>
  <option value="https://raw.githubusercontent.com/Free-IPTV/Countries/master/US13_USA_Bumblebee.m3u">Free-IPTV/Countries (US-Bumblebee)</option>
  <option value="https://raw.githubusercontent.com/Free-IPTV/Countries/master/US14_USA_UDU_TV.m3u">Free-IPTV/Countries (US-UduTV)</option>
  <option value="https://raw.githubusercontent.com/Free-IPTV/Countries/master/US16_USA_GINIKO.m3u">Free-IPTV/Countries (US-Ginko)</option>
  </select>
<input type="submit" value="Select Presat CDN">
</form>
<form action="setcdn.php" method="post">
Or enter a M3U URL / Server Path here: <input type="url" name="cdn" id="cdn" required>
<input type="submit" value="Set M3U URL as CDN">
</form>';
}
?>