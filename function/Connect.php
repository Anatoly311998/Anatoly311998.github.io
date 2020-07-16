<?php

    $connect = mysqli_connect('localhost', 'r90094rv_todo', 'MOMO12345678mo', 'r90094rv_todo');

    if (!$connect) {
        die('Ошибка подключения к базе данных');
    }