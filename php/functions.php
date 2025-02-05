<?php

$link = false;


// Открытие соединения с БД
function openDB()
{
    global $link;
    $link = mysqli_connect("localhost", "root", "", "portfolio");
    $link->set_charset("utf8mb4");
    
}

// Закрытие соединения с БД
function closeDB()
{
    global $link;
    if ($link) {
        mysqli_close($link);
        $link = false;
    }
}

?>