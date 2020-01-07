<?php
include('../../../lib/config.php');

$delc = $_REQUEST['id'];
$sql = " DELETE FROM mechine WHERE mechine_id =$delc";
if ($conn->query($sql) === TRUE) {

    //echo "Record deleted successfully";

    header('Location:mechine.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();