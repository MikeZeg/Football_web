<!DOCTYPE HTML>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<title> Boldly	Eagles</title>
	<meta name="description" content="The best of the best of best... Football players, ever!!">
	<meta name="keywords" content="football, football team, The best of the best, The best, The best of, goals, goalsfootball">
	<meta name="author" content="Semanoid">

	<meta http-equiv="X-UA-Compatible" content= "IE=edge, chrome=1"/>
<!--Change web proportions, for different devices -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!--CSS link -->
	<link rel="stylesheet" href="style_media.css" type="text/css"/>
<!--JavaScript link -->
	<script src="js.js" ></script>
<!--Font link -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,800&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/d28abac972.js" crossorigin="anonymous"></script>

</head>
<body>
	<header>
		<div id="logo" ><a href="index.html"><img src="img/logo.png" alt="Boldly	Eagles"></a></div>
			<div class="nav" id="club1"><a href='club.html'alt="Club">Club</a></div>
			<div class="nav"><a href='players.html'>Players</a></div>
			<div class="nav"><a href='stadium.html'>Stadium</a></div>
			<div id="small_logo"></div><!-- Add extra logo-->
			<div class="nav"><a href='#'>Media</a></div>
			<div class="nav"><a href='#'>Shop</a></div>
			<div class="nav"><a href='#'>Sponsor</a></div>
			<div id="sponsor">
					<a href='#' target='_blank'><img src="img/SP.png" alt="Sponsors"></a>
				</div>
		</header>

	<div class="last"></div><!--use for clear float -->
<main>
	<article>
		<div id="container">


		</div>
	</article>
</main>
<div id="add_img_window">
	<form action="media.html" enctype="multipart/form-data" method="post">
		<input type="hidden" name="MAX_FILE_SIZE" value="5000000"/>
		<input name="send_img_x" type="file"/>
		<input type="submit" value="Send file."/>
	</form>
<?php
			include("download_img.php")
?>


</div>
<footer>
		<div id="facebook"><a href="#"target='_blank'><i class="fab fa-facebook-f"></i></a></div>
		<div id="twitter"><a href="#"target='_blank'><i class="fab fa-twitter"></i></a></div>
		<div id="youtube"><a href="#"target='_blank'><i class="fab fa-youtube"></i></a></div>
		<div id="instagram"><a href="#"target='_blank'><i class="fab fa-instagram"></i></a></div>

		<div id="footer">Boldly	Eagles. &copy; All rights reserved</div>
		<div class="last"> </div><!--use for clear float -->
</footer>
</body>
</html>
