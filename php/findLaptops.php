<?php
    $db_connection = pg_connect("host=localhost dbname=test0 user=postgres password=tt");

    $result = pg_query($db_connection, "SELECT * FROM Laptops");
    $rowObj = array();
    while ($row = pg_fetch_row($result)) {
        $rowArr = [$row[0], $row[1], $row[2], $row[3], $row[4]];
        $namesql = sprintf("SELECT ProductName FROM Products WHERE ProductId = '%s';", $row[0]);
        $nameresult = pg_query($db_connection, $namesql);
        if ($namerow = pg_fetch_row($nameresult)) {
            $namerowArr = [$namerow[0]];
            $rowArr = array_merge($rowArr,$namerowArr);
        }
        array_push($rowObj, $rowArr);
    }
    echo json_encode($rowObj);
?>
