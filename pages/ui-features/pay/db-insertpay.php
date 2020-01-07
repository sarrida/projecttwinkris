<?php
include('../../../lib/config.php');
echo "\n";

if (isset($_POST["save"])) {
    $qry = mysqli_query($conn, "insert into pay values('','" . $_POST["sale_id"] . "','" . $_POST["date_pay"] . "','" . $_FILES["p_img"]["name"] . "')") or die("Cannot query with database");
    if ($qry) {
        $target_dir = "../pic/";
        $target_file = $target_dir . basename($_FILES["p_img"]["name"]);
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        if (move_uploaded_file($_FILES["p_img"]["tmp_name"], $target_file)) {
            echo header('Location:pay.php');
        } else {
            "Upload failed";
        }
    }
}
