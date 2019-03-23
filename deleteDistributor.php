<?php
if(empty($_POST['deleteID'])
   )
   {
      echo "No arguments Provided!";
      return false;
   }

$id = strip_tags(htmlspecialchars($_POST['deleteID']));

$db_connection = pg_connect("host=localhost dbname=test0 user=postgres password=tt");


$sql = sprintf("DELETE FROM Distributors WHERE DistributorId='%s'",$id);
$result = pg_query($db_connection, $sql);

echo '<script>window.location.replace("/index.html");</script>';
?>
