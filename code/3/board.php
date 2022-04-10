<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title> 3. Board </title>
    <meta charset="UTF-8">
</head>

<body>
<form method="post">
    EMAIL<input type = email name = "email" required placeholder="shrek@farfaraway.com">
    <p>HEADING<input type = text name = "heading" required placeholder="leave ma swamp"></p>
    <p><textarea name = "advert" required cols="40" rows="5"></textarea></p>
    <p><input type = submit name = "publishButton" value="Publish"></p>
    <select name="adCategory">
        <?php

        ?>
    </select>
    <p>Список объявлений:</p>
    <table border="1">
        <?php

        ?>
    </table>
</form>
</body>
</html>