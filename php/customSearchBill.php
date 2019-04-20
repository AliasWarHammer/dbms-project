<?php
// if(empty($_POST['category'])      ||
//    empty($_POST['value'])      ||
//    )
//    {
//       echo "No arguments Provided!";
//       return false;
//    }

$category = strip_tags(htmlspecialchars($_POST['category']));
$value = strip_tags(htmlspecialchars($_POST['value']));

$db_connection = pg_connect("host=localhost dbname=test0 user=postgres password=tt");


$sql = sprintf("SELECT * FROM Bills WHERE %s = '%s';",$category, $value);
$result2 = pg_query($db_connection, $sql);
echo '<script>window.location.replace("/products.html");</script>';
?>
