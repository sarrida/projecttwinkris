<?php
include('../../../lib/config.php');
echo "\n";



$mec_name = $_REQUEST['mechine_name'];
$mec_type= $_REQUEST['mechine_type'];
$mec_amout = $_REQUEST['mechine_amout'];


//echo "passwd :".$RepeatPassword;

$sql = "INSERT INTO mechine (mechine_name,mechine_type,mechine_amout) 
VALUES ('$emp_name','$mec_type','$mec_amout')";
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('Location:mechine.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
