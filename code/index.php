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

echo "<br><br> 16. Funtions 2 <br><br>";
function increaseEnthusiasm(string $string):string
{
    $string.='!';
    return $string;
}
echo increaseEnthusiasm('I used 5 arrays instead of one, what a waste of memory')."<br>";

function repeatThreeTimes(string $string):string
{
    $string.=$string.$string;
    return $string;
}
echo repeatThreeTimes(increaseEnthusiasm('I do not repeat myself'))."<br>";

function cut(string $string, int $int=10):string
{
    $ret = "";
    for($i = 0; $i < $int; $i++)
       $ret.=$string[$i];
    return $ret;
}
echo cut("I need help with my homework",11)."<br>";

function arrayPrint($arr, $num)
{
    if ($num < sizeof($arr))
    {
        echo $arr[$num]." ";
        arrayPrint($arr, $num+1);
    }
}
$array = array(1,2,3,4,5);
arrayPrint($array, 0);

function arraySum($num)
{
    $sum = 0;
    while ($num > 0)
    {
        $sum+=$num%10;
        $num/=10;
    }
    if ($sum > 9) return arraySum($sum);
    else return($sum);
}
echo "<br>".arraySum(155)."<br>";

echo "<br><br> 17. Arrays <br><br>";
$arr=[];
for ($i = 1; $i <= 10; $i++)
{
    $arr[$i-1]='';
    for ($j = 0; $j < $i; $j++)
        $arr[$i-1].='x';
}
print_r($arr);

function arrayFill($vol, int $num)
{
    $newArr = [];
    for ($i = 1; $i <= $num; $i++) {
        $newArr[$i - 1] = '';
        for ($j = 0; $j < $i; $j++)
            $newArr[$i - 1] .= $vol;
    }
    return $newArr;
}
echo "<br>";
print_r(arrayFill('x',5));
echo "<br>";
$arr2 = [[1,2,3],[4,5],[6]];
$sum = 0;
foreach ($arr2 as $value)
{
    foreach ($value as $num)
    {
        $sum += $num;
    }
}
echo "<br>".$sum."<br>";

$arr3 = [];
$counter = 1;
for($i = 0; $i < 3; $i++)
    for($j = 0; $j < 3; $j++)
        $arr3[$i][$j] = $counter++;
print_r($arr3);

$arr4=[2,5,3,9];
$result = $arr4[0]*$arr4[1]+$arr4[2]*$arr4[3];
echo "<br>".$result."<br>";

$user = ['name' => 'Semyon', 'surname' => 'Metla', 'patronymic' => 'Andreevich', 6, 5, 2002];
echo $user['surname']." ".$user['name']." ".$user['patronymic']."<br>";

$date = ['year' => 2022, 'month' => '02', 'day' => '08'];
echo "Today is {$date['year']}-{$date['month']}-{$date['day']}<br>";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo sizeof($arr)."<br>";
echo $arr[sizeof($arr)-1]."<br>";
echo $arr[sizeof($arr)-2]."<br>";

echo "<br><br> 18. if/else Construction <br><br>";

function moreThan10(int $a, int $b):bool
{
    if ($a+$b > 10) return true;
    else return false;
}
if (moreThan10(2, 9)) echo "Bingo!<br>";

function equal(int $a, int $b):bool
{
    if ($a === $b ) return true;
    else return false;
}
if (equal(5,5)) echo "hmm yes the 5 here is made out of 5<br>";

$test = 0;
echo ($test == 0) ? 'true<br>' : 'false<br>';

$age = rand(0, 150);
echo "age = {$age}<br>";
if ($age < 10) echo "{$age} is lower than 10<br>";
else if ($age > 99) echo "{$age} is higher than 99<br>";
else
{
    $sum = 0;
    for ($i = 0; $i < strlen($age); $i++)
    {
        $sum += $age%10;
        $age/=10;
    }
    echo ($sum > 9) ? "sum is two-digit<br>" : "sum is one-digit<br>";
}

$arr = [1,2,3];
$sum = array_sum($arr);
echo (sizeof($arr) == 3) ? "{$sum}<br>" : "oops" ;








