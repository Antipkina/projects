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
    <link href="css/address.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>

    <link href="css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="js/bootstrap-editable.min.js"></script>
    <script src="js/address.js" type="text/javascript"></script>
    <script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>



    <title>ПМ-О-14/1</title>

</head>
<body>
<script>
    $.fn.editable.defaults.mode = 'popup';
    $(document).ready(function() {
        $('.people-editable').editable();
        $('.people-phone-editable').editable({
            type: 'text',
            tpl:'   <input type="text" class="form-control people-phone">'

        }).on('shown',function(){
            $("input.people-phone-editable").mask("(999) 999-9999");
        });
        $('.people-status-editable').editable({
            value: 'сдал',
            value: '',
            source: [
                {value: '', text: ''},
                {value: 'сдал', text: 'сдал'},
                {value: 'не сдал', text: 'не сдал'},
                {value: 'сдала', text: 'сдала'},
                {value: 'не сдала', text: 'не сдала'}
            ]
        });
        $('.people-statuss-editable').editable({
            value: 'был',
            value: '',
            source: [
                {value: '', text: ''},
                {value: 'был', text: 'был'},
                {value: 'не был', text: 'не был'},
                {value: 'была', text: 'была'},
                {value: 'не была', text: 'не была'}
            ]
        });
        $('.people-date-editable').editable({
            format: 'dd.mm.yyyy',
            viewformat: 'dd.mm.yyyy',
            datepicker: {
                weekStart: 1
            }
        });

        $('.people-email-editable').editable({
            validate: function(value) {
                if(isEmail(value)) {

                } else {
                    return 'Введите настоящий e-mail';
                }
            }
        });

        $('.people-address-editable').editable({
            value: {
            }
        });
    });

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

</script>
<nav class="container">
    <div class="navb">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
            <div class="ico">
                <img src="image/logo.jpg">
            </div>
            <div class="logo">
                <p>Электронный дневник УлГУ ФМИАТ кафедра ИТ/группа ПМ-О-14/1</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="logo">
                <p><a href="teacher.php">Вернуться</a></p>
            </div>
        </div>
    </div>
</nav>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 content">
    <div class="block">

        <div class="text-content">
            <h1>
                Лабораторные работы
            </h1>
            <script type="text/javascript">
                $(document).ready(function(){
                    //Количество элементов div находящихся внутри дочернего Div "<div class="scroll_child">"
                    var quqntity=$(".scroll_child div").size();

                    //Общая длинна всех элементов
                    var widthScroll=0;
                    for (i=0;i<quqntity;i++){
                        widthScroll+=$(".scroll_child div:eq("+i+")").width();
                    }
                    //Установка ширины дочернего Div "<div class="scroll_child">"
                    $(".scroll_child").width(widthScroll);
                });
            </script>

            <style type="text/css">
                .scroll{
                    min-width:500px;
                    height:400px;
                    overflow-x:hidden;
                    overflow-y:scroll;
                }
            </style>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 scroll" >
            <?php
            $link = mysqli_connect(
                'localhost',
                'root',
                '',
                'diary');

            if (!$link) {
                printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
                exit;
            }
            include_once('db.php');

            if ($result = mysqli_query($link, 'SELECT student.id, lab.id, student.grou_id, lab.student_id, lab.discipline_id, lab.name1, lab.name2, lab.name3, lab.name4, lab.name5, lab.name6, lab.name7, student.fio 
FROM student INNER JOIN lab ON student.id = lab.student_id  WHERE student.grou_id=1 ')){
            //if($result1 = mysqli_query($link, 'SELECT * FROM student where grou_id = 1 ORDER BY id')) {

                echo '<table class="tible">' .
                    '<thead>' .
                    '<tr>' .
                    '<th style="background: #fff; color: #343477">ФИО</th>' .
                    '<th>Лаб.работа 1</th>' .
                    '<th>Лаб.работа 2</th>' .
                    '<th>Лаб.работа 3</th>' .
                    '<th>Лаб.работа 4</th>' .
                    '<th>Лаб.работа 5</th>' .
                    '<th>Лаб.работа 7</th>' .
                    '<th>Статус</th>' .
                    '</tr>' .
                    '</thead>';

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>' .
                        '<td style="font-size: 16px; color: #ffffff; background-color: #343477;">' . $row['fio'] . '</td>' .
                        '<td><a href="#" class="people-status-editable" data-name="name1" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name1'] . '</a></td>' .
                        '<td><a href="#" class="people-status-editable" data-name="name2" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name2'] . '</a></td>' .
                        '<td><a href="#" class="people-status-editable" data-name="name3" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name3'] . '</a></td>' .
                        '<td><a href="#" class="people-status-editable" data-name="name4" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name4'] . '</a></td>' .
                        '<td><a href="#" class="people-status-editable" data-name="name5" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name5'] . '</a></td>' .
                        '<td><a href="#" class="people-status-editable" data-name="name6" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name6'] . '</a></td>' .
                        '<td><a href="#" class="people-status-editable" data-name="name7" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name7'] . '</a></td>' .
                        '</tr>';
                }
                echo '</table>';
            }

                ?>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7" >
                <h1>
                    Посещаемость
                </h1>
                <div class="scroll" >
                <?php

                if ($result = mysqli_query($link, 'SELECT  attendance.student_id, attendance.id, attendance.note, attendance.data, attendance.note1, attendance.data1, attendance.note2, attendance.data2, student.fio 
FROM student LEFT JOIN attendance ON student.id = attendance.student_id  WHERE student.grou_id=1')) {

                    echo '<table class="tible">' .
                        '<thead>' .
                        '<tr>' .
                        '<th>ФИО</th>' .
                        '<th>Отметка</th>' .
                        '<th>Дата</th>' .
                        '<th>Отметка</th>' .
                        '<th>Дата</th>' .
                        '<th>Отметка</th>' .
                        '<th>Дата</th>' .
                        '<th>Статус</th>' .
                        '</tr>' .
                        '</thead>';

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>' .
                            '<td style="font-size: 16px; color: #ffffff; background-color: #343477;">' . $row['fio'] . '</td>' .
                            //'<td><a href="#" class="people-editable" data-name="name" data-type="text" data-title="Имя" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name'] . '</a></td>' .
                            '<td><a href="#" class="people-statuss-editable" data-name="note" data-type="select"  data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['note'] . '</a></td>' .
                            '<td><a href="#" class="people-date-editable" data-name="data" data-type="date" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . date('d.m.Y', $row['data']) . '</a></td>' .
                            '<td><a href="#" class="people-statuss-editable" data-name="note1" data-type="select"   data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['note1'] . '</a></td>' .
                            '<td><a href="#" class="people-date-editable" data-name="data1" data-type="date" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . date('d.m.Y', $row['data1']) . '</a></td>' .
                            '<td><a href="#" class="people-statuss-editable" data-name="note2" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['note2'] . '</a></td>' .
                            '<td><a href="#" class="people-date-editable" data-name="data2" data-type="date" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . date('d.m.Y', $row['data2']) . '</a></td>' .
                            '<td><a href="#" class="people-statuss-editable" data-name="status" data-type="text" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['status'] . '</a></td>' .
                            '</tr>';
                    }
                    echo '</table>';
                    mysqli_free_result($result);
                    mysqli_close($link);
                }
            ?>
                </div>
            </div>
        </div>

    </div>
</div>
</body>