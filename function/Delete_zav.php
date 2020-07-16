<?php



require_once 'Connect.php';



$id = $_GET['id'];



mysqli_query($connect, "DELETE FROM `task-list` WHERE `task-list`.`type` = 'Завершено'");

header('Location: /');