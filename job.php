<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
include("bd.php");
?>
<html>
    <head>
        <title>Работа</title>
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
                    <a href="job.php" class="active">Работа</a>
                    <a href="search_resume_form.php">Поиск резюме</a>
                    <a href="search_vacancy_form.php">Поиск вакансий</a>
                </div>
            </div>
        </div>
        <table class="body" cellspacing="0">
            <tr>
                <td width="81">&nbsp;</td>
                <td width="251" class="leftColumn" rowspan="2">
                    <div id="subMenuContainer">

                        <div id="subMenu">
                            <a href="#" onclick="show_resume_create()">Создать резюме</a>
                            <a href="#" onclick="show_all_resume()" >Все резюме</a>
                            <a href="#" onclick="show_vacancy_create()">Создать вакансию</a>
                            <a href="#" onclick="show_all_vacancies()" >Все вакансии</a>
                            <script type="text/javascript">
                                function show_all_vacancies(){
                                    $.ajax({  
                                        url: "show_vacancy.php",  
                                        cache: false,  
                                        success: function(html){  
                                            $(".contentArea").html(html);  
                                        }  
                                    });   
                                }  
      
                                function show_all_resume(){
                                    $.ajax({  
                                        url: "show_resume.php",  
                                        cache: false,  
                                        success: function(html){  
                                            $(".contentArea").html(html);  
                                        }  
                                    });   
                                } 
                                
                                function show_vacancy_create(){
                                    $.ajax({  
                                        url: "create_vacancy_form.php",  
                                        cache: false,  
                                        success: function(html){  
                                            $(".contentArea").html(html);  
                                        }  
                                    });  
                                } 
                                
                                function show_resume_create(){
                                    $.ajax({  
                                        url: "create_resume_form.php",  
                                        cache: false,  
                                        success: function(html){  
                                            $(".contentArea").html(html);  
                                        }  
                                    });  
                                } 

                            </script>


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
                                    <script language='javascript'>if ($('#mainNews .news-list-item').length==0) $('#mainNews').parent().parent().parent().parent().hide();</script>
                                    <div>&nbsp;</div>
                                </div></div>
                        </div></div>
                    <div class="contentAreaWrapper">
                        <div class="contentArea">


                            <div id="contentNews">


                            </div>
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

