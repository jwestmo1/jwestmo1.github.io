<h2>Demonstration Form</h2>

<h2>Welcome to our Quokka Store</h2>
<?php
$BestSeller = "emotional support Quokka";
$animal = "Quokka";
$startDate = "August 19 2019";
$threeMonths = strtotime("+3 Months");

//String functions 1-4 and date function 1-2
echo "<h4>"."Today is ".date("l, m-d-Y")."</h4>";
echo "<p>Our store opened for business on ". $startDate . ", and we started out thinking about how we could
spread the " . $animal . "'s happiness. Then we decided to add in our " . $BestSeller . "s.  They quickly became
a hot selling item.  And on " . date("m-d-Y", $threeMonths) . " we will start out brand new line of fully trained " . $BestSeller .
"s.  We expect them to sell out quickly so make sure you preorder today!</p>";

//Math function
echo "<figure> <figcaption> Image from Traveller.com.au </figcaption> <img src = '/images/happyQuokka.png'>
<figcaption> We will only have ". (rand(1,100))." in stock, so place your preorder soon. </figcaption></figure>";




?>
