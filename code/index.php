<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:

echo "1. Access by Link <br>";
$order = &$very_bad_unclear_name;
$order .=" and a large soda";

// Don't change the line below
echo "<br>Your order is: $very_bad_unclear_name.";

echo "<br><br> 2. Digits <br><br>";                       // \n doesn't work
$myFavNumber = 35;
echo $myFavNumber."<br>";
$myAge = 19;
echo $myAge."<br>";
$myBD = 6.05;
echo $myBD. "<br>";
echo ($myFavNumber - $myAge -4)."<br>";
$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo ($lastMonth-$thisMonth)."<br>";

echo "<br><br> 11. Multiplication and Division <br><br>";
$num_languages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguages = $days;
echo $daysPerLanguages."<br>";

echo "<br><br> 12. Power <br><br>";
echo 8**2;

echo "<br><br> 13. Assignment operators <br><br>";
$myNum = 6;
$answer = $myNum;
$answer +=2;
$answer *=2;
$answer -=2;
$answer /=2;
$answer -=$myNum;
echo $answer."<br>";


