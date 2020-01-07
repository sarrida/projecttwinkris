<?php
include('../../../lib/config.php');
echo "\n";



$mat_name = $_REQUEST['material_name'];
$mat_amout = $_REQUEST['material_amout'];
$type_rm = $_REQUEST['type_rm'];

//echo "passwd :".$RepeatPassword;

$sql = "INSERT INTO material (material_name,material_amout,type_rm) 
VALUES ('$mat_name','$mat_amout','$type_rm')";
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('Location:material.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
