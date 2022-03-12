<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Jen Westmoreland - Web 250 - The Quokka's Guide to Happiness</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>

<body>


	<header>
			<a href="index.php">
				<div class="grid">

					<div class="logo">
						<img src="images/quokkaClearBkgrdNoWords150x150.png" alt="The Quokka's Guide to Happiness logo" class="logo">
					</div>
					<div class="name">The Quokka's Guide to Happiness</div>
					<div class="taglinehead"><em>How to Be Happy No Matter Your Circumstances</em></div>

				</div>
			</a>

		<nav>
			<a href="?p=web250_introduction.php">Introduction</a>
			<a href="?p=web250_contract.php">Contract</a>
			<a href="?p=web250_brand.php">Brand Guide</a>
			<a href="?p=samsusedcars.html">Car Guide</a>
			<a href="?p=web250_oneFormTwoForm.php">One Form</a>
		</nav>

	</header>

<style>

.container {
  width: 500px;
  clear: both;
}


</style>

<h2>One Form, Two Form, Red Form, Blue Form</h2>
<h2>The Quokka's Guide to Happiness Forms</h2>
<form action="" method="post" >
		  <label for="fname">First name:</label>
		  <input type="text" id="fname" name= "fname" ><br><br>
		  <label for="lname">Last name:</label>
		  <input type="text" id="lname" name="lname"><br><br>
		  <input type="submit" name = "submit1" value="Submit">
      <br><br>
</form>

<?php
			 if (isset($_POST["submit1"]))
       {
			 $fname = $_POST["fname"];
			 $lname = $_POST["lname"];

			 echo "Your first name is ". $fname.".<br><br>";
			 echo "Your last name is ". $lname.".<br><br>";
			 }
	?>

  <hr/>

  <h2>What makes you happy?</h2>
	<h3>This form will use the post attribute</h3>
  <form action="" method="post" >
  		  <label for="fplace">Do you like the beach or the mountains?</label>
  		  <input type="text" id="fplace" name= "fplace" ><br><br>
  		  <label for="flocation">Are you a homebody or something else?</label>
  		  <input type="text" id="flocation" name="flocation"><br><br>
        <label for="ffood">Eat out or eat at home?</label>
  		  <input type="text" id="ffood" name="ffood"><br><br>
  		  <input type="submit" name = "submit2" value="Submit">
        <br><br>
  </form>

  <?php
  			 if (isset($_POST["submit2"]))
         {
  			 $fplace = $_POST["fplace"];
  			 $flocation = $_POST["flocation"];
         $ffood = $_POST["ffood"];

  			 echo "You like the ". $fplace.".<br><br>";
  			 echo "You are a ". $flocation.".<br><br>";
         echo "Your like to eat ". $ffood.".<br><br>";
  			 }
  	?>

    <hr/>

    <h2>What makes you happy?</h2>
  	<h3>This form will use the get attribute</h3>
    <form action="" method="get" >
    		  <label for="fplace">Do you like the beach or the mountains?</label>
    		  <input type="text" id="fplace" name= "fplace" ><br><br>
    		  <label for="flocation">Are you a homebody or something else?</label>
    		  <input type="text" id="flocation" name="flocation"><br><br>
          <label for="ffood">Eat out or eat at home?</label>
    		  <input type="text" id="ffood" name="ffood"><br><br>
    		  <input type="submit" name = "submit3" value="Submit">
          <br><br>
    </form>

    <?php
    			 if (isset($_GET["submit3"]))
           {
    			 $fplace = $_GET["fplace"];
    			 $flocation = $_GET["flocation"];
           $ffood = $_GET["ffood"];

    			 echo "You like the ". $fplace.".<br><br>";
    			 echo "You are a ". $flocation.".<br><br>";
           echo "Your like to eat ". $ffood.".<br><br>";
    			 }
    	?>

      <hr/>

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
