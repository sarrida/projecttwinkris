<?php
include('../../../lib/config.php');

$delc = $_REQUEST['id'];
$sql = " DELETE FROM manufacture WHERE manufacture =$delc";
if ($conn->query($sql) === TRUE) {

    //echo "Record deleted successfully";

    header('Location:manufacture.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
