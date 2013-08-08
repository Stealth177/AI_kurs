<?php

include("bd.php");
include("replace_fields.php");

$my_query = mysql_query("SELECT * FROM resume ") or die(mysql_error());

while ($row = mysql_fetch_array($my_query)) {

    echo "Ищу работу на должность: ", $row["name_resume"], "<br />",
    "Разместил пользователь: ", $row["owner"], "<br />",
    "Опубликовано: ", $row["reg_data"], "<br />",
    "Языки программирования: ", $row["lang_prog"], "<br />",
    "Опыт: ", replace_experience($row["experience"]), "<br />",
    "Город: ", $row["city"], "<br />",
    "Образование: ", replace_education($row['education']), "<br />",
    "Тип занятости: ", replace_work_time($row['work_time']), "<br />",
    "Зарплата: ", replace_pay($row['pay']), "<br />",
    "О себе: ", $row['extra'], "<br /> <br />";
}
?>
