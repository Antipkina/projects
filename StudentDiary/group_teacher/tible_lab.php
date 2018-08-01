
<div>
<?php

    echo '<tr>' .
        '<td style="font-size: 16px; color: #ffffff; background-color: #343477;">' . $row['login'] . '</td>' .
        '<td><a href="#" class="people-status-editable" data-name="name1" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name1'] . '</a></td>' .
        '<td><a href="#" class="people-status-editable" data-name="name2" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name2'] . '</a></td>' .
        '<td><a href="#" class="people-status-editable" data-name="name3" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name3'] . '</a></td>' .
        '<td><a href="#" class="people-status-editable" data-name="name4" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name4'] . '</a></td>' .
        '<td><a href="#" class="people-status-editable" data-name="name5" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name5'] . '</a></td>' .
        '<td><a href="#" class="people-status-editable" data-name="name6" data-type="select" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name6'] . '</a></td>' .
        '<td><a href="#" class="people-status-editable" data-name="name7" data-type="text" data-pk="' . $row['id'] . '" data-url="ajax.php" >' . $row['name7'] . '</a></td>' .
        '</tr>';



?>
</div>