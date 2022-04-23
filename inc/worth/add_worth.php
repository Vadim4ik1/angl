<?php
session_start();

require_once '../../connect/connect.php';
$worth=$_POST['worth'];
$translate=$_POST['translate'];
// $name=$_POST['id_user'];
$level=$_POST['level'];
$status="unconfirmed";
$id_user="NULL";
echo($worth."-");
echo($translate."-");
// echo($name."-");
echo($level."-");
echo($id_user."-");
echo($status."-");
mysqli_query($connect,"INSERT INTO `worth` (`id_worth`, `worth`, `translate`, `level`, `id_user`, `status`) VALUES (NULL, '$worth', '$translate', '$level',NULL, '$status')");

header('Location:../../front/worth/add_worth.php');
?>