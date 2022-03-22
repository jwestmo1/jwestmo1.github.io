
<?php
         // define variables and set to empty values
         $nameErr = $emailErr = $timeErr = $termsErr = $foodErr = "";
         $name = $email = $prefname = $time = $class = $terms = $food = "";

         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }

            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);

               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
               }
            }

            if (empty($_POST["prefname"])) {
               $prefname = "";
            }else {
               $prefname = test_input($_POST["prefname"]);
            }

            if (empty($_POST["allergies"])) {
               $allergies = "";
            }else {
               $allergies = test_input($_POST["allergies"]);
            }

            if (empty($_POST["time"])) {
               $timeErr = "Time is required.";
            }else {
               $time = test_input($_POST["time"]);
            }

            if (empty($_POST["food"])) {
               $foodErr = "You must select 1 or more food";
            }else {
               $food = $_POST["food"];
            }

            if (empty($_POST["checked"])) {
               $termsErr = "You must agree to terms";
            }else {
               $terms = $_POST["checked"];
            }

         }

         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>

      <h2>Everything Form</h2>
      <h2>Be happy like the Quokka and register for a Quokka's Happiness class today!</h2>


      <div class="container">
      <form method = "POST" action = "">
         <table>
            <tr>
               <td>Full Name:</td>
               <td><input type = "text" name = "name">
                  <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>

            <tr>
               <td>E-mail: </td>
               <td><input type = "text" name = "email">
                  <span class = "error">* <?php echo $emailErr;?></span>
               </td>
            </tr>

            <tr>
               <td>Preferred Name:</td>
               <td> <input type = "text" name = "prefname">
               </td>
            </tr>

            <tr>
               <td>Allergies:</td>
               <td> <textarea name = "allergies" rows = "5" cols = "40"></textarea></td>
            </tr>

            <tr>
               <td>Class Preference:</td>
               <td>
                  <input type = "radio" name = "time" value = "morning">Morning
                  <input type = "radio" name = "time" value = "afternoon">Afternoon
                  <span class = "error">* <?php echo $timeErr;?></span>
               </td>
            </tr>

            <tr>
               <td>Food Preferences:</td>
               <td>
                  <select name = "food[]" size = "4" multiple>
                     <option value = "Anything">Anything</option>
                     <option value = "Gluten Free">Gluten Free</option>
                     <option value = "Dairy Free">Dairy Free</option>
                     <option value = "Nut Free">Nut Free</option>
                     <option value = "Egg Free">Egg Free</option>
                     <option value = "Vegetarian">Vegetarian</option>
                     <option value = "Vegan">Vegan</option>
                  </select>
                  <span class = "error">* <?php echo $foodErr;?></span>
               </td>
            </tr>

            <tr>
              <td>Terms:</td>
              <td>
              <p>You agree to try and be your happiest without any unnatural substances.</p>
              </td>
            </tr>

            <tr>
               <td>Agree</td>
               <td>
                 <input type = "checkbox" name = "checked" value = "1">
                 <span class = "error">* <?php echo $termsErr;?></span>
              </td>

            </tr>

            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit">
               </td>
            </tr>

            <tr>
               <td>
                  <input type="submit" value="Reset  " name="reset">
               </td>
            </tr>

         </table>
      </form>
    </div>

      <?php

      if (isset($_POST["submit"]))
      {
         echo "<h2>You gave the following values:</h2>";
         echo ("<p>Your name is $name</p>");
         echo ("<p>Your email address is $email</p>");
         echo ("<p>Your preferred name is $prefname</p>");
         echo ("<p>Your allergies: $allergies </p>");
         echo ("<p>Your class time preference is $time</p>");
         echo ("<p>Your food preference: ");
         for($i = 0; $i < count($food); $i++) {
            echo($food[$i] . " </p>");
         }
         echo("<h3>We will get back to you with some dates that match your preferences shortly</h3>");
       }
      ?>
