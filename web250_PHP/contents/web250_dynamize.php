<h2> Our Top 10 Cutest Animals of Australia</h2>


<?php
  $filepath = 'cute_animals.txt';

  $animalFile =  fopen($filepath, 'r');
  if ($animalFile) {
    while(!feof($animalFile)){
      $row = fgets($animalFile);
      $array = explode('||', $row);

      echo "<table>".
         "<tr >".
            "<td class='stack'>".
             "<figure>"."<figcaption>"."Image courtesy of Greyhound Australia"."</figcaption>".
            "<img src = 'images/".$array[0]. "'>"."</figure>".
            "</td>".

            "<td class='stack'>".
          "<h2>". $array[1] . "</h2>".
            "</td>".

            "<td class='stack'>".
          "<p>". "<b>Who I am: </b>".$array[2] . "<p>".'<br />'.
            "</td>".

            "<td class='stack'>".
          "<p>". "<b>Funny/Interesting Item About Them: </b>".$array[3] . "<p>".'<hr />'.'<br />'.
            "</td>".

        " </tr>".

    "</table>";

    }
  fclose($filepath);
} else {
  echo "Could not open file.";
}



 ?>
