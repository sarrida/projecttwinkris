<?php
include('../../../lib/config.php');

$delc = $_REQUEST['id'];
$sql = " DELETE FROM odrer_matr WHERE odrer_matr_id =$delc";
if ($conn->query($sql) === TRUE) {

    //echo "Record deleted successfully";

    header('Location:ordermaterial.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
