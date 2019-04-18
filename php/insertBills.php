<?php
if(empty($_POST['id'])      ||
   empty($_POST['discount']) ||
   empty($_POST['payment']) ||
   empty($_POST['customer'])
   )
   {
      echo "No arguments Provided!";
      return false;
   }

$id = strip_tags(htmlspecialchars($_POST['id']));
$discount = strip_tags(htmlspecialchars($_POST['discount']));
$payment = strip_tags(htmlspecialchars($_POST['payment']));
$customer = strip_tags(htmlspecialchars($_POST['customer']));


$db_connection = pg_connect("host=localhost dbname=test0 user=postgres password=tt");


$sql = sprintf("INSERT INTO Bills (BillId, BillTime, DiscountId, PaymentId, CustomerId) VALUES ('%s', NOW(), '%s', '%s', '%s')",$id,$discount,$payment,$customer);
$result = pg_query($db_connection, $sql);

echo '<script>window.location.replace("/index.html");</script>';
?>
