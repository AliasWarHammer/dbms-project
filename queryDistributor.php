<?php
    $db_connection = pg_connect("host=localhost dbname=test0 user=postgres password=tt");

    $result = pg_query($db_connection, "SELECT * FROM Distributors");
    $rowObj = array();
    while ($row = pg_fetch_row($result)) {
        $rowArr = [$row[0], $row[1], $row[2]];
        array_push($rowObj, $rowArr);
    }
    echo json_encode($rowObj);
?>

