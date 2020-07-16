<?php
require_once 'function/Connect.php';


$task_id = $_GET['id'];

$task = mysqli_query($connect, "SELECT * FROM `task-list` WHERE `id` = '$task_id'");

$task = mysqli_fetch_assoc($task);


?>






<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редактирование Todo-list</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<div class="page">


	<form action="function/update.php" method="post" class="formstyles">
		<h3>Редактировать задачу</h3>

		<input type="hidden" name="id" value="<?= $task['id'] ?>">

		<input type="text" name="text" placeholder="Введите запись" value="<?= $task['text'] ?>">

        <input type="text" name="type" placeholder="Введите тип (завершено, актуально)" value="<?= $task['type'] ?>">
       

       <button type="submit">Редактировать задачу</button>








	</form>




</div>

</body>
</html>