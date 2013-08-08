<?php include_once("bd.php"); ?>	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Вход</title>
        <style type="text/css">
            INPUT {
                background: silver; /* Цвет фона */
            }

            .center {
                width: 250px;
                margin:auto;
            }

            a {
                padding-left: 60px;
                font-size: 18pt;
            }

            .button {
                margin-left: 60px;
                margin-top: 20px;
                margin-bottom: 20px;
                cursor:pointer;
                display:block;
                height:30px;
                width:140px;
                text-align:center;
                border: 1px solid #434343;
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
            }

            div {
                border: 1px solid #434343;
                padding: 10px;
                background: #e3e3e3;
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
                width: 500px
            }
        </style>
    </head>
    <body>

        <?php
        if (empty($login) and empty($password)) {
            print <<<HERE
   <div class="center">
<table>
      <form action="login.php" method="POST">
      <tr>
      <p><b>Выберите тип входа:</b></p>
    <p><input type="radio" name="answer" value="users">Пользователь<Br>
    <input type="radio" name="answer" value="companies">Компания<Br>
    
      <td>Логин:</td>
      <td><input type="text" name="login" ></td>
      </tr>
	  
      <tr>
      <td>Пароль:</td>
      <td><input type="password" name="password" ></td>
      </tr>
	  
	  <tr>
      <td colspan="2"><input type="submit" value="OK" name="submit" class ="button" ></td>
      </tr>
      </form>
      </table>
<a href="registration.php">Регистрация</a>
</div>
HERE;
        } else {
            echo "<meta http-equiv='Refresh' content='0; URL=main_content.php'>";
        }
        ?>
    </body>
</html>