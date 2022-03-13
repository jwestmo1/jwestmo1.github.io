<h2>Demonstration Form</h2>

<h2>Welcome to our Quokka Store</h2>
<?php
$BestSeller = "emotional support Quokka";
$animal = "Quokka";
$startDate = "August 19 2019";
$threeMonths = strtotime("+3 Months");
$oneDay = strtotime("+1 Day");
$grad=strtotime("May 12");
$days2grad=ceil(($grad-time())/60/60/24);
$forcedate = strtotime("May 4");

//String functions 1-4 and date function 1-2
echo "<h4>"."Today is ".date("l, m-d-Y")."</h4>";
echo "<p>Our store opened for business on ". $startDate . ", and we started out thinking about how we could
spread the " . $animal . "'s happiness. Then we decided to add in our " . $BestSeller . "s.  They quickly became
a hot selling item.  And on " . date("m-d-Y", $threeMonths) . " we will start out brand new line of fully trained " . $BestSeller .
"s.  We expect them to sell out quickly so make sure you preorder today!</p>";

//Math function 1-3, string 5, and date 3
echo "<figure style='float: none !important;'> <figcaption> Images from Traveller.com.au </figcaption> <img style='padding: 20px 55px;' src = 'images/happyQuokka.jpg'>
<img style='padding: 20px 55px;' src = 'images/happyQuokka2.jpg'>
<figcaption> We will only have ". (rand(1,100))." in stock, so place your pre-order soon. </figcaption></figure>";
$num = 300;
$num -= 30;
echo "<p>If you pre-order today you will receive a discount of 10% if you buy one.  So instead of our low, low rate
of only $300, your Quokka will only be $" . $num . "!  If you want two, then we will give you a discount of " . (rand(15,35)) . "%!
This offer is only good until " . date("m-d", $oneDay)." so act now!</p>";

//Math function 4-5 and date 4-5
echo "<p>".(ceil(3.729486))." out of ".(floor(5.16983278))." people agree that Quokka's saved their emotional health and well-being.
Please make sure you check back in ". $days2grad . " days for our next special.  Until then, ". date("M", $forcedate). " the ".
date("j", $forcedate). "th be with you.</p>";
?>
