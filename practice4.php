<!DOCTYPE html>
<html>
<body>

<?php
$rows = $_GET['num_size'];
$cols = $_GET['num_size'];
echo "<table border=\"1\">";

    echo '<tr>';
    for ($col=0; $col <= $cols; $col++) {
        if ($col == 0) {
            echo '<td></td>';
        }
        else {
            echo '<td>' .$col.'</td>';
        }
    }
    for ($row =1; $row <= $rows; $row++) {

        echo'<tr>';
        echo '<td>'.$row. '</td>';
        for ($c = 1; $c <= $cols; $c++)
            echo '<td>' .$c*$row.'</td>';
        echo '</tr>'; // row ends here
    }

echo"</table>";
?>

</body>
</html>
