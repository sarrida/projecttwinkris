<?php
include('../../../lib/config.php');


$ID = $_REQUEST['id'];

echo "id :" . $ID;

$mec_name = $_REQUEST['mechine_name'];
$mec_type = $_REQUEST['mechine_type'];
$mec_amout = $_REQUEST['mechine_amout'];



$sql = "UPDATE mechine SET mechine_name='$mec_name',mechine_type='$mec_type',mechine_amout='$mec_amout ' WHERE mechine_id ='$ID'";

if ($conn->query($sql) === TRUE) {

    // "Record updated successfully";

    header('Location:mechine.php');
} else {

    echo "Error updating record: " . $conn->error;
}
