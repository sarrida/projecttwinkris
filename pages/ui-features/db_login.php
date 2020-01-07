
<?php
include('../../lib/config.php');
echo "\n";

session_start();

if (isset($_POST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    $passwd = stripslashes($_REQUEST['passwd']);
    $passwd = mysqli_real_escape_string($conn, $passwd);

    $query = "SELECT * FROM register WHERE username='$username' AND  passwd='" . md5($passwd) . "'";
    
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
        $_SESSION['username'] = $username;
        header("Location:index.php");
    } else {
        echo "<script type='text/javascript'>";
        echo  "alert('Password is incorrect');";
        echo "window.location='login.php';";
        echo "</script>";
    }
}
