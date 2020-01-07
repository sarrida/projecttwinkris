<?php
include('../../../lib/config.php');
echo "\n";

if(isset($_POST["save"])){
    $qry = mysqli_query($conn,"insert into product values('','".$_POST["product_name"]."','".$_FILES["product_img"]["name"]. "','" .$_POST["product_amout"] . "','" .$_POST["product_price"] . "')") or die("Cannot query with database");
    if($qry){
        $target_dir = "../pic/";
        $target_file = $target_dir . basename($_FILES["product_img"]["name"]);      
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if(move_uploaded_file($_FILES["product_img"]["tmp_name"],$target_file)){
            echo header('Location:product.php');
        }
        else{
            "Upload failed";
        }
    }
}
