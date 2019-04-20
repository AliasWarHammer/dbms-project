<?php
    $db_connection = pg_connect("host=localhost dbname=test0 user=postgres password=tt");

    $result = pg_query($db_connection, "SELECT BrandName
    FROM Brands AS B
    WHERE EXISTS(   SELECT *
                   FROM Products AS P
                   WHERE EXISTS(   SELECT *
                                   FROM phones AS M
                                   WHERE M.productid = P.productid
                                   AND
                                   B.BrandId = P.BrandId
                       )
    )
    AND
    EXISTS(   SELECT *
                   FROM Products AS P
                   WHERE EXISTS(   SELECT *
                                   FROM laptops AS L
                                   WHERE L.productid = P.productid
                                   AND
                                   B.BrandId = P.BrandId
                       )
    );
    ");
    $rowObj = array();
    while ($row = pg_fetch_row($result)) {
        $rowArr = [$row[0]];
        array_push($rowObj, $rowArr);
    }
    echo json_encode($rowObj);
?>

