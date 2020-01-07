<?php
include('../../../lib/config.php');
echo "\n";



$emp_name = $_REQUEST['e_name'];
$emp_surename = $_REQUEST['e_surename'];
$emp_gender = $_REQUEST['e_gender'];
$emp_address = $_REQUEST['e_address'];
$emp_phone = $_REQUEST['e_phone'];
$emp_email = $_REQUEST['e_email'];
$emp_rank = $_REQUEST['e_rank'];


//echo "passwd :".$RepeatPassword;

$sql = "INSERT INTO employee (e_name,e_surename,e_gender,e_address,e_phone,e_email,e_rank) 
VALUES ('$emp_name','$emp_surename','$emp_gender','$emp_address','$emp_phone','$emp_email','$emp_rank')";
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('Location:employee.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
