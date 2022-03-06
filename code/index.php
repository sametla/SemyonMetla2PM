<?php

echo "1a. Regular Expressions <br><br>";

$str='ahb acb aeb aeeb adcb axeb';
$regex = '/a..b/';
$matches = [];
preg_match_all($regex, $str, $matches);
print_r($matches);
