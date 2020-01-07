<?php
include('../../../lib/config.php');
echo "\n";



$cus_name = $_REQUEST['c_name'];
$cus_surename = $_REQUEST['c_surename'];
$cus_gender = $_REQUEST['c_gender'];
$cus_address = $_REQUEST['c_address'];
$cus_phone = $_REQUEST['c_phone'];
$cus_email = $_REQUEST['c_email'];



$sql = "INSERT INTO customer (c_name,c_surename,c_gender,c_address,c_phone,c_email) 
VALUES ('$cus_name','$cus_surename','$cus_gender','$cus_address','$cus_phone','$cus_email')";
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('Location:customer.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
