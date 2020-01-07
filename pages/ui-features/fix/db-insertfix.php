<?php
include('../../../lib/config.php');
echo "\n";



$mechine_id = $_REQUEST['mechine_id'];
$e_id = $_REQUEST['e_id'];
$fix_date = $_REQUEST['fix_date'];
$fix_detail = $_REQUEST['fix_detail'];

//echo "passwd :".$RepeatPassword;

$sql = "INSERT INTO fix (mechine_id,e_id,fix_date,fix_detail) 
VALUES ('$mechine_id','$e_id','$fix_date','$fix_detail')";
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('Location:fix.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();