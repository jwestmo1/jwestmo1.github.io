<?php
  include('header.php');
?>


	<!-- dynamic content goes here -->

	<?php
		$sPage = $_GET["p"];
		//echo ("You picked the page: " . $sPage);

		if($sPage == "") {  $sPage = "home.php"; }
		include($sPage);
	?>



<?php
  include('footer.php');
?>
