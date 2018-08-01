<?php

echo '<tr>' .
    '<td style="font-size: 16px; color: #ffffff; background-color: #343477;">' . $row['login'] . '</td>' .
    '<td><a href="#" class="people-statuss-editable" data-name="note" data-type="select"  data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['note'] . '</a></td>' .
    '<td><a href="#" class="people-editable" data-name="data" data-type="date" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['data'] . '</a></td>' .
    '<td><a href="#" class="people-statuss-editable" data-name="note1" data-type="select"   data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['note1'] . '</a></td>' .
    '<td><a href="#" class="people-editable" data-name="data1" data-type="date" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['data1'] . '</a></td>' .
    '<td><a href="#" class="people-statuss-editable" data-name="note2" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['note2'] . '</a></td>' .
    '<td><a href="#" class="people-editable" data-name="data2" data-type="date" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['data2'] . '</a></td>' .
    '<td><a href="#" class="people-statuss-editable" data-name="status" data-type="text" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $sum['status'] . '</a></td>' .
    '<td><a href="#" class="people-editable" data-name="mark" data-type="text"  data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['mark'] . '</a></td>' .
    '</tr>';

