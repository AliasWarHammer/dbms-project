<?php
    $db_connection = pg_connect("host=localhost dbname=test0 user=postgres password=tt");

    $result = pg_query($db_connection, "SELECT ProductId, storage, RAM, frontcamera, rearcamera
                                        FROM phones
                                        ORDER BY (RAM)DESC
                                        LIMIT 5;");
    $rowObj = array();
    while ($row = pg_fetch_row($result)) {
        $rowArr = [$row[0], $row[1], $row[2], $row[3], $row[4]];
        array_push($rowObj, $rowArr);
    }
    echo json_encode($rowObj);
?>

