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

function getProjects($limit = 5) {
    global $link; 

    openDB(); // Открываем соединение с БД

    $sql = "SELECT * FROM projects ORDER BY created_at DESC LIMIT " . intval($limit);
    $result = $link->query($sql);

    $output = ""; // Создаем переменную для хранения HTML-кода

    while ($row = $result->fetch_assoc()) {
        $output .= '<div class="project">';
        $output .= '<h2>' . htmlspecialchars($row['title']) . '</h2>';
        $output .= '<p>' . htmlspecialchars($row['description']) . '</p>';
        $output .= '<a href="' . htmlspecialchars($row['link']) . '" target="_blank">Подробнее</a>';
        $output .= '</div><hr>';
    }

    return $output; // Возвращаем HTML-код
}

?>