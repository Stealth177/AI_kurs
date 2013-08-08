<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Создать вакансию</title>
        <style type="text/css">
            INPUT {
                 margin:4px; padding:3px; /* Цвет фона */
            }
        </style>
    </head>
    <body>
      
        <table>
                
            <form action="create_vacancy.php" method="POST">

                <tr>
                    <td>Название вакансии<font color="red">*</font>:</td>
                <td><input type="text" size="20" name="name_vacancy" ></td>
                </tr>

                <tr>       
                    <td colspan="3"> Языки программирования:  
                        <input type="radio" name="lang_prog" value="c">  C/C++/C#
                        <input type="radio" name="lang_prog" value="java"> Java
                        <input type="radio" name="lang_prog" value="php"> PHP
                        <input type="radio" name="lang_prog" value="vb"> Visual Basic 
                        <input type="radio" name="lang_prog" value="python"> Python
                        <input type="radio" name="lang_prog" value="scala"> Scala
                        <input type="radio" name="lang_prog" value="ruby"> Ruby
                        <input type="radio" name="lang_prog" value="erlang"> Erlang
                    </td> 
                <tr>

                <tr>
                    <td colspan="3" >Опыт работы: 
                        <input type="radio" name="experience" value="Менее года"> Менее года
                        <input type="radio" name="experience" value="1-3 года"> 1-3 года
                        <input type="radio" name="experience" value="3-5 лет"> 3-5 лет
                        <input type="radio" name="experience" value="более 5 лет"> более 5 лет
                    </td>
                </tr>

                <tr>
                    <td>Город:<font color="red">*</font>:</td>
                <td><input type="text" size="20" name="city"></td>
                </tr>

                <tr>
                    <td colspan="3" >Образование: 
                        <input type="radio" name="education" value="Среднее"> Среднее
                        <input type="radio" name="education" value="Неоконченное высшее"> Неоконченное высшее
                        <input type="radio" name="education" value="Высшее"> Высшее
                    </td>
                </tr>
                
                <tr>
                    <td colspan="3" >Тип занятости: 
                        <input type="radio" name="work_time" value="Полный рабочий день"> Полный рабочий день
                        <input type="radio" name="work_time" value="Частичная занятость"> Частичная занятость
                        <input type="radio" name="work_time" value="даленная работа"> Удаленная работа
                    </td>
                </tr>
                
                <tr>
                    <td colspan="3" >Зарплата: 
                        <input type="radio" name="pay" value="менее 10 000 рублей"> менее 10 000 рублей
                        <input type="radio" name="pay" value="10 000-20 000 рублей"> 10 000-20 000 рублей
                        <input type="radio" name="pay" value="20 000-40 000 рублей"> 20 000-40 000 рублей
                        <input type="radio" name="pay" value="более 40 000 рублей"> более 40 000 рублей
                    </td>
                </tr>
                
                <tr>
                    <td>Дополнительно</td>
                    <td><input type="text" size="200" name="extra"></td>
                </tr>


                <tr>
                    <td></td>
                    <td colspan="3"><input type="submit" value="Создать вакансию" name="submit" ></td>
                </tr>

                <br>
            </form>
        </table>
    <font face="Verdana" size="4">Поля со значком <font color="red">*</font> должны быть обязательно заполнены!</font> 
    <br><a href='job.php'>Назад</a>
</body>
</html>