<?php
include('../../../lib/config.php');
echo "\n";

$sup_name = $_REQUEST['supplier_name'];
$sup_address= $_REQUEST['supplier_address'];
$sup_phone= $_REQUEST['supplier_phone'];

//echo "passwd :".$RepeatPassword;

$sql = "INSERT INTO supplier (supplier_name,supplier_address,supplier_phone) 
VALUES ('$sup_name','$sup_address','$sup_phone')";
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('Location:supplier.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
