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
<form action="test_go.php" method="post" enctype="multipart/form-data">
    <p> Введите свое имя <input name="name" type="text"></p><br>
    <p>Уровень теста
    <select name="level" id="">
    <option value="a1">a1</option>
    <option value="a2">a2</option>
    <option value="a3">a3</option>
    </select></p>
    <input type="submit" value="Добавить">
    </form>
</body>
</html>


