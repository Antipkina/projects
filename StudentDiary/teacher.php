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
    <script src="js/jquery.js" type="text/javascript"></script>
    <script type="text/javascript" src="selects.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <title>Преподаватель</title>

</head>
<body>
<nav class=" hidden-print container">
    <div class="navb">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
            <div class="ico">
                <img src="image/logo.jpg">
            </div>
            <div class="logo">
                <p>Электронный дневник УлГУ ФМИАТ кафедры ИТ</p>
            </div>
        </div>
        <div class="hidden-print col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="logo">
                <p><a href="auth_teacher.php">ВЕРНУТСЯ</a></p>
            </div>
        </div>
    </div>
</nav>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div id="content"></div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">

    <div class="hidden-print col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <div class="selectform">
            <form action="#" method="get" >
                <select class="selectform" name="teacher_id" id="teacher_id" class="StyleSelectBox">
                    <option value="0">- выберите преподавателя -</option>
                    <option value="1">Волков М.А.</option>
                    <option value="2">Жаркова Г.О.</option>
                    <option value="3">Цыганова Ю.В.</option>
                </select>
                <select class="selectform" name="discipline_id" id="discipline_id" disabled="disabled" class="StyleSelectBox">
                    <option value="0">- выберите предмет -</option>
                </select>
                <select class="selectform" name="grou_id" id="grou_id" disabled="disabled" class="StyleSelectBox">
                    <option value="0" >- выберите группу -</option>
                </select>
            </form>
        </div>


        <h2 class="color">Добавить контрольную/лабораторную работу</h2>
        <div class="form-action">
            <input type="submit" id="edit-submit" name="op" value="Добавить" class="form-submit">
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <div class="block">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="dt"></div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            </div>
            <div class="text-content">
                <div class="hidden-print col-lg-7 col-md-7 col-sm-7 col-xs-7">
                    <h1>
                        Расписание
                    </h1>
                    <div class="col-lg- 6col-md-6 col-sm-6 col-xs-6">
                        <form>
                            <select class="selectform" name="gr_id" id="gr_id" class="StyleSelectBox">
                                <option value="0">- выберите преподавателя -</option>
                                <option value="1">Цыганова Ю.В.</option>
                                <option value="2">Волков М.А.</option>
                                <option value="3">Жаркова Г.О.</option>
                                <option value="4">Савинов Ю. Г.</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="hidden-print col-lg-5 col-md-5 col-sm-5 col-xs-5">
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
</body>