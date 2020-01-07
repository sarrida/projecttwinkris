<?php
include('../../../lib/config.php');

$delc = $_REQUEST['id'];
$sql = " DELETE FROM employee WHERE e_id =$delc";
if ($conn->query($sql) === TRUE) {

    //echo "Record deleted successfully";

    header('Location:employee.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
