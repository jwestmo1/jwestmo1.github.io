

<h2>One Form, Two Form, Red Form, Blue Form</h2>
<h2>The Quokka's Guide to Happiness Forms</h2>


  <h2>What makes you happy?</h2>
	<h3>This form will use the post attribute</h3>
  <div class="container">
  <form action="" method="post" >
    <label for="fname">First name:</label>
    <input type="text" id="fname" name= "fname" ><br><br>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"><br><br>
	  <label for="fplace">Do you like the beach or the mountains?</label>
	  <input type="text" id="fplace" name= "fplace" ><br><br>
	  <label for="flocation">Are you a homebody or something else?</label>
	  <input type="text" id="flocation" name="flocation"><br><br>
    <label for="ffood">Eat out or eat at home?</label>
	  <input type="text" id="ffood" name="ffood"><br><br>
	  <input type="submit" name = "submit2" value="Submit">
    <br><br>
  </form>
</div>
  <?php
  			 if (isset($_POST["submit2"]))
         {
         $fname = $_POST["fname"];
  			 $lname = $_POST["lname"];
  			 $fplace = $_POST["fplace"];
  			 $flocation = $_POST["flocation"];
         $ffood = $_POST["ffood"];

         echo "Your first name is ". $fname.".<br><br>";
  			 echo "Your last name is ". $lname.".<br><br>";
  			 echo "You like the ". $fplace.".<br><br>";
  			 echo "You are a ". $flocation.".<br><br>";
         echo "You like to eat ". $ffood.".<br><br>";
  			 }
  	?>

    <hr/>

    <h2>What makes you happy?</h2>
  	<h3>This form will use the get attribute</h3>
    <div class="container">
    <form action="" method="get" >
      <input type="hidden" name="p" value="web250_oneFormTwoForm.php" />
      <label for="fname">First name:</label>
      <input type="text" id="fname" name= "fname" ><br><br>
      <label for="lname">Last name:</label>
      <input type="text" id="lname" name="lname"><br><br>
		  <label for="fplace">Do you like the beach or the mountains?</label>
		  <input type="text" id="fplace" name= "fplace" ><br><br>
		  <label for="flocation">Are you a homebody or something else?</label>
		  <input type="text" id="flocation" name="flocation"><br><br>
      <label for="ffood">Eat out or eat at home?</label>
		  <input type="text" id="ffood" name="ffood"><br><br>
		  <input type="submit" name = "submit3" value="Submit">
      <br><br>
    </form>
  </div>
    <?php
    			 if (isset($_GET["submit3"]))
           {
           $fname = $_GET["fname"];
    			 $lname = $_GET["lname"];
    			 $fplace = $_GET["fplace"];
    			 $flocation = $_GET["flocation"];
           $ffood = $_GET["ffood"];

           echo "Your first name is ". $fname.".<br><br>";
    			 echo "Your last name is ". $lname.".<br><br>";
    			 echo "You like the ". $fplace.".<br><br>";
    			 echo "You are a ". $flocation.".<br><br>";
           echo "You like to eat ". $ffood.".<br><br>";
    			 }
    	?>

      <hr/>
