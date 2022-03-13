<?php
session_start();
$catDir = opendir("categories");
while ($catName = readdir($catDir)) {
    if ($catName !== "." && $catName !== "..") {
        $ads[$catName] = [];
        $catPath = opendir("categories/" . $catName);
        while ($fileName = readdir($catPath)) {
            if ($fileName !== "." && $fileName !== "..") {
                $filePath = "categories/" . $catName . "/" . $fileName;
                $file = fopen($filePath, "r");
                $email = fgets($file);
                $text = NULL;
                while (!feof($file)) {
                    $text .= fgets($file);
                }
                fclose($file);
                $ads[$catName][substr($fileName, 0, strlen($fileName) - 4)] = [
                    "email" => $email,
                    "text" => $text
                ];
            }
        }
    }
}
$text = fopen("categories/" . $_POST["adCategory"] . "/" . $_POST["heading"] . ".txt", "w");
fwrite($text, $_POST['email'] . "\n");
fwrite($text, $_POST['advert']);
fclose($text);

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
        foreach (array_keys($ads) as $value) {
            echo "<option>" . $value . "</option>";
        }
        ?>
    </select>
    <p>Список объявлений:</p>
    <table border="1">
        <?php
        foreach ($ads as $categoryName => $categoryAds) {
            foreach ($categoryAds as $title => $ad) {
                echo "<td>" . $categoryName . "</td>" . "<td>" . $title . "</td>" . "<td>" . $ad["email"] . "</td>" . "<td width='50%'>" . $ad["text"] . "</td>" . "<tr>";
            }
        }
        ?>
    </table>
</form>
</body>
</html>