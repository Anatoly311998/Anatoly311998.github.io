<?php
require_once 'Connect.php';

$text = $_POST['text'];
$type = $_POST['type'];

mysqli_query($connect,"INSERT INTO `task-list` (`id`, `text`, `type` ) VALUES (NULL, '$text', '$type' )");

header('Location: /');