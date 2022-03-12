<?php
  include('header.php');
?>

	<!--<hr /> -->
	<!-- dynamic content goes here -->

	<?php
		$sPage = $_GET["p"];
		//echo ("You picked the page: " . $sPage);

		if($sPage == "") {  $sPage = "home.php"; }
		include($sPage);
	?>


<!--<hr /> -->
<?php
  include('footer.php');
?>
