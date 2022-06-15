<?php
$link = mysqli_connect('db', 'root', '123', 'web');
$query = "INSERT INTO ad (email, title, description, category) 
VALUES ('{$_POST['email']}', '{$_POST['heading']}', '{$_POST['advert']}', '{$_POST['adCategory']}')";
$link = mysqli_query($link, $query);
header("Location: board.php");