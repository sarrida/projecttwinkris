<?php
include('../../../lib/config.php');

$delc = $_REQUEST['id'];
$sql = " DELETE FROM fix WHERE fix_id =$delc";
if ($conn->query($sql) === TRUE) {

    //echo "Record deleted successfully";

    header('Location:fix.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
