<?php
include('../../../lib/config.php');


$ID = $_REQUEST['id'];

echo "id :" . $ID;
$sale_id = $_REQUEST['sale_id'];
$date_pay = $_REQUEST['date_pay'];
$p_img = $_REQUEST['p_img'];


$sql = "UPDATE pay SET sale_id='$sale_id',date_pay='$date_pay',p_img='$p_img' WHERE pay_id ='$ID'";

if ($conn->query($sql) === TRUE) {

    // "Record updated successfully";

    header('Location:pay.php');
} else {

    echo "Error updating record: " . $conn->error;
}
