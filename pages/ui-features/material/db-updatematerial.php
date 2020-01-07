<?php
include('../../../lib/config.php');

$ID = $_POST['id'];
echo "id :" . $ID;

$mat_name = $_REQUEST['material_name'];
$mat_amout = $_REQUEST['material_amout'];
$type_rm = $_REQUEST['type_rm'];

$sql = "UPDATE material SET material_name='$mat_name',material_amout='$mat_amout','type_rm'=$type_rm WHERE material_id ='$ID'";

if ($conn->query($sql) === TRUE) {

    // "Record updated successfully";

    header('Location:material.php');
} else {

    echo "Error updating record: " . $conn->error;
}