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
        array_push($rowObj, $rowArr);
    }
    echo json_encode($rowObj);
    // echo '<script>customSearchBills();</script>';
?>
