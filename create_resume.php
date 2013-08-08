<?php
    include_once("bd.php");
    //проверка корректности заполнения полей формы
    if (isset($_POST['submit'])){
		if(empty($_POST['name_resume']))  {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Введите название резюме!"> Введите название резюме! </font>';
		} 
		elseif(empty($_POST['lang_prog'])) {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Выберите язык(и) программирования!"> Выберите язык(и) программирования!</font>';
		}
		elseif(empty($_POST['city'])) {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Введите название города!"> Введите название города!</font>';
		}
		elseif(empty($_POST['education'])) {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Выберите тип образования!"> Выберите тип образования!</font>';
		}
		elseif(empty($_POST['work_time'])) {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Выберите тип рабочего дня!"> Выберите тип рабочего дня!</font>';
		}
		elseif(empty($_POST['pay'])) {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Выберите размер зарплаты!"> Выберите размер зарплаты!</font>';
		}
		elseif (empty($_POST['extra']))
                {
                     echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Поле "О себе" не заполнено!"> Поле "О себе" не заполнено! </font>';
                }
                
		else{
			$name_resume = $_POST['name_resume'];
                        $lang_prog = $_POST['lang_prog'];
			$experience = $_POST['experience'];
			$city = $_POST['city'];
			$education = $_POST['education'];
			
			$work_time = $_POST['work_time'];
			$pay = $_POST['pay']; 
                        $extra = $_POST['extra']; 
                        $owner = $login;
                        $rdate = date("d-m-Y в H:i");
                        

			  
			$query = ("SELECT id_resume FROM resume WHERE name_resume='$name_resume'");
			$sql = mysql_query($query) or die(mysql_error());
			
			if (mysql_num_rows($sql) > 0) {
				echo '<font color="red"><img border="0" src="error.gif" align="middle" alt="Резюме с таким названием уже существует!"> Резюме с таким названием уже существует!</font>';
			}
			else {
					$query = "INSERT INTO resume (name_resume, lang_prog, experience, city, education, work_time, pay, extra, owner, reg_data  )
							  VALUES ('$name_resume', '$lang_prog', '$experience', '$city', '$education', '$work_time', '$pay', '$extra', '$owner', '$rdate' )";
					$result = mysql_query($query) or die(mysql_error());;
					echo '<font color="green"><img border="0" src="ok.gif" align="middle" alt="Резюме успешно создано!"> Резюме успешно создано!</font><br><a href="index.php">На главную</a>';
					
								
				}
			}
    }
    
?>