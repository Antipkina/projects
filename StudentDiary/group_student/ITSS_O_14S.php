<!DOCTYPE html>
<html>

<body>

<nav class="container">
    <div class="navb">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
            <div class="ico">
                <img src="image/logo.jpg">
            </div>
            <div class="logo">
                <p>ВЫЧИСЛЕТЕЛЬНАЯ МАТЕМАТИКА</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="logo">
                <p><a href="student.php">ЗАКРЫТЬ</a></p>
            </div>
        </div>
    </div>
</nav>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="con">

        <div class="text-content">
            <h1>
                Лабораторные работы
            </h1>
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
FROM student INNER JOIN lab ON student.id = lab.student_id  WHERE student.grou_id=5 ')){
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
                    '<th>Лаб.работа 6</th>' .
                    '</tr>' .
                    '</thead>';

                while ($row = mysqli_fetch_assoc($result)) {

                    echo '<tr>' .
                        '<td style="font-size: 16px; color: #ffffff; background-color: #343477;">' . $row['fio'] . '</td>' .
                        '<td> ' . $row['name1'] . '</td>' .
                        '<td>' . $row['name2'] . '</td>' .
                        '<td>' . $row['name3'] . '</td>' .
                        '<td>' . $row['name4'] . '</td>' .
                        '<td>' . $row['name5'] . '</td>' .
                        '<td>' . $row['name6'] . '</td>' .
                        '</tr>';
                }
                echo '</table>';

            }

            ?>
            <div id="placeholder" style="width:640px; height:480px; display: none; background-color: aqua;"></div>
            <h1>
                Посещаемость
            </h1>

            <?php

            if ($result = mysqli_query($link, 'SELECT  attendance.student_id, attendance.id, attendance.note, attendance.data, attendance.note1, attendance.data1, attendance.note2, attendance.data2, student.fio 
FROM student LEFT JOIN attendance ON student.id = attendance.student_id  WHERE student.grou_id=5')) {

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
                    '</tr>' .
                    '</thead>';

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>' .
                        '<td style="font-size: 16px; color: #ffffff; background-color: #343477;">' . $row['fio'] . '</td>' .
                        '<td>' . $row['note'] . '</td>' .
                        '<td>'. $row['data'] . '</td>' .
                        '<td>' . $row['note1'] . '</td>' .
                        '<td>'. $row['data1'] . '</td>' .
                        '<td>' . $row['note2'] . '</td>' .
                        '<td>'. $row['data1'] . '</td>' .
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