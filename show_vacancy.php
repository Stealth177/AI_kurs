<?php

include("bd.php");
include("replace_fields.php");

$my_query = mysql_query("SELECT * FROM vacancies ") or die(mysql_error());

while ($row = mysql_fetch_array($my_query)) {

    echo "Требуется: ", $row["name_vacancy"], "<br />",
    "В компанию: ", $row["owner"], "<br />",
    "Опубликована: ", $row["reg_data"], "<br />",
    "Языки программирования: ", $row["lang_prog"], "<br />",
    "Опыт: ", replace_experience($row["experience"]), "<br />",
    "Город: ", $row["city"], "<br />",
    "Образование: ", replace_education($row['education']), "<br />",
    "Тип занятости: ", replace_work_time($row['work_time']), "<br />",
    "Зарплата: ", replace_pay($row['pay']), "<br />",
    "О компании: ", $row['extra'], "<br /> <br />";
}
?>
