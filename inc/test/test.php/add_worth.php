<?php
session_start();

require_once '../../connect/connect.php';

$text=$_POST['text'];
date_default_timezone_set('UTC');
$date=date("Y-m-d H:i:s");

echo($text);
echo($date);


mysqli_query($connect,"INSERT INTO `offers` (`id_offers`, `text`, `answer`, `date`) VALUES (NULL, '$text',NULL, '$date')");

header('Location:../../index.php');
?>