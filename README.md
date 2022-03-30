# Chill Apps
This repo hosts Chill-created apps you can install to the Chill App Manager. This README is a guide on how to develop your own apps.
## The Basics
Every app is a folder with the app's name. Inside the folder is at least two things...
- A `preload.txt`, and
- A startup file.

If your app contains more than one file, it can be in this folder.
### The `preload.txt`
The `preload.txt` file is inside your app's folder. Here's an empty template of this file...
```
{"preIcon":"","preBanner":"","preAltTxt":"","startFile":"","preMusicTrack":"","preMusicType":""}
```
Here's the `preload.txt` for the Roblox channel...
```
{"preIcon":"https://cdn.jsdelivr.net/gh/chillsocial/ChillApps@main/Roblox/icon.png","preBanner":"https://cdn.jsdelivr.net/gh/chillsocial/ChillApps@main/Roblox/banner.jpg","preAltTxt":"Roblox","startFile":"index.php","preMusicTrack":"https://cdn.jsdelivr.net/gh/chillsocial/ChillApps@main/Roblox/audio.mp3","preMusicType":"mp3"}
```
- `preIcon` is your app's icon. This will appear on the main menu. This will be scaled down to `100px x 100px`.
- `preBanner` is your app's banner. This will appear on the preload screen (the screen where you can start your app). This will be scaled down to `100% x 90%`.
- `preAltTxt` is your app's name. This will appear in place of `preIcon` on the main menu in case the image for `preIcon` is unavalible. This will be scaled down to a box with the dimensions `100px x 100px`.
- `preMusicTrack` is an audio file that will play in the background when you're on the preload screen. This will play until the track ends, then it will loop.
- `startFile` is the file that will run on start. It can be `html`, `php`, `htm`, any bootable file. This must be a file in your app folder, not a link.
- `preMusicType` is the ending of the music file (for example, `mp3`). This is needed otherwise the App Manager will not know what audio track type it is.

## Deploying Your App
### Through The Chill Store (Public)
#### Classic
You will need a Github repo. In the main folder of the repo (not your app folder!), you need to make a `contents.txt` file. Lets assume you're making an app called `Testing` and you're only making that one app. Your `contents.txt` file will look like this...
```
{
  "Testing":"Testing/installer.php"
}
```
Then, make a folder called `Testing`. Inside that folder, make another folder called `source`. Your `preload.txt`, startup file and all other app files should be in that folder. Outside that folder, make a `installer.php` file. Assuming you only have the startup and preload file, this is your `installer.php`...

Make sure you replace `chillsocial/ChillApps` in `$chillRepo` with your repo!!
```
<?php
if (!file_exists('../Testing')) {
    $storePath = '../Testing';
    mkdir($storePath, 0777, true);
    $chillRepo = 'https://raw.githubusercontent.com/chillsocial/ChillApps/main/';
  file_put_contents($storePath.'/index.php', file_get_contents($chillRepo.'Testing/source/index.php'));
  file_put_contents($storePath.'/preload.txt', file_get_contents($chillRepo.'Testing/source/preload.txt'));
  header("Location: menu.php?e=App setup complete!");
  die();
}else{
  header("Location: menu.php?e=You already installed this app!");
  die();
}
?>
```
Now, let's say you want to have more than one file. You'd just add a new `file_put_contents` line like this...

Make sure you replace `chillsocial/ChillApps` in `$chillRepo` with your repo!!
```
<?php
if (!file_exists('../Testing')) {
    $storePath = '../Testing';
    mkdir($storePath, 0777, true);
    $chillRepo = 'https://raw.githubusercontent.com/chillsocial/ChillApps/main/';
  file_put_contents($storePath.'/index.php', file_get_contents($chillRepo.'Testing/source/index.php'));
  file_put_contents($storePath.'/anotherfile.php', file_get_contents($chillRepo.'Testing/source/anotherfile.php'));
  file_put_contents($storePath.'/preload.txt', file_get_contents($chillRepo.'Testing/source/preload.txt'));
  header("Location: menu.php?e=App setup complete!");
  die();
}else{
  header("Location: menu.php?e=You already installed this app!");
  die();
}
?>
```
Now, in the Store channel, enter your repository and click `Testing/install.php`.
#### New (Coming Soon!)
Follow the same directions as the Classic one, however there will be some upcoming changes! Let's say you have an app called `Testing` and your `installer.php` file is in a folder named `lol`. Your `contents.txt` would look something like this...
```
{
  "Testing":"lol"
}
```
You will still need your `installer.php`, however instead of declaring the file you're declaring the directory the file is in.

You will also need to create a `info.txt` file in the same directory as the `installer.php`. This contains information about your app and when your user clicks on your app to try to install it they'll see this. The `info.txt` must contain HTML code. Here's an example...
```
<h3>This is Testing.</h3>
<h4>A cool app by @chillsocial on Github!</h4>
<p>Here's some info about my app. Blah blah blah</p>
/// You can add any HTML to this file, basically.
```
### Locally (Private, Testing)
In the `C:\xampp\htdocs\apps` folder, make a new folder with your apps name. Inside that folder should be the `preload.txt`, startup file and all other files you want for your app.
