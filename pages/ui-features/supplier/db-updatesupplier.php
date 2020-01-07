<?php
include('../../../lib/config.php');


$ID = $_REQUEST['id'];

echo "id :" . $ID;

$sup_name = $_REQUEST['supplier_name'];
$sup_address = $_REQUEST['supplier_address'];
$sup_phone = $_REQUEST['supplier_phone'];


$sql = "UPDATE supplier SET supplier_name='$sup_name',supplier_address='$sup_address',supplier_phone='$sup_phone ' WHERE supplier_id ='$ID'";

if ($conn->query($sql) === TRUE) {

    // "Record updated successfully";

    header('Location:supplier.php');
} else {

    echo "Error updating record: " . $conn->error;
}
