<?php
session_start();
?>

<html>
<head>
    <title>2c. Form. Session & cookie</title>
    <meta charset="UTF-8">
</head>
<body>
<a href= "http://php-docker.local:8080/2a.php?">Go to 2a</a>
<a href= "http://php-docker.local:8080/2b.php?">Go to 2b</a>
<form method="post">
    <p><textarea required name = "name" placeholder="Your name"></textarea></p>
    <p><textarea required name = "age" placeholder="Your age"></textarea></p>
    <p><textarea required name = "salary" placeholder="Your salary"></textarea></p>
    <p><textarea required name = "blood" placeholder="Your blood type"></textarea></p>
    <p><input type="submit" name="submitInfo" value="Save"></p>
</form>
</body>
</html>

<?php
if ($_POST["submitInfo"])
if ($_POST['name'] && $_POST['age']  && $_POST['salary'] && $_POST['blood'])
$_SESSION['info']['name'] = $_POST['name'];
$_SESSION['info']['age'] = $_POST['age'];
$_SESSION['info']['salary'] = $_POST['salary'];
$_SESSION['info']['blood'] = $_POST['blood'];

if (($_SESSION["name"]) && ($_SESSION["surname"]) && ($_SESSION["age"]))
    echo "<br>Person: {$_SESSION['name']} {$_SESSION['surname']}. Age: {$_SESSION['age']} ";