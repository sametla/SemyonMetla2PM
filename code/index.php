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

echo "<br><br> 14. Math functions <br><br>";
$a = 10;
$b = 3;
echo ($a%$b)."<br>";
$st = pow(2, 10);
echo $st."<br>";
echo sqrt(245)."<br>";
$array = [4,2,5,19,13,0,10];
$sum = 0;
foreach ($array as $value)
    $sum = $sum + $value;
echo sqrt($sum)."<br>";

echo round(sqrt(379), 0)."<br>";
echo round(sqrt(379), 1)."<br>";
echo round(sqrt(379), 2)."<br>";
$arr2 = array ('ceil' => ceil(sqrt(587)), 'floor' => floor(sqrt(587)));
echo $arr2['ceil']."<br>";
echo $arr2['floor']."<br>";
echo min(4, -2, 5, 19, -130, 0, 10)."<br>";
echo max(4, -2, 5, 19, -130, 0, 10)."<br>";
echo rand(1, 100)."<br>";
$arr3 = [10];
for ($i = 0; $i < 10; $i++)
{
   $arr[$i] = rand(1,100);
   echo $arr[$i]." ";
}
echo "<br>".abs(($b-$a))."<br>";
$arr3 = [1, 2, -1, -2, 3, -3];
foreach ($arr3 as $value) {
    $value = abs($value);
    echo $value." ";
}

$a = 228;
$dividers = [];
for ($i = 1; $i <= $a; $i++)
    if ($a % $i == 0)
        $dividers[] = $i;
print_r($dividers);
$arr4 = [1,2,3,4,5,6,7,8,9,10];
$sum = 0;
foreach ($arr4 as $value) {
    $sum += $value;
    if ($sum > 10)
    {
        echo "<br>".$value. "<br>";
        break;
    }
}

echo "<br><br> 15. Functions <br><br>";

function printStringReturnNumber(string $string):int
{
    echo $string."<br>";
    return 1;
}
$myNum = printStringReturnNumber('hello');
echo $myNum;