<?php
require_once "adController.php";
require_once "MySQLdb.php";
require_once "Ad.php";
require_once "Front.php";

$adController = new AdController();

if($adController->isError()){
    $adController->error();
    return;
}

try {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $adController->get();
    } else
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $adController->post();
        }
} catch (mysqli_sql_exception $e){
    $adController->error();
}