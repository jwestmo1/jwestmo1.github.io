<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Jen Westmoreland - Web 250 - The Quokka's Guide to Happiness</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>

<body>


	<header>
		<div class="main-header">
		<a href="index.php" >
			<div class="logo">
				<img src="images/quokkaClearBkgrdNoWords150x150.png" alt="The Quokka's Guide to Happiness logo" class="logo">
			</div>
			<div class="brand-name name">
				The Quokka's Guide to Happiness
			</div>
			<div class="brand-name taglinehead">
				<em>How to Be Happy No Matter Your Circumstances</em>
			</div>
		</a>
		</div>

		<nav>
			<a href="?p=contents/web250_introduction.php">Introduction</a>
			<a href="?p=contents/web250_contract.php">Contract</a>
			<a href="?p=contents/web250_brand.php">Brand Guide</a>
		</nav>

	</header>

	<!--<hr /> -->
	<!-- dynamic content goes here -->

	<?php
		$sPage = $_GET["p"];
		//echo ("You picked the page: " . $sPage);

		if($sPage == "") {  $sPage = "contents/home.php"; }
		include($sPage);
	?>


<!--<hr /> -->
	<footer>
		<p><a href="https://github.com/jwestmo1">Github</a> |
			<a href="https://jwestmo1.github.io/">Github Pages</a> |
			<a href="https://www.codecademy.com/profiles/method6099084112">Codecademy</a> |
			<a href="https://www.freecodecamp.org/jwestmore1">FreeCodeCamp</a> |
			<a href="https://jsfiddle.net/user/jwestmo1/fiddles/">JSFiddle</a> |
			<a href="https://www.linkedin.com/in/jen-westmoreland-17a06b10/">LinkedIn</a> |
			<a href="http://jwestmo1.infinityfreeapp.com/">PHP Site</a>
		</p>
		<p>©2022 - Made with ❤️ by East-Less-Sea Designs</p>

	<a href="http://validator.w3.org/check?uri=referer" id="validation_link">Validate HTML</a>
		<a href="https://jigsaw.w3.org/css-validator/check/referer?uri=" id="validation_link">Validate CSS</a>


	</footer>

</body>

</html>