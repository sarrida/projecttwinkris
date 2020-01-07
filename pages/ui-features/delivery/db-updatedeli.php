<?php
include('../../../lib/config.php');


$ID = $_REQUEST['id'];

echo "id :" . $ID;

$cus_name = $_REQUEST['c_name'];
$cus_surename = $_REQUEST['c_surename'];
$cus_gender = $_REQUEST['c_gender'];


$sql = "UPDATE delivery SET c_name='$cus_name',c_surename='$cus_surename',c_gender='$cus_gender',
        c_address='$cus_address',c_phone='$cus_phone',c_email='$cus_email' WHERE c_id ='$ID'";

if ($conn->query($sql) === TRUE) {

    // "Record updated successfully";

    header('Location:deli.php');
} else {

    echo "Error updating record: " . $conn->error;
}
