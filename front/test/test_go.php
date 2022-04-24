
<?php
// session_start();
require_once '../../connect/connect.php';
// $level=$_POST['level'];
// $level=$GET['id'];
$id_worth=rand(2, 10);
$numbers = [];
while (count($numbers) < 3) $numbers[$numb] = ($numb = rand(2, 12));
$values = array_values($numbers);
array_push($values,$id_worth);
shuffle($values);
shuffle($values);

$id_worth_2=$values[0];
$id_worth_3=$values[1];
$id_worth_4=$values[2];
$id_worth_5=$values[3];

 
print_r( $values );
mysqli_query($connect,"INSERT INTO `user` (`id_user`, `name`) VALUES (NULL,'$name')");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="../../inc/test/add_worth.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="name">
    <input type="hidden" name="level">

    <p> Ваше имя <input name="name" type="text" value="<?= $name?>"></p><br>
    <p> Ваш уровень <input name="name" type="text" value="<?= $level?>"></p><br>
    </form>
    <?php
                $worth = mysqli_query($connect, "SELECT * FROM `worth` WHERE `level`= '$level' AND `id_worth`='$id_worth' ");
                $worth = mysqli_fetch_all($worth);
                foreach ($worth as $worth) {  ?>
                Слово для перевода: <?= $worth[1] ?><br>
                
                    <?php } ?>
                    <p>Выберете перевод</p>
                    <?php
                $worth = mysqli_query($connect, "SELECT * FROM `worth` WHERE `level`= '$level' AND `id_worth`='$id_worth_2' ");
                $worth = mysqli_fetch_all($worth);
                foreach ($worth as $worth) {  ?>
                <form action="../../inc/test/add_worth.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $worth[2]?>" name="second_worth">
                    <!-- <input type="hidden" value="<?= $worth[2]?>" name="id_test">
                    <input type="hidden" value="<?= $worth[2]?>" name="id_user"> -->

                    <input type="submit" value="<?= $worth[2]?>"> 
                </form>
                    <?php } ?>
                <?php
                $worth = mysqli_query($connect, "SELECT * FROM `worth` WHERE `level`= '$level' AND `id_worth`='$id_worth_3' ");
                $worth = mysqli_fetch_all($worth);
                foreach ($worth as $worth) {  ?>
                    <input type="submit" value="<?= $worth[2]?>"> 
              
                    <?php } ?>
                    <?php
                $worth = mysqli_query($connect, "SELECT * FROM `worth` WHERE `level`= '$level' AND `id_worth`='$id_worth_4' ");
                $worth = mysqli_fetch_all($worth);
                foreach ($worth as $worth) {  ?>
                
                    <input type="submit" value="<?= $worth[2]?>"> 
                
                    <?php } ?>
                    <?php
                $worth = mysqli_query($connect, "SELECT * FROM `worth` WHERE `level`= '$level' AND `id_worth`='$id_worth_5' ");
                $worth = mysqli_fetch_all($worth);
                foreach ($worth as $worth) {  ?>
                    <input type="submit" value="<?= $worth[2]?>"> 
               
                    <?php } ?>
  
</body>
</html>


