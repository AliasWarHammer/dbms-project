<?php
//post variables 
$category = $_POST['category'];
$by = $_POST['by'];


$db_connection = pg_connect("host=localhost dbname=test0 user=postgres password=tt");


$sql = sprintf("SELECT * FROM Products WHERE %s = '%s';",$category, $by);
$result2 = pg_query($db_connection, $sql);
echo '<script>window.location.replace("/Products.html");</script>';
?>