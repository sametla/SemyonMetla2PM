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
<form method="post">
    <p><textarea required name = "textToProcess" placeholder="Введите текст"></textarea></p>
    <p><input type="submit" name="submitButton" value="Посчитать"></p>
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
