<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Создать резюме</title>
        <style type="text/css">
            INPUT {
                 margin:4px; padding:3px; /* Цвет фона */
            }
        </style>
    </head>
    <body>
      
        <table>
                
            <form action="create_resume.php" method="POST">

                <tr>
                    <td>Название резюме<font color="red">*</font>:</td>
                <td><input type="text" size="20" name="name_resume" ></td>
                </tr>

                <tr>       
                    <td colspan="3"> Языки программирования, которые вы знаете<font color="red">*</font>:  
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
                    <td colspan="3" >Опыт работы<font color="red">*</font>: 
                        <input type="radio" name="experience" value="least_1"> Менее года
                        <input type="radio" name="experience" value="near_1_3"> 1-3 года
                        <input type="radio" name="experience" value="near_3_5"> 3-5 лет
                        <input type="radio" name="experience" value="more_5"> более 5 лет
                    </td>
                </tr>

                <tr>
                    <td>Город:<font color="red">*</font>:</td>
                <td><input type="text" size="20" name="city"></td>
                </tr>

                <tr>
                    <td colspan="3" >Образование<font color="red">*</font>: 
                        <input type="radio" name="education" value="middle"> Среднее
                        <input type="radio" name="education" value="half_high"> Неоконченное высшее
                        <input type="radio" name="education" value="high"> Высшее
                    </td>
                </tr>
                
                <tr>
                    <td colspan="3" >Тип занятости<font color="red">*</font>: 
                        <input type="radio" name="work_time" value="full_day"> Полный рабочий день
                        <input type="radio" name="work_time" value="half_day"> Частичная занятость
                        <input type="radio" name="work_time" value="remote"> Удаленная работа
                </tr>
                
                <tr>
                    <td colspan="3" >Зарплата<font color="red">*</font>: 
                        <input type="radio" name="pay" value="least_10"> менее 10 000 рублей
                        <input type="radio" name="pay" value="near_10_20"> 10 000-20 000 рублей
                        <input type="radio" name="pay" value="near_20-40"> 20 000-40 000 рублей
                        <input type="radio" name="pay" value="more_40"> более 40 000 рублей
                    </td>
                </tr>
                
                <tr>
                    <td>О себе<font color="red">*</font>:</td>
                    <td><input type="text" size="200" name="extra"></td>
                </tr>

                <tr>
                    <td></td>
                    <td colspan="3"><input type="submit" value="Создать резюме" name="submit" ></td>
                </tr>

                <br>
            </form>
        </table>
    <font face="Verdana" size="4">Поля со значком <font color="red">*</font> должны быть обязательно заполнены!</font> 
    <br><a href='job.php'>Назад</a>
</body>
</html>