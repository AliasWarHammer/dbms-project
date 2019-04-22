<?php
// if(empty($_POST['category'])      ||
//    empty($_POST['value'])      ||
//    )
//    {
//       echo "No arguments Provided!";
//       return false;
//    }

$category = strip_tags(htmlspecialchars($_GET['category']));
$value = strip_tags(htmlspecialchars($_GET['value']));

$db_connection = pg_connect("host=localhost dbname=test0 user=postgres password=tt");


$sql = sprintf("SELECT * FROM Bills WHERE %s = '%s';", $category, $value);
$result = pg_query($db_connection, $sql);
$rowObj = array();
    while ($row = pg_fetch_row($result)) {
        $rowArr = [$row[0], $row[1], $row[2], $row[3], $row[4]];
        //$rowArr = [$row[0], $row[1]];
        $discountssql = sprintf("SELECT DiscountType, DiscountDescription, Validity FROM Discounts WHERE DiscountId = '%s';", $row[2]);
        $paymentssql = sprintf("SELECT PaymentType FROM Payments WHERE PaymentId = '%s';", $row[3]);
        $customerssql = sprintf("SELECT FirstName, LastName, PhoneNumber, Email FROM Customers WHERE CustomerId = '%s';", $row[4]);
        $discountresult = pg_query($db_connection, $discountssql);
        $paymentsresult = pg_query($db_connection, $paymentssql);
        $customerresult = pg_query($db_connection, $customerssql);
        if ($discountrow = pg_fetch_row($discountresult)) {
            $discountrowArr = [$discountrow[0], $discountrow[1],$discountrow[2]];
            $rowArr = array_merge($rowArr,$discountrowArr);
        }
        if ($paymentrow = pg_fetch_row($paymentsresult)) {
            $paymentrowArr = [$paymentrow[0]];
            $rowArr = array_merge($rowArr,$paymentrowArr);
        }
        if ($customerrow = pg_fetch_row($customerresult)) {
            $customerrowArr = [$customerrow[0], $customerrow[1],$customerrow[2],$customerrow[3]];
            $rowArr = array_merge($rowArr,$customerrowArr);
        }
        array_push($rowObj, $rowArr);
    }
    echo json_encode($rowObj);
    //echo '<script>window.location.replace("/index.html");</script>';
?>
