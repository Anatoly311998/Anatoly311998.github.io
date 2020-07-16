<?php

    $connect = mysqli_connect('localhost', 'root', '', 'todo-list');

    if (!$connect) {
        die('Ошибка подключения к базе данных');
    }