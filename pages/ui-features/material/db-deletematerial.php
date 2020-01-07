<?php
include('../../../lib/config.php');

$delc = $_REQUEST['id'];
$sql = " DELETE FROM material WHERE material_id =$delc";
if ($conn->query($sql) === TRUE) {

    //echo "Record deleted successfully";

    header('Location:material.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
