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
    <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script>
    <link href="css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="js/bootstrap-editable.min.js"></script>
    <script src = "js/jquery.easing-1.3.js"></script>
    <script src="js/address.js" type="text/javascript"></script>
    <script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>


    <title>МОАИС-О-14/1</title>

</head>
<body>
<script>
    $(document).ready(function(){

        $('#btn1').click(function(){
            $.ajax({
                url: "MOAIS_O_14.php",
                cache: false,
                success: function(html){
                    $("#content").html(html);
                }
            });
        });
    });
</script>
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
                {value: '25', text: '25%'},
                {value: '50', text: '50%'},
                {value: '75', text: '75%'},
                {value: '100', text: '100%'},
            ]
        });
        $('.people-statuss-editable').editable({
            value: 'был',
            value: '',
            source: [
                {value: '', text: ''},
                {value: '+', text: 'был'},
                {value: '-', text: 'не был'},
                {value: '+', text: 'была'},
                {value: '-', text: 'не была'}
            ]
        });
        $('.people-date-editable').editable({
            format: 'dd.mm.yyyy',
            viewformat: 'dd.mm.yyyy',

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
        <div class="hidden-print col-lg-10 col-md-10 col-sm-10 col-xs-10">
            <div class="ico">
                <img src="image/logo.jpg">
            </div>
            <div class="logo">
                <p>Электронный дневник УлГУ ФМИАТ кафедра ИТ/группа МОАИС-О-14/1</p>
            </div>
        </div>
        <div class="hidden-print col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="logo">
                <p><a href="teacher.php">ЗАКРЫТЬ</a></p>
            </div>
        </div>
    </div>
</nav>
<div class="maregin col-lg-11 col-md-11 col-sm-11 col-xs-11">
    <div class="block">
        <div class="text-content">
            <h2 class="prin">
                Группа МОАИС-О-14/1
            </h2>
            <div class="col-lg-7 col-lg-offset-3 col-md-7 col-sm-7 col-xs-7">
                <div class="icon col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <a class="hidden-print" href="#" id="btn1"><img src="/img/5.png"></a>
                </div>
                <div class="icon col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <a class="hidden-print" href="#" onClick="window.print()"> <img src="/img/4.png"> </a>
                </div>
            </div>
            <div col-lg-12 col-md-12 col-sm-12 col-xs-12>
                <h1 class="hidden-print">
                    Лабораторные работы
                </h1>
            </div>
            <div id="mydiv">
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

                if ($result = mysqli_query($link, 'SELECT student.id, lab.id, student.grou_id, lab.student_id, lab.discipline_id, lab.name1, lab.name2, lab.name3, lab.name4, lab.name5, lab.name6, lab.name7, student.fio 
FROM student INNER JOIN lab ON student.id = lab.student_id  WHERE student.grou_id=2 ')){
                    //if($result1 = mysqli_query($link, 'SELECT * FROM student where grou_id = 1 ORDER BY id')) {

                    echo '<table class="tible" >' .
                        '<thead>' .
                        '<tr>' .
                        '<th class="stile">ФИО</th>' .
                        '<th>Лаб.работа 1</th>' .
                        '<th>Лаб.работа 2</th>' .
                        '<th>Лаб.работа 3</th>' .
                        '<th>Лаб.работа 4</th>' .
                        '<th>Лаб.работа 5</th>' .
                        '<th>Лаб.работа 6</th>' .
                        '<th>Статус</th>' .
                        '</tr>' .
                        '</thead>';

                    while ($row = mysqli_fetch_assoc($result)) {
                        $sum['name7'] = $row['name1'] + $row['name2']  + $row['name3'] + $row['name4'] + $row['name5']  +  $row['name6'];
                        /*print_r($sum['name7']);*/
                        $row['name7'] = $sum['name7']/6;
                        settype($row['name7'],"integer");



                        echo '<tr>' .
                            '<td style="font-size: 16px; color: #ffffff; background-color: #343477;">' . $row['fio'] . '</td>' .
                            '<td><a href="#" class="people-status-editable" data-name="name1" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name1'] . '</a></td>' .
                            '<td><a href="#" class="people-status-editable" data-name="name2" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name2'] . '</a></td>' .
                            '<td><a href="#" class="people-status-editable" data-name="name3" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name3'] . '</a></td>' .
                            '<td><a href="#" class="people-status-editable" data-name="name4" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name4'] . '</a></td>' .
                            '<td><a href="#" class="people-status-editable" data-name="name5" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name5'] . '</a></td>' .
                            '<td><a href="#" class="people-status-editable" data-name="name6" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name6'] . '</a></td>' .
                            '<td><a href="#" class="people-status-editable" data-name="name7" data-type="text" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name7'] . '</a></td>' .
                            '</tr>';
                    }
                    echo '</table>';

                }

                ?>
            </div>
            <div id="placeholder" style="width:640px; height:480px; display: none; background-color: aqua;"></div>


            <div class="pagebreak">
                <h1 class="hidden-print">
                    Посещаемость
                </h1>

                <?php

                if ($result = mysqli_query($link, 'SELECT  attendance.student_id, attendance.id, attendance.note, attendance.data, attendance.note1, attendance.data1, attendance.note2, attendance.data2, student.fio 
FROM student LEFT JOIN attendance ON student.id = attendance.student_id  WHERE student.grou_id=2')) {

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
                        if($row['note1'] == '+')
                            $row['i'] = 33.4;
                        else
                            $row['i'] = 0;

                        if($row['note2'] == '+')
                            $row['k'] = 33.4;
                        else
                            $row['k'] = 0;

                        if($row['note'] == '+')
                            $row['l'] = 33.4;
                        else
                            $row['l'] = 0;

                        $sum['status'] = $row['i'] +  $row['k'] + $row['l'];
                        settype( $sum['status'],"integer");
                        /*print_r($sum['status']);
                       /* $sum['status'] = $row['note'] + $row['note1'] + $row['note2'];
                        print_r($sum['status']);
                        $row['name7'] = $sum['name7']/6;
                        settype($row['name7'],"integer");*/


                        echo '<tr>' .
                            '<td style="font-size: 16px; color: #ffffff; background-color: #343477;">' . $row['fio'] . '</td>' .
                            //'<td><a href="#" class="people-editable" data-name="name" data-type="text" data-title="Имя" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name'] . '</a></td>' .
                            '<td><a href="#" class="people-statuss-editable" data-name="note" data-type="select"  data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['note'] . '</a></td>' .
                            '<td><a href="#" class="people-editable" data-name="data" data-type="date" data-pk="' . $row['id'] . '" data-url="ajax.php" >' .  $row['data'] . '</a></td>' .
                            '<td><a href="#" class="people-statuss-editable" data-name="note1" data-type="select"   data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['note1'] . '</a></td>' .
                            '<td><a href="#" class="people-editable" data-name="data1" data-type="date" data-pk="' . $row['id'] . '" data-url="ajax.php" >' .  $row['data1'] . '</a></td>' .
                            '<td><a href="#" class="people-statuss-editable" data-name="note2" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['note2'] . '</a></td>' .
                            '<td><a href="#" class="people-editable" data-name="data2" data-type="date" data-pk="' . $row['id'] . '" data-url="ajax.php" >' .  $row['data2'] . '</a></td>' .
                            '<td><a href="#" class="people-statuss-editable" data-name="status" data-type="text" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $sum['status'] . '</a></td>' .
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
</body>