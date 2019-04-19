<?php
// if(empty($_POST['ProductID'])      ||
//    empty($_POST['brandName'])      ||
//    empty($_POST['productName'])      ||
//    empty($_POST['costPrice'])      ||
//    empty($_POST['sellingPrice'])      ||
//    empty($_POST['RAM'])      ||
//    empty($_POST['storage'])      ||
//    empty($_POST['OS'])      ||
//    empty($_POST['display'])      ||
//    empty($_POST['frontCamera'])      ||
//    empty($_POST['rearCamera'])
//    )
//    {
//       echo "No arguments Provided!";
//       return false;
//    }

$productID = strip_tags(htmlspecialchars($_POST['ProductID']));
$brandName = strip_tags(htmlspecialchars($_POST['brandName']));
$productName = strip_tags(htmlspecialchars($_POST['productName']));
$costPrice = strip_tags(htmlspecialchars($_POST['costPrice']));
$sellingPrice = strip_tags(htmlspecialchars($_POST['sellingPrice']));
$RAM = strip_tags(htmlspecialchars($_POST['RAM']));
$storage = strip_tags(htmlspecialchars($_POST['storage']));
$OS = strip_tags(htmlspecialchars($_POST['OS']));
$display = strip_tags(htmlspecialchars($_POST['display']));
$frontCamera = strip_tags(htmlspecialchars($_POST['frontCamera']));
$rearCamera = strip_tags(htmlspecialchars($_POST['rearCamera']));

$db_connection = pg_connect("host=localhost dbname=test0 user=postgres password=tt");
$brandquery = sprintf("SELECT BrandId FROM Brands WHERE BrandName = '%s';",$brandName);
$result = pg_query($db_connection,$brandquery);

$brandId = 0;
if (!($row = pg_fetch_row($result))) {
    echo "Brand not registered!";
    return false;
}
$brandId = $row[0];

$sql = sprintf("INSERT INTO Products (ProductId, CostPrice, SellingPrice, BrandId, ProductName) VALUES ('%s',%d,%d,'%s','%s');",$productID, $costPrice, $sellingPrice, $brandId, $productName);
$result2 = pg_query($db_connection, $sql);
$sql1 = sprintf("INSERT INTO Laptops (ProductId, RAM, Storage, OS, Display, Frontcamera, Rearcamera) VALUES ('%s',%d,%d,'%s','%s',%d,%d);",$productId, $RAM, $storage, $OS, $display, $frontCamera, $rearCamera);
$result1 = pg_query($db_connection, $sql1);
echo '<script>window.location.replace("/index.html");</script>';
?>
