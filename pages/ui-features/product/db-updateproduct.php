<?php
include('../../../lib/config.php');


$ID = $_REQUEST['id'];

echo "id :" . $ID;

$pro_name = $_REQUEST['product_name'];
$pro_img = $_REQUEST['product_img'];
$pro_amout = $_REQUEST['product_amout'];
$pro_price = $_REQUEST['product_price'];


$sql = "UPDATE product SET product_name='$pro_name',product_img='$pro_img',product_amout='$pro_amout',product_price='$pro_price' WHERE product_id ='$ID'";

if ($conn->query($sql) === TRUE) {

    // "Record updated successfully";

    header('Location:product.php');
} else {

    echo "Error updating record: " . $conn->error;
}
