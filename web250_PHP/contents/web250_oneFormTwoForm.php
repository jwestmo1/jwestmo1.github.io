<style>
/* font-family: 'Klee One', serif;
font-family: 'Montserrat', sans-serif;
 */
body {
  font-family: 'Montserrat', sans-serif;
  background-color: #3B3B3B; /*Gray*/
  color: #B83939;
  text-align: center;
  font-size: 15px;
  margin: 0 200px;
}

/* Header */

ol {
margin: 0 100px;
}
header {
  color: #B83939; /*Dark red font*/
}

.grid{
  display: grid;
  color: #B83939;
}

.logo {
  text-align: center;
  max-width: 100%;
  justify-content: right;
  grid-area: 1 / 1 / span 8 / span 5;
}

.name {
  font-size: clamp(10px, 2.2em, 48px);
  grid-area: 1 / 3 / span 6/ span 6;
  text-align: center;
  justify-content: center;
}

.taglinehead {
  font-size: 1.1em;
  grid-area: 7 / 3 / span 2 / span 6;
  text-align: center;
  justify-content: center;
}

@media only screen and (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
    .page-title, .page-description {
  float: left;
    width: 20em;
}

.page-description {
    text-align: left;
}
}

h1 {
  font-family: 'Klee One', serif;
  font-size: 60px;
  background-color: #3B3B3B; /*Gray*/
  color: #39B8B8; /*Teal*/
}

h2, h3 {
  font-family: 'Klee One', serif;
  color: #39B8B8;
}

h3 {
  color: #39B8B8; /*Teal*/
}

h4 h5 {
  font-family: 'Klee One', serif;
  font-style: italic;
  color: #39B8B8; /*Teal*/
}

ul {
  text-align: left;
  list-style-type: circle;
  color: #93DEDE;
}

a {
  text-decoration: none;
  text-align: left;
}

a:link {
  color: #39B8B8;
  /* Blue */
}

a:visited {
  color: #39B8B8;
}

a:hover {
  background-color: #929292; /*Light gray*/
  color: #52F4D1;
  /* Green */
}

/* Main */
main p {
  text-align: left;
  color: #93DEDE;
}

main a:visited {
  color: #39B8B8;
}

main a:hover {
  background-color: #3B3B3B; /*Gray*/
  color: #B83939;
}

main a:focus {
  outline: thin dotted;
}

main a:hover, main a:active {
  outline: 0;
}

li {
  margin: 10px 0;
  text-align: left;
}

.web_desc {
  text-align: center;
}

.signature {
  font-family: 'Brush Script MT', 'Brush Script Std', cursive;
}

.container {
  text-align: left;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

label {
  padding: 5px 0
}

::placeholder {
  font-family: 'Montserrat', sans-serif;
}

textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

figcaption {
  font-size: 15px;
  font-style: italic;
  color: #B83939;
}

figure {
  float: right;
}

/* Footer */
footer a:visited {
  color: #93DEDE; /*light teal*/
  padding: 5px 0
}

footer a:hover {
  background-color: #929292; /*light gray*/
  color: #93DEDE; /*light teal*/
}

footer {
  padding: 10px;
  width: 100%;
  height: 30px;
  font-size: 10px;
  color: white;
  font-family: 'Montserrat', sans-serif;
  margin-top: -10px 0 10px 0;
  letter-spacing: 2px;
  text-align: center;
}


footer a {
  color: #39B8B8; /*Links color teal*/
}

#validation_link {
  padding: 0 15px
}

/* Navbar */
/* Navbar container */
nav {
  overflow: hidden;
  background-color: #616161; /*Light gray*/
}

/* Links inside the navbar */
nav a {
  float: left;
  font-size: 15px;
  color: white;
  text-align: left;
  padding: 14px 16px;
}

.navbar {
  padding: 5px 80px 5px 40px;
  border: 0;
  border-radius: 0;
  margin-bottom: 0;
  margin-right: 60px;
  font-size: 20px;
  letter-spacing: 3px;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 15px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  /* Important for vertical align on mobile phones */
  margin: 0;
  /* Important for vertical align on mobile phones */
}

/* Add a black background color to navbar links on hover */
nav a:hover, .dropdown:hover .dropbtn {
  background-color: #3B3B3B; /*Gray*/
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown-submenu:hover>.dropdown-content {
  display: block;
}

.submenu {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
  left: 100%;
  /* Moves submenu to right of dropmenu */
  top: 0px;
}

/* Links inside the submenu */
.submenu_holder a {
  float: none;
  color: black;
  padding: 12px 16px;
  display: block;
  text-align: left;
}

.submenu_holder:hover .submenu {
  display: block;
}

.submenu_holder a:hover {
  background-color: #ddd;
}

.submenu_holder {
  position: relative;
}

.brandBox {
  background-color: #3B3B3B; /*Gray*/
  border: 100px #f6f6f6;
  text-align: center;
  color: #93DEDE;
}

.brandp {
  text-align: center;
}

.color1 {
  background-color: #3B3B3B; /*Gray*/
  padding: 10px;
  color: #93DEDE;
  border: 1px black;
}

.color2 {
  background-color: #929292; /*Light gray*/
  padding: 10px;
  border: 1px black;
  color: black;
}

.color3 {
  background-color: #B83939;
  padding: 10px;
  color: black;
  border: 1px black;
}

.color4 {
  background-color: #39B8B8;
  padding: 10px;
  color: black;
  border: 1px black;
}

.color5 {
  background-color: #93DEDE;
  padding: 10px;
  color: black;
  border: 1px black;
}

.mainFont {
  font-family: 'Klee One', serif;
}

.paragraphFont {
  font-family: 'Montserrat', sans-serif;
}

.tagline {
  font-family: 'Klee One', serif;
  padding-bottom: 10px;
}

.input {
  background-color: #39B8B8;
}

.output {
  background-color: #52F4D1;
}

.construction {
  text-align: center;
  color: #52F4D1;
}

.container {
  width: 500px;
  clear: both;
}

.figure {
  float: none !important;
}

</style>

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
    <form action="web250_oneFormTwoForm.php" method="get" >
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
