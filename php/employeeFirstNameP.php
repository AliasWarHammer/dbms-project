<?php
    $db_connection = pg_connect("host=localhost dbname=test0 user=postgres password=tt");

    $result = pg_query($db_connection, "SELECT * FROM Employees
                                        WHERE firstname LIKE 'P%';");
    $rowObj = array();
    while ($row = pg_fetch_row($result)) {
        $rowArr = [$row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]];
        array_push($rowObj, $rowArr);
    }
    echo json_encode($rowObj);
?>

