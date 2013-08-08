<?php

include_once("bd.php");

if (isset($_POST['submit'])) {
    if (empty($_POST['login'])) {
        echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Введите логин!"> Введите логин! </font>';
    } elseif (!preg_match("/^\w{3,}$/", $_POST['login'])) {
        echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="В поле "Логин" введены недопустимые символы!"> В поле "Логин" введены недопустимые символы! Только буквы, цифры и подчеркивание!</font>';
    } elseif (empty($_POST['password'])) {
        echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Введите пароль !"> Введите пароль!</font>';
    } elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) {
        echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Пароль слишком короткий!"> Пароль слишком короткий! Пароль должен быть не менее 6 символов! </font>';
    } elseif (empty($_POST['password2'])) {
        echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Введите подтверждение пароля!"> Введите подтверждение пароля!</font>';
    } elseif ($_POST['password'] != $_POST['password2']) {
        echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Введенные пароли не совпадают!"> Введенные пароли не совпадают!</font>';
    } elseif (empty($_POST['email'])) {
        echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Введите E-mail!">Введите E-mail! </font>';
    } elseif (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $_POST['email'])) {
        echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="E-mail имеет недопустимий формат!"> E-mail имеет недопустимий формат! Например, name@gmail.com! </font>';
    } elseif (empty($_POST['direction'])) {
        echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Направление работы компании не выбрано!">Направление работы компании не выбрано!</font>';
    } elseif (empty($_POST['size'])) {
        echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Численность компании не выбрана!">Численность компании не выбрана!</font>';
    } else {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $mdPassword = md5($password);
        $password2 = $_POST['password2'];
        $email = $_POST['email'];
        $rdate = date("d-m-Y в H:i");
        $name_company = $_POST['name_company'];
        $type_company = $_POST['type_company'];
        $about_company = $_POST['about_company'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone_number'];
        $direction = implode(",", $_POST['direction']);
        $size = ($_POST['size']);


        $query = ("SELECT id FROM companies WHERE login='$login'");
        $sql = mysql_query($query) or die(mysql_error());

        if (mysql_num_rows($sql) > 0) {
            echo '<font color="red"><img border="0" src="error.gif" align="middle" alt="Компания с таким логином уже зарегистрирована!">Компания с таким логином уже зарегистрирована!</font>';
        } else {
            $query2 = ("SELECT id FROM companies WHERE email='$email'");
            $sql = mysql_query($query2) or die(mysql_error());
            if (mysql_num_rows($sql) > 0) {
                echo '<font color="red"><img border="0" src="error.gif"  alt="Компания с таким e-mail уже зарегистрирована!"> Компания с таким e-mail уже зарегистрирована!</font>';
            } else {
                $query = "INSERT INTO companies (login, password, email, reg_date, name_company, type_company, about_company, address, phone_number, direction, size  )
							  VALUES ('$login', '$mdPassword', '$email', '$rdate', '$name_company ', '$type_company', '$about_company', '$address', '$phone_number', '$direction', '$size' )";
                $result = mysql_query($query) or die(mysql_error());
                ;
                echo '<font color="green"><img border="0" src="ok.gif" align="middle" alt="Компания успешно зарегистрирована!"> Компания успешно зарегистрирована!</font><br><a href="index.php">На главную</a>';
            }
        }
    }
}
?>