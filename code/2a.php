<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> 2a. Сессии и Куки </title>
    <meta charset="UTF-8">
</head>

<body>
<p>
    <a href= "http://php-docker.local:8080/2b.php?">Go to 2b</a>
    <a href= "http://php-docker.local:8080/2c.php?">Go to 2c</a>
</p>
<form method="post">
    <p><textarea required name = "textToProcess" placeholder="Введите текст"></textarea></p>
    <p><input type="submit" name="submitButton" value="Посчитать"></p>
    <ul>
        <?php
        foreach ($_SESSION['info'] as $key => $value) {
            echo "<li>$key : $value</li>";
        }
        ?>
    </ul>
</form>
</body>
</html>

<?php
if( $_POST["submitButton"] )
if( $_POST["textToProcess"] )
{
    $_SESSION['textInfo'] = str_word_count( $_POST["textToProcess"], 0, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя') . ' слов(-а)<br>';
    $_SESSION['textInfo'] .= strlen($_POST['textToProcess']) . ' символа(-ов)<br>';
}
echo $_SESSION['textInfo'];

if (($_SESSION["name"]) && ($_SESSION["surname"]) && ($_SESSION["age"]))
    echo "<br>Person: {$_SESSION['name']} {$_SESSION['surname']}. Age: {$_SESSION['age']} ";