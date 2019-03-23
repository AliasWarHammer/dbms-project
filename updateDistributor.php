<?php
if(empty($_POST['updateID'])      ||
   empty($_POST['updateName'])
   )
   {
      echo "No arguments Provided!";
      return false;
   }

$id = strip_tags(htmlspecialchars($_POST['updateID']));
$name = strip_tags(htmlspecialchars($_POST['updateName']));

$db_connection = pg_connect("host=localhost dbname=test0 user=postgres password=tt");


$sql = sprintf("UPDATE Distributors SET DistributorName='%s' WHERE DistributorId='%s'",$name,$id);
$result = pg_query($db_connection, $sql);

echo '<script>window.location.replace("/index.html");</script>';
?>
