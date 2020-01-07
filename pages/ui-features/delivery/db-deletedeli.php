<?php
include('../../../lib/config.php');

$delc = $_REQUEST['id'];
$sql = " DELETE FROM delivery WHERE pay_id =$delc";
if ($conn->query($sql) === TRUE) {

    //echo "Record deleted successfully";

    header('Location:deli.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
