<!DOCTYPE html>
<html>
<head>
    <!-- META -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name = "apple-mobile-web-app-capable" content = "yes" />

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src = "js/jquery.easing-1.3.js"></script>
    <!--<link href="css/default.css" rel="stylesheet" type="text/css"/>-->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script type="text/javascript" src="selectStudent.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="tsel.js"></script>

    <title>Студент</title>

</head>
<body>
<nav class="container">
    <div class="navb">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="ico">
                <img src="image/logo.jpg">
            </div>
            <div class="logo">
                <p>Электронный дневник УлГУ/Студент</p>
            </div>
        </div>
        <div class="col-lg-2 col-lg-offset-2  col-md-2 col-sm-2 col-xs-2">
            <ul class="menu-main">
                <li><a href="auth_teacher.php">Главная</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">

    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <div class="func">
            <div class="button">
                <a class="but" href="javascript:onoff('div1');">Общая ведомость</a>
            </div>
           <div id ="div1" style="display: none">
               <div class="selectform">
                   <form>
                       <select class="selectform" name="g_id" id="g_id" class="StyleSelectBox">
                           <option value="0">- выберите группу -</option>
                           <option value="1">МОАИС-О-14/1</option>
                           <option value="2">ИТСС-О-14/1</option>
                           <option value="3">ПМ-О14/1</option>
                           <option value="4">КБ-О-14/1</option>
                       </select>
                   </form>
               </div>
           </div>
            <div class="button">
                <a class="but" href="javascript:onoff('div2');">Ведомость по предметам</a>
            </div>
            <div id="div2" style="display: none">
                <div class="selectform">
                    <form action="#" method="get" >
                        <select class="selectform" name="teacher_id" id="teacher_id" class="StyleSelectBox">
                            <option value="0">- выберите преподавателя -</option>
                            <option value="1">Волков М.А.</option>
                            <option value="2">Жаркова Г.О.</option>
                            <option value="3">Цыганова Ю.В.</option>
                        </select>
                        <select class="selectform" name="discipline_id" id="discipline_id" disabled="disabled" class="StyleSelectBox">
                            <option value="0">- выбирите предмет -</option>
                        </select>
                        <select class="selectform" name="grou_id" id="grou_id" disabled="disabled" class="StyleSelectBox">
                            <option value="0" >- выберите группу -</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="button">
                <a class="but" href="javascript:onoff('div3');">Методическая литература</a>
            </div>
            <div id="div3" style="display: none">
                <div class="select">
                    <form action="#" method="get" >
                        <select class="selectform" name="teacher_id" id="teacher_id" class="StyleSelectBox">
                            <option value="0">- выберите преподавателя -</option>
                            <option value="1">Волков М.А.</option>
                            <option value="2">Жаркова Г.О.</option>
                            <option value="3">Цыганова Ю.В.</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">

        <div class="block">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="content"></div>
                <div class="dt"></div>
            </div>
            <div class="text-content">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                    <h1>
                        Расписание
                    </h1>
                    <div class="col-lg- 6col-md-6 col-sm-6 col-xs-6">
                        <form>
                            <select class="selectform" name="gr_id" id="gr_id" class="StyleSelectBox">
                                <option value="0">- выберите группу -</option>
                                <option value="1">МОАИС-О-14/1</option>
                                <option value="2">ИТСС-О-14/1</option>
                                <option value="3">ПМ-О14/1</option>
                                <option value="4">КБ-О-14/1</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <h1>
                            Календарь
                        </h1>
                    <table id="calendar4">
                        <thead>
                        <tr><td><td colspan="4"><select>
                                    <option value="0">Январь</option>
                                    <option value="1">Февраль</option>
                                    <option value="2">Март</option>
                                    <option value="3">Апрель</option>
                                    <option value="4">Май</option>
                                    <option value="5">Июнь</option>
                                    <option value="6">Июль</option>
                                    <option value="7">Август</option>
                                    <option value="8">Сентябрь</option>
                                    <option value="9">Октябрь</option>
                                    <option value="10">Ноябрь</option>
                                    <option value="11">Декабрь</option>
                                </select><td colspan="3"><input type="number" value="" min="0" max="9999" size="4">
                        <tr><td><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
                        <tbody>
                    </table>
                    <script src="js/calendar.js" type="text/javascript"></script>
                </div>
            </div>
        </div>
    </div>

</div>

</body