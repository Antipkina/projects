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
                <p>ВЕДОМОСТЬ ГРУППЫ МОАИС-О-14/1</p>
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
            <h3>
                Ведомость
            </h3>
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

            if ($result = mysqli_query($link, 'SELECT  mark.mark FROM mark   WHERE mark.discipline_id = 1 AND grou_id = 5'))
                if ($result2 = mysqli_query($link, 'SELECT  mark.mark FROM mark   WHERE mark.discipline_id = 5 AND grou_id = 5'))
                    if ($result3 = mysqli_query($link, 'SELECT  mark.mark FROM mark   WHERE mark.discipline_id = 7 AND grou_id = 5'))
                        if ($result4 = mysqli_query($link, 'SELECT  mark.mark FROM mark   WHERE mark.discipline_id = 2 AND grou_id = 5'))
                            if ($result5 = mysqli_query($link, 'SELECT  mark.mark FROM mark   WHERE mark.discipline_id = 3 AND grou_id = 5'))
                                if ($result6 = mysqli_query($link, 'SELECT  mark.mark FROM mark   WHERE mark.discipline_id = 4 AND grou_id = 5'))
                                    if ($result7 = mysqli_query($link, 'SELECT  mark.mark FROM mark  WHERE mark.discipline_id = 6 AND grou_id = 5'))
                                        if ($result8 = mysqli_query($link, 'SELECT  student.login FROM student   WHERE student.grou_id = 5')) {

                                            echo '<table class="tible">' .
                                                '<thead>' .
                                                '<tr>' .
                                                '<th>ФИО</th>' .
                                                '<th>Выч. <br> математика</th>' .
                                                '<th>Архитектура <br> компьютера</th>' .
                                                '<th>ОПП</th>' .
                                                '<th>Функц-е <br> программирование</th>' .
                                                '<th>Чис. <br> методы</th>' .
                                                '<th>ЯПТМ</th>' .
                                                '<th>СРВ</th>' .
                                                '</tr>' .
                                                '</thead>';

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $row2 = mysqli_fetch_assoc($result2);
                                                $row3 = mysqli_fetch_assoc($result3);
                                                $row4 = mysqli_fetch_assoc($result4);
                                                $row5 = mysqli_fetch_assoc($result5);
                                                $row6 = mysqli_fetch_assoc($result6);
                                                $row7 = mysqli_fetch_assoc($result7);
                                                $row8 = mysqli_fetch_assoc($result8);

                                                echo '<tr>' .
                                                    '<td style="font-size: 16px; color: #ffffff; background-color: #343477;">' . $row8['login'] . '</td>' .
                                                    '<td>' . $row['mark'] . '</td>' .
                                                    '<td>' . $row2['mark'] . '</td>' .
                                                    '<td>' . $row3['mark'] . '</td>' .
                                                    '<td>' . $row4['mark'] . '</td>' .
                                                    '<td>' . $row5['mark'] . '</td>' .
                                                    '<td>' . $row6['mark'] . '</td>' .
                                                    '<td>' . $row7['mark'] . '</td>' .
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