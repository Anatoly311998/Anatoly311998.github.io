<?php



require_once 'Connect.php';



$id = $_POST['id'];
$text = $_POST['text'];
$type = $_POST['type'];




mysqli_query($connect, "UPDATE `task-list` SET  `type` = ''");
mysqli_query($connect, "UPDATE `task-list` SET  `type` = 'Завершено' WHERE `task-list`.`type` = '$type'");








header('Location: /');