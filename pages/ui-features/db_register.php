<?php

include('../../lib/config.php');
echo "\n";

if(isset($_REQUEST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);

    $passwd = stripslashes($_REQUEST['passwd']);
    $passwd = mysqli_real_escape_string($conn, $passwd);

    $password2 = stripslashes($_REQUEST['password2']);
    $password2 = mysqli_real_escape_string($conn, $password2);

    if($passwd !== $password2){
        echo "<script type='text/javascript'>";
        echo  "alert('Confirm password no match!');";
        echo "window.location='register.php';";
        echo "</script>";
    }else{
    $query = "INSERT INTO register (username,email,passwd)
               VALUES ('$username', '$email', '".md5($passwd)."')";

    $result = mysqli_query($conn, $query);
    
    if($result) {
        echo "<script type='text/javascript'>";
        echo  "alert('ลงทะเบียนสำเร็จแล้ว กรุณาล็อคอินเพื่อเข้าใช้งาน');";
        echo "window.location='login.php';";
        echo "</script>";
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }}
     $conn->close();
     
     
    
}
