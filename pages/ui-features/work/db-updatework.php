<?php
include('../../../lib/config.php');


$ID = $_POST['id'];

echo "id :" . $ID;


$start_date = $_POST['start_date'];
$e_id = $_POST['e_id'];
$work_state = $_POST['work_state'];
// $work_amout = $_POST['work_amout'];



$sql = "UPDATE work SET start_date='$start_date',e_id='$e_id',work_state='$work_state' WHERE work_id ='$ID'";

if ($conn->query($sql) === TRUE) {

    // "Record updated successfully";

    header('Location:work.php');
} else {

    echo "Error updating record: " . $conn->error;
}
