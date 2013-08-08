<?php

function replace_experience($value) {
    if ($value == 'least_1')
        return 'менее года';
    if ($value == 'near_1_3')
        return '1-3 года';
    if ($value == 'near_3_5')
        return '3-5 лет';
    if ($value == 'more_5')
        return 'более 5 лет';
}

function replace_education($value) {
    if ($value == 'middle')
        return 'среднее';
    if ($value == 'half_high')
        return 'неполное высшее';
    if ($value == 'high')
        return 'высшее';
}

function replace_work_time($value) {
    if ($value == 'full_day')
        return 'полный рабочий день';
    if ($value == 'half_day')
        return 'неполный рабочий день';
    if ($value == 'remote')
        return 'удаленная работа';
}

function replace_pay($value) {
    if ($value == 'least_10')
        return 'менее 10 000 рублей';
    if ($value == 'near_10_20')
        return 'от 10 000 до 20 000 рублей';
    if ($value == 'near_20_40')
        return 'от 20 000 до 40 000 рублей';
    if ($value == 'more_40')
        return 'более 40 000 рублей';
}

?>
