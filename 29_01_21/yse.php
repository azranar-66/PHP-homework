<?php
function getDay()
{
    $days = array(
        'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
        'Четверг', 'Пятница', 'Суббота'
    );
    return $days[(date('w'))];
}


echo "Сегодня:" . ", " . getDay();
