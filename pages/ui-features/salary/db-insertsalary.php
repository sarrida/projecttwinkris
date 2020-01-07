<?php
include('../../../lib/config.php');
echo "\n";


$start_date = $_REQUEST['start_date'];
$e_id = $_REQUEST['e_id'];
$work_state = $_REQUEST['work_state'];
// $work_amout = $_REQUEST['work_amout'];


//echo "passwd :".$RepeatPassword;

$sql = "INSERT INTO work (start_date ,e_id ,work_state) 
VALUES ('$start_date','$e_id','$work_state')";
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('Location:work.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();