<?php
include('../../../lib/config.php');


$ID = $_POST['id'];

echo "id :" . $ID;


$fix_id = $_REQUEST['fix_id'];
$mechine_id = $_REQUEST['machine_id'];
$e_id = $_REQUEST['e_id'];
$fix_date = $_REQUEST['fix_detail'];
$fix_detail = $_REQUEST['fix_detail'];



$sql = "UPDATE fix SET fix_id='$fix_id' ,mechine_id ='$machine' ,e_id ='$e_id',fix_date ='$fix_detail' ,fix_detail='$fix_detail' WHERE work_id ='$ID'";

if ($conn->query($sql) === TRUE) {

    // "Record updated successfully";

    header('Location:fix.php');
} else {

    echo "Error updating record: " . $conn->error;
}
