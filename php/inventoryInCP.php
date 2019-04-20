<?php
    $db_connection = pg_connect("host=localhost dbname=test0 user=postgres password=tt");

    $result = pg_query($db_connection, "SELECT Brands.BrandId, Brands.BrandName, sum(Products.CostPrice) AS Total
                                        FROM Products
                                        INNER JOIN Brands ON Brands.BrandId = Products.BrandId
                                        GROUP BY Brands.BrandId;
                                        ");
    $rowObj = array();
    while ($row = pg_fetch_row($result)) {
        $rowArr = [$row[0], $row[1], $row[2]];
        array_push($rowObj, $rowArr);
    }
    echo json_encode($rowObj);
?>

