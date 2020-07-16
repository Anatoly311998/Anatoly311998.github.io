<?php



require_once 'Connect.php';



$id = $_POST['id'];
$text = $_POST['text'];
$type = $_POST['type'];




mysqli_query($connect, "UPDATE `task-list` SET `text` = '$text', `type` = '$type' WHERE `task-list`.`id` = '$id'");


header('Location: /');