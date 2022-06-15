<?php
$link = mysqli_connect('db', 'root', '123', 'web');
$result = mysqli_query($link, "SELECT*FROM ad");
?>

<!DOCTYPE html>
<html>
<head>
    <title> 3. Board </title>
    <meta charset="UTF-8">
</head>

<body>
<form action="addAd.php" method="POST">
    EMAIL<input type = email name = "email" required placeholder="shrek@farfaraway.com">
    <p>HEADING<input type = text name = "heading" required placeholder="leave ma swamp"></p>
    <p><textarea name = "advert" required cols="40" rows="5"></textarea></p>
    <p><input type = submit name = "publishButton" value="Publish"></p>
    <select name="adCategory">
        <option>animals</option>
        <option>videogames</option>
        <option>etc</option>
    </select>
    <p>AD LIST:</p>
    <table border="1">
        <?php
        echo '<td>' . "Category" . '<td>' . '<td>' . "Title" . '<td>' . '<td>' . "Email" . '<td>' . '<td>' . "Description" . '<td>' . '<tr>';
        while($row = $result->fetch_assoc())
        {
            echo '<td>' . $row['category'] . '<td>' . '<td>' . $row['title'] . '<td>' . '<td>' . $row['email'] . '<td>' . '<td>' . $row['description'] . '<td>';
            echo "<tr>";
        }
        $result->close();
        $link->close();
        ?>
    </table>
</body>
</html>