
<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
// ini_set('display_errors',1);
error_reporting(E_ALL);
date_default_timezone_set('UTC');
// session_start();
$connect=mysqli_connect('localhost','root','','angl');

// if(!$connect){
//     die('Нет подключения, чекай');
// }


session_start();
if (!$_SESSION['user']) {
header('Location: ../index.php');
}

?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
