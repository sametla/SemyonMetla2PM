<?php
session_start();
?>

<html>
<head>
    <title>2b. Form. Session & cookie</title>
    <meta charset="UTF-8">
</head>
<body>
<a href= "http://php-docker.local:8080/2a.php?">Go to 2a</a>
<form method="post">
    <p><textarea required name = "surname" placeholder="Your surname"></textarea></p>
    <p><textarea required name = "name" placeholder="Your name"></textarea></p>
    <p><textarea required name = "age" placeholder="Your age"></textarea></p>
    <p><input type="submit" name="submitButton" value="Save"></p>
</form>
</body>
</html>

<?php
if ($_POST["submitButton"])
    if ($_POST['surname'] && $_POST['name']  && $_POST['age']) {
        $_SESSION['surname'] = $_POST['surname'];
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['age'] = $_POST['age'];
    }
