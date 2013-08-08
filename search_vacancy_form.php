<?php
include_once("bd.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Поиск вакансий</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="default.css" />
        <link rel="stylesheet" type="text/css" href="../user_upload/_science_admins/template/styles.css " />
        <script src="js/jquery.js"></script>
    </head>
    <body>
        <div class="header">
            <div class="headerInner">
                <div style="padding-right:60px; height:80px">
                    <a href="http://www.tu-bryansk.ru" class="titleBgtu"><h2>Брянский государственный технический университет</h2></a>
                    <div class="iconsPanel">
                        <a href="/">&nbsp;</a>
                        <a href="/?id=sitemap">&nbsp;</a>
                        <a href="mailto:webmaster@iipo.tu-bryansk.ru">&nbsp;</a>
                    </div>
                </div>
                <table class="topPanel">
                    <tr>
                        <td><a href="/"><img class="logo" src="img/iipo.png" /></a></td>
                        <td><h1 class="titleIipo">Кафедра "Информатика и программное обеспечение"</h1>

                        </td>
                        <td width="180" class="phone"><span>(4832)</span>56-09-84</td>
                        <td width="170" class="panel">
                            <div id='searchbox'></div>
                            <div class="loginbox">
                                <?php
                                if ($_SESSION['subject'] == 'companies')
                                    echo "Компания <strong>" . $login . "</strong> <br>";
                                if ($_SESSION['subject'] == 'users')
                                    echo "Пользователь <strong>" . $login . "</strong> <br>";
                                ?>
                                <a href="exit.php" title="Exit">Выход</a></div>
                        </td>
                        <td width="60">&nbsp;</td>
                    </tr>
                </table>
                <div id="mainMenu">
                    <a href="main_content.php" >Главная</a>
                    <a href="job.php">Работа</a>
                    <a href="search_resume_form.php" >Поиск резюме</a>
                    <a href="search_vacancy_form.php" class="active">Поиск вакансий</a>
                </div>
            </div>
        </div>
        <table class="body" cellspacing="0">
            <tr>
                <td width="81">&nbsp;</td>
                <td width="251" class="leftColumn" rowspan="2">
                    <div id="subMenuContainer">
                        <div id="subMenu">

                        </div>
                    </div>
                    <div class="banners">
                        <a href="http://www.swd.ru" target="_blank"><img src="img/qnx_130x216.jpg" /></a>
                        <br /><br />
                        RSS-новости<br />
                        <a href="/?id=rss&type=100" target="_blank"><img src="img/rss20.gif" /></a>
                    </div>
                </td>
                <td rowspan="2">
                    <div class='mainNewsWrapper1'><div class='mainNewsWrapper2'>
                            <div class='mainNewsWrapper3'><div class='mainNewsWrapper4'>
                                    <div id="mainNews"></div>
                                    <script language='javascript'>if ($('#mainNews .news-list-item').length == 0)
                                            $('#mainNews').parent().parent().parent().parent().hide();</script>
                                    <div>&nbsp;</div>
                                </div></div>
                        </div></div>
                    <div class="contentAreaWrapper">
                        <div class="contentArea">
                            <table>

                                <form action="search_vacancy_form.php" method="POST">

                                    <tr>       
                                        <td colspan="3"> Языки программирования: 

                                            <input type="radio" name="lang_prog" value="c" <?php if ($_POST['lang_prog'] == 'c') echo "checked"; ?> >  C/C++/C#
                                            <input type="radio" name="lang_prog" value="java" <?php if ($_POST['lang_prog'] == 'java') echo "checked"; ?>> Java
                                            <input type="radio" name="lang_prog" value="php"  <?php if ($_POST['lang_prog'] == 'php') echo "checked"; ?> > PHP
                                            <input type="radio" name="lang_prog" value="vb" <?php if ($_POST['lang_prog'] == 'vb') echo "checked"; ?> > Visual Basic 
                                            <input type="radio" name="lang_prog" value="python" <?php if ($_POST['lang_prog'] == 'python') echo "checked"; ?>> Python
                                            <input type="radio" name="lang_prog" value="scala" <?php if ($_POST['lang_prog'] == 'scala') echo "checked"; ?>> Scala
                                            <input type="radio" name="lang_prog" value="ruby" <?php if ($_POST['lang_prog'] == 'ruby') echo "checked"; ?>> Ruby
                                            <input type="radio" name="lang_prog" value="erlang" <?php if ($_POST['lang_prog'] == 'erlang') echo "checked"; ?>> Erlang
                                        </td> 
                                    <tr>

                                    <tr>
                                        <td colspan="3" >Опыт работы: 
                                            <input type="radio" name="experience" value="least_1"  <?php if ($_POST['experience'] == 'least_1') echo "checked"; ?> > Менее года
                                            <input type="radio" name="experience" value="near_1_3" <?php if ($_POST['experience'] == 'near_1_3') echo "checked"; ?> > 1-3 года
                                            <input type="radio" name="experience" value="near_3_5" <?php if ($_POST['experience'] == 'near_3_5') echo "checked"; ?> > 3-5 лет
                                            <input type="radio" name="experience" value="more_5" <?php if ($_POST['experience'] == 'more_5') echo "checked"; ?> > более 5 лет
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Город:</td>
                                        <td><input type="text" size="20" name="city" value="<?php if (isset($_POST['city'])) Echo $_POST['city']; ?>"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="3" >Образование: 
                                            <input type="radio" name="education" value="middle" <?php if ($_POST['education'] == 'middle') echo "checked"; ?> > Среднее
                                            <input type="radio" name="education" value="half_high" <?php if ($_POST['education'] == 'half_high') echo "checked"; ?> > Неоконченное высшее
                                            <input type="radio" name="education" value="high" <?php if ($_POST['education'] == 'high') echo "checked"; ?> > Высшее
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3" >Тип занятости: 
                                            <input type="radio" name="work_time" value="full_day" <?php if ($_POST['work_time'] == 'full_day') echo "checked"; ?> > Полный рабочий день
                                            <input type="radio" name="work_time" value="half_day" <?php if ($_POST['work_time'] == 'half_day') echo "checked"; ?> > Частичная занятость
                                            <input type="radio" name="work_time" value="remote" <?php if ($_POST['work_time'] == 'remote') echo "checked"; ?> > Удаленная работа
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3" >Зарплата: 
                                            <input type="radio" name="pay" value="least_10" <?php if ($_POST['pay'] == 'least_10') echo "checked"; ?> > менее 10 000 рублей
                                            <input type="radio" name="pay" value="near_10_20" <?php if ($_POST['pay'] == 'near_10_20') echo "checked"; ?>  > 10 000-20 000 рублей
                                            <input type="radio" name="pay" value="near_20-40" <?php if ($_POST['pay'] == 'near_20_40') echo "checked"; ?>  > 20 000-40 000 рублей
                                            <input type="radio" name="pay" value="more_40" <?php if ($_POST['pay'] == 'more_40') echo "checked"; ?>  > более 40 000 рублей
                                        </td>
                                    </tr>


                                    <tr>
                                        <td></td>
                                        <td colspan="3"><input type="submit" value="Искать вакансию" name="submit" ></td>
                                    </tr>

                                    <br>
                                </form>
                            </table>

                            <?php
                            include_once("bd.php");
                            include_once("replace_fields.php");
                            $lang_prog = $_POST['lang_prog'];
                            $experience = $_POST['experience'];
                            $city = $_POST['city'];
                            $education = $_POST['education'];
                            $work_time = $_POST['work_time'];
                            $pay = $_POST['pay'];

                            class Node {

                                protected $testAttribute;
                                protected $links;

                                public function __construct($testAttribute) {

                                    $this->testAttribute = $testAttribute;
                                    $this->links = array();
                                }

                                public function addLink($value, $node) {

                                    $link = new stdClass();
                                    $link->value = $value;
                                    $link->node = $node;
                                    $this->links[count($this->links)] = $link;
                                    return true;
                                }

                                public function execute($item) {

                                    if (key_exists($this->testAttribute, $item)) {
                                        $value = $item[$this->testAttribute];
                                        foreach ($this->links as $link) {
                                            $linkValue = str_replace("x", $value, $link->value);
                                            eval('$result=(' . $linkValue . ');');
                                            if ($result) {
                                                if ($link->node instanceof Node) {
                                                    return $link->node->execute($item);
                                                } else {
                                                    return $link->node;
                                                }
                                            }
                                        }
                                    }
                                }

                            }

                            /* Дерево решений */
                            $checkPay = new Node("pay");
                            $checkPay->addLink("x!='$pay'", 'F_pay');
                            $checkPay->addLink("x=='$pay'", 'T');

                            $checkWork = new Node("work_time");
                            $checkWork->addLink("x!='$work_time'", 'F_work');
                            $checkWork->addLink("x=='$work_time'", $checkPay);

                            $checkEducation = new Node("education");
                            $checkEducation->addLink("x!='$education'", 'F_edu');
                            $checkEducation->addLink("x=='$education'", $checkWork);

                            $checkCity = new Node("city");
                            $checkCity->addLink("x!='$city'", 'F_city');
                            $checkCity->addLink("x=='$city'", $checkEducation);

                            $checkExperience = new Node("experience");
                            $checkExperience->addLink("x!='$experience'", 'F_experience');
                            $checkExperience->addLink("x=='$experience'", $checkCity);

                            $checkLang = new Node("lang_prog");
                            $checkLang->addLink("x!='$lang_prog'", 'F_lang');
                            $checkLang->addLink("x=='$lang_prog'", $checkExperience);



                            $my_query = mysql_query("SELECT * FROM vacancies ") or die(mysql_error());

                            while ($row = mysql_fetch_array($my_query)) {
                                echo "Языки программирования: ", $row["lang_prog"], "<br />",
                                "Опыт: ", replace_experience($row["experience"]), "<br />",
                                "Город: ", $row["city"], "<br />",
                                "Образование: ", replace_education($row['education']), "<br />",
                                "Тип занятости: ", replace_work_time($row['work_time']), "<br />",
                                "Зарплата: ", replace_pay($row['pay']), "<br />",
                                "Результат: ", $checkLang->execute($row), "<br /> <br />";
                            }
                            ?>

                            <div id="contentNews"></div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="footerLeft" rowspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td class="footer" colspan="2">
                    <div class="address">
                        241035, г. Брянск,<br />
                        бульвар им. 50-летия Октября, 7<br />
                        (учебный корпус 2, 4-й этаж)<br />
                        <br />
                        Тел./факс (4832) 56-09-84<br />
                        <a href='mailto:iipo@tu-bryansk.ru'>iipo@tu-bryansk.ru</a>
                    </div>

                </td>
            </tr>
        </table>
    </body>
</html>
