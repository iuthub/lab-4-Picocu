<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Music Viewer</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="viewer.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		
		<div id="header">

			<h1>190M Music Playlist Viewer</h1>
			<h2>Search Through Your Playlists and Music</h2>
		</div>
		

		<div id="listarea">
			<ul id="musiclist">
				<?php 
 		if(isset($_REQUEST['playlist'])){       //use isset() to avoid an error
    	if($_REQUEST['playlist'] == "playlist.txt"){

    		 $fh = fopen('songs/playlist.txt','r');
			while ($line = fgets($fh)) {
 			 // <... Do your work with the line ...>
				echo  "<li class =\"mp3item\"><a href =\"songs/".$line."\">".$line."</a></li>";

			}
			fclose($fh);

   		 }else if($_REQUEST['playlist'] == 'mypicks.txt'){

       		 $fh = fopen('songs/mypicks.txt','r');
			while ($line = fgets($fh)) {
 			 // <... Do your work with the line ...>
				echo  "<li class =\"mp3item\"><a href =\"songs/".$line."\">".$line."</a></li>";

			}
			fclose($fh);
  		 }else if($_REQUEST['playlist'] == '190M Mix.txt'){
  		 	$fh = fopen('songs/190M Mix.txt','r');
			while ($line = fgets($fh)) {
 			 // <... Do your work with the line ...>
				echo  "<li class =\"mp3item\"><a href =\"songs/".$line."\">".$line."</a></li>";

			}
			fclose($fh);

  		 }else{
  		 	echo "<h1>No such kinda file</l1>";
  		 }

			} 
			else{
				foreach (glob("songs/*.mp3") as $filename) {
			  	  echo  "<li class =\"mp3item\"><a href =\"songs/".basename($filename, ".mp3").".mp3\">".basename($filename, ".mp3").".mp3</a></li>";
				}
				foreach (glob("songs/*.txt") as $filename) {
			  	  echo  "<li class =\"playlistitem\"><a href =\"songs/".basename($filename, ".txt").".txt\">".basename($filename, ".mp3")."</a></li>";
				}

			}
		 ?>
				<!-- <?php
				foreach (glob("songs/*.mp3") as $filename) {
			  	  echo  "<li class =\"mp3item\"><a href =\"songs/".basename($filename, ".mp3").".mp3\">".basename($filename, ".mp3").".mp3</a></li>";
				}
				?>
				<?php
				foreach (glob("songs/*.txt") as $filename) {
			  	  echo  "<li class =\"playlistitem\"><a href =\"songs/".basename($filename, ".txt").".txt\">".basename($filename, ".mp3")."</a></li>";
				}
				?>
 -->

				<!-- <li class="mp3item">
					<a href="songs/Be More.mp3">Be More.mp3</a>
					(5438375 b)
				</li>

				<li class="mp3item">
					<a href="songs/Drift Away.mp3">Drift Away.mp3</a>
					(5724612 b)
				</li>

				<li class="mp3item">
					<a href="songs/Hello.mp3">Hello.mp3</a>

					(1871110 b)
				</li>

				<li class="mp3item">
					<a href="songs/Panda Sneeze.mp3">Panda Sneeze.mp3</a>
					(58 b)
				</li>

				<li class="playlistitem">
					<a href="music.php?playlist=mypicks.txt">mypicks.txt</a>
				</li>

				<li class="playlistitem">
					<a href="music.php?playlist=playlist.txt">playlist.txt</a>
				</li> -->
			</ul>
		</div>
	</body>
</html>
