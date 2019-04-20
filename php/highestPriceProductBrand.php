<?php
    $db_connection = pg_connect("host=localhost dbname=test0 user=postgres password=tt");

    $result = pg_query($db_connection, "SELECT ProductName, ProductId, V.BrandName, V.Price FROM Products
                                        INNER JOIN (SELECT Brands.BrandId, Brands.BrandName, max(Products.SellingPrice) AS Price
                                        FROM Products
                                        INNER JOIN Brands ON Brands.BrandId = Products.BrandId
                                        GROUP BY Brands.BrandId)V
                                        ON Products.SellingPrice = V.Price AND Products.BrandId = V.BrandId;");
    $rowObj = array();
    while ($row = pg_fetch_row($result)) {
        $rowArr = [$row[0], $row[1], $row[2] , $row[3]];
        array_push($rowObj, $rowArr);
    }
    echo json_encode($rowObj);
?>

