<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Регистрация компании</title>
        <style type="text/css">
            INPUT {
                background: silver; margin:0px; padding:1px; /* Цвет фона */
            }
        </style>
    </head>
    <body>
        <table>

            <form action="verification_company.php" method="POST">
                <tr>
                    <td>Логин<font color="red">*</font>:</td>
                <td><input type="text" size="20" name="login" ></td>
                </tr>
                <tr>
                    <td>Пароль<font color="red">*</font>:</td>
                <td><input type="password" size="20" maxlength="20" name="password" ></td>
                </tr>
                <tr>
                    <td>Подтверждения пароля<font color="red">*</font>:</td>
                <td><input type="password" size="20" maxlength="20" name="password2"></td>
                </tr>
                <tr>
                    <td>E-mail<font color="red">*</font>:</td>
                <td><input type="text" size="20" name="email"></td>
                </tr>
                <tr>
                    <td>Название компании</td>
                    <td><input type="text" size="20" name="name_company"></td>
                </tr>
                <tr>
                    <td>Деятельность компании</td>
                    <td><input type="text" size="20" name="type_company"></td>
                </tr>
                <tr>
                    <td>О компании</td>
                    <td><input type="text" size="20" name="about_company"></td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td><input type="text" size="20" name="address"></td>
                </tr>

                <tr>
                    <td>Телефон</td>
                    <td><input type="text" size="20" name="phone_number"></td>
                </tr>


                <tr>       
                    <td colspan="3"> Направление работы компании:  
                        <input type="checkbox" name="direction[]" value="seo">  SEO
                        <input type="checkbox" name="direction[]" value="mobile"> Mobile
                        <input type="checkbox" name="direction[]" value="web"> Web
                        <input type="checkbox" name="direction[]" value="1c"> 1С 
                        <input type="checkbox" name="direction[]" value="system"> System
                    </td> 
                <tr>
                    <td colspan="3" >Численность компании: 
                        <input type="radio" name="size" value="10">А
                        <input type="radio" name="size" value="100">В
                        <input type="radio" name="size" value="1000">C
                        <input type="radio" name="size" value="10000">D  
                    </td>
                </tr>


                <tr>
                    <td></td>
                    <td colspan="3"><input type="submit" value="Зарегистровать компанию..." name="submit" ></td>
                </tr>

                <br>
            </form>
        </table>
    <font face="Verdana" size="4">Поля со значком <font color="red">*</font> должны быть обязательно заполнены!</font> 
    <br><a href='index.php'>На главную</a>
</body>
</html>