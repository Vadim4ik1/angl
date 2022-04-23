<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="../../inc/worth/add_worth.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="name" value="<?= $name?>">
    <p> Введите слово <input name="worth" type="text"></p><br>
    <p> Введите перевод этого слова <input name="translate" type="text"></p>
    <p>Уровень слова
    <select name="level" id="">
    <option value="a1">a1</option>
    <option value="a2">a2</option>
    <option value="a3">a3</option>
    </select></p>
    <input type="submit" value="Добавить">
    </form>
</body>
</html>


