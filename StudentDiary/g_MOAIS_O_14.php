<!DOCTYPE html>
<html>
<head>
    <!-- META -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name = "apple-mobile-web-app-capable" content = "yes" />


    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">
    <link href="/css/address.css" rel="stylesheet">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script>
    <link href="/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="/js/bootstrap-editable.min.js"></script>
    <script src = "/js/jquery.easing-1.3.js"></script>
    <!-- <script src="js/address.js" type="text/javascript"></script>-->
    <script src="/js/jquery.maskedinput.min.js" type="text/javascript"></script>
    <title>МОАИС-О-14/1</title>

</head>
<body>
<script>
    $(document).ready(function(){

        $('#btn1').click(function(){
            $.ajax({
                url: "/group_teacher/MOAIS_O_14.php",
                cache: false,
                success: function(html){
                    $("#content").html(html);
                }
            });
        });
    });

    $(document).ready(function(){

        $('#btn2').click(function(){
            $.ajax({
                url: "graph.php",
                cache: false,
                success: function(html){
                    $("#content").html(html);
                }
            });
        });
    });

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
            value: '',
            value: '',
            source: [
                {value: '+', text: '+'},
                {value: '-', text: '-'},
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
            <div class="hidden-print col-lg-7 col-lg-offset-2 col-md-7 col-sm-7 col-xs-7">
                <div class="icon col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <a href="#" id="btn1"><img src="/img/5.png"></a>
                </div>
                <div class="icon col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <a href="#" onClick="window.print()"> <img src="/img/4.png"> </a>
                </div>
                <div class="icon col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <a href="#"> <img src="/img/save.png"> </a>
                </div>
                <div class="icon  col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <a href="#" id="btn2"> <img src="/img/graphics.png"> </a>
                </div>
            </div>
            <div col-lg-12 col-md-12 col-sm-12 col-xs-12>


                <h3 class="hidden-print">
                    Лабораторные работы
                </h3>

                <div id="mydiv">
                    <?php
                    include('bd.php');
                    if ($result = mysqli_query($link, 'SELECT student.id, lab.id, student.grou_id, lab.student_id, lab.discipline_id, lab.name1, lab.name2, lab.name3, lab.name4, lab.name5, lab.name6, lab.name7, student.fio 
                    FROM student INNER JOIN lab ON student.id = lab.student_id  WHERE student.grou_id=5 AND  lab.discipline_id = 1 ')){

                        include('tible.php');
                        while ($row = mysqli_fetch_assoc($result)) {
                            $sum['name7'] = $row['name1'] + $row['name2'] + $row['name3'] + $row['name4'] + $row['name5'] + $row['name6'];
                            $row['name7'] = $sum['name7'] / 6;
                            settype($row['name7'], "integer");
                            include('tible_lab.php');
                        }
                        mysqli_free_result($result);

                        mysqli_close($link);


                    }
                    echo '</table>';
                    ?>

                </div>
                <div class="pagebreak">
                    <h3 class="hidden-print">
                        Посещаемость
                    </h3>

                    <?php
                    include('bd.php');
                    if ($result = mysqli_query($link, 'SELECT  student.fio, mark.student_id, mark.id, mark.discipline_id, mark.mark,  attendance.student_id, attendance.id, attendance.note, attendance.data, attendance.note1, attendance.data1, attendance.note2, attendance.data2 
FROM mark RIGHT JOIN student ON mark.student_id = student.id 
            LEFT JOIN attendance ON attendance.student_id = student.id  WHERE student.grou_id=5 AND mark.discipline_id = 1')) {
                        include('tible_a.php');

                        while ($row = mysqli_fetch_assoc($result))
                        {
                            if ($row['note1'] == '+')
                                $row['i'] = 33.4;
                            else
                                $row['i'] = 0;

                            if ($row['note2'] == '+')
                                $row['k'] = 33.4;
                            else
                                $row['k'] = 0;

                            if ($row['note'] == '+')
                                $row['l'] = 33.4;
                            else
                                $row['l'] = 0;

                            $sum['status'] = $row['i'] + $row['k'] + $row['l'];
                            settype($sum['status'], "integer");
                            /*$row2 = mysqli_fetch_assoc($result2);*/
                            include('tible_ad.php');
                        }
                        echo '</table>';

                    }
                    ?>

                </div>
            </div>
        </div>
</body>