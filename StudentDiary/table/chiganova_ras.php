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
                <p>Расписание</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="logo">
                <p><a href="teacher.php">ЗАКРЫТЬ</a></p>
            </div>
        </div>
    </div>
</nav>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="con">

        <div class="text-content">

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

            if ($result = mysqli_query($link, 'SELECT  tab.nomer, tab.pn, tab.vt, tab.sr, tab.ct, tab.pt, tab.cb  FROM tab   WHERE tab.teacher_id = 1'))

                echo '<table class="tible">' .
                    '<thead>' .
                    '<tr>' .
                    '<th>пары</th>' .
                    '<th>ПН</th>' .
                    '<th>ВТ</th>' .
                    '<th>СР</th>' .
                    '<th>ЧТ</th>' .
                    '<th>ПТ</th>' .
                    '<th>СУБ</th>' .
                    '</tr>' .
                    '</thead>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>' .
                    '<td>' . $row['nomer'] . '</td>' .
                    '<td>' . $row['pn'] . '</td>' .
                    '<td>' . $row['vt'] . '</td>' .
                    '<td>' . $row['sr'] . '</td>' .
                    '<td>' . $row['ct'] . '</td>' .
                    '<td>' . $row['pt'] . '</td>' .
                    '<td>' . $row['cb'] . '</td>' .
                    '</tr>';
            }
            echo '</table>';
            mysqli_free_result($result);
            mysqli_close($link);
            ?>
        </div>

    </div>
</div>
</body>