<?php
include('../../../lib/config.php');
echo "\n";


$deli_id = $_REQUEST['deli_id'];

$pay_id = $_REQUEST['pay_id'];
$deli_date = $_REQUEST['deli_date'];
$e_id = $_REQUEST['e_id'];


//echo "passwd :".$RepeatPassword;

$sql = "INSERT INTO delivery (pay_id,deli_date,e_id) 
VALUES ('$pay_id','$deli_date','$e_id')";
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('Location:deli.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
