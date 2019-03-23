<?php
if(empty($_POST['id'])      ||
   empty($_POST['name'])
   )
   {
      echo "No arguments Provided!";
      return false;
   }

$id = strip_tags(htmlspecialchars($_POST['id']));
$name = strip_tags(htmlspecialchars($_POST['name']));

$db_connection = pg_connect("host=localhost dbname=test0 user=postgres password=tt");


$sql = sprintf("INSERT INTO Distributors (DistributorId, DistributorName, OnBoardingDate) VALUES ('%s', '%s', NOW())",$id,$name);
$result = pg_query($db_connection, $sql);

echo '<script>window.location.replace("/index.html");</script>';
?>
