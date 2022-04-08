<?php
  include('header.php');
  include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
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
