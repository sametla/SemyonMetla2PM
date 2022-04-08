<?php
require_once __DIR__ . '/vendor/autoload.php';
$client = new Google_Client();
$client->setApplicationName('Google Sheets API PHP');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS);
$client->setAuthConfig(__DIR__ . '/credentials.json');
$client->setAccessType('offline');
$client->setPrompt('select_account consent');
$service = new Google_Service_Sheets($client);
$spreadsheetId = "1iwAnExwZU3gjzgPZ7B7DuWHqwMfir7WAr8p2GJNP4DY";
$range = "ssshhheeeeeettt!";
$values = [
    [$_POST["adCategory"], $_POST["heading"], $_POST['email'], $_POST['advert']]
];
$body = new Google_Service_Sheets_ValueRange(["values" => $values]);
$params = [
    'valueInputOption' => 'RAW',
];
$insert = [
    "insertDataOption" => "INSERT_ROWS"
];
$service->spreadsheets_values->append(
    $spreadsheetId,
    $range,
    $body,
    $params
);
header("Location: board.php");