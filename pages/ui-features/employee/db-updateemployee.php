<?php
include('../../../lib/config.php');


$ID = $_REQUEST['id'];

echo "id :" . $ID;

$emp_name = $_REQUEST['e_name'];
$emp_surename = $_REQUEST['e_surename'];
$emp_gender = $_REQUEST['e_gender'];
$emp_address = $_REQUEST['e_address'];
$emp_phone = $_REQUEST['e_phone'];
$emp_email = $_REQUEST['e_email'];
$emp_rank = $_REQUEST['e_rank'];


$sql = "UPDATE employee SET e_name='$emp_name',e_surename='$emp_surename',e_gender='$emp_gender',e_address='$emp_address'
        ,e_phone='$emp_phone',e_email='$emp_email',e_rank='$emp_rank' WHERE e_id ='$ID'";

if ($conn->query($sql) === TRUE) {

    // "Record updated successfully";

    header('Location:employee.php');
} else {

    echo "Error updating record: " . $conn->error;
}