<?php

echo "1a. Regular Expressions <br><br>";

$str='ahb acb aeb aeeb adcb axeb';
$regex = '/a..b/';
$matches = [];
preg_match_all($regex, $str, $matches);
print_r($matches);

echo "<br><br>1b. Regular Expressions<br><br>";

$str = 'a1b2c3';
$regex = '/(\d)+/';
echo preg_replace_callback($regex, fn($matches) => intval(pow($matches[0],3)), $str);