<?php
include('../../../lib/config.php');

$delc = $_REQUEST['id'];
$sql = " DELETE FROM work WHERE work_id =$delc";
if ($conn->query($sql) === TRUE) {

    //echo "Record deleted successfully";

    header('Location:work.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
