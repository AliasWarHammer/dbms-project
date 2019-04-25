<?php
if(empty($_POST['deleteID']))
   {
      echo "No arguments Provided!";
      return false;
   }

$id = strip_tags(htmlspecialchars($_POST['deleteID']));
$db_connection = pg_connect("host=localhost dbname=test0 user=postgres password=tt");
$idlaptop = $id;
$idphone = $id;

$sql1 = sprintf("DELETE FROM Laptops WHERE ProductId = '%s'",$idlaptop);
$result1 = pg_query($db_connection, $sql1);

$sql2 = sprintf("DELETE FROM Phones WHERE ProductId = '%s'",$idphone);
$result2 = pg_query($db_connection, $sql2);

$sql = sprintf("DELETE FROM Products WHERE ProductId = '%s'",$id);
$result = pg_query($db_connection, $sql);

echo '<script>window.location.replace("/products.html");</script>';
?>
