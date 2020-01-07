<?php
include('../../../lib/config.php');
echo "\n";

$sql = "INSERT INTO manufacture (e_id,product_id,manufacture_amout,manufacture_date,manufacture_date2) 
                            VALUES  (
                                    '" . $_POST["e_id"] . "',
                                    '" . $_POST["product_id"] . "',
                                    '" . $_POST["manufacture_amout"] . "',
                                    '" . $_POST["manufacture_date"] . "',
                                    '" . $_POST["manufacture_date2"] . "'
                                    )
                        ";
mysqli_query($conn, $sql);


$number = count($_POST["material_id"]);

if ($number > 0) {
    for ($i = 0; $i < $number; $i++) {
        if (trim($_POST["material_id"][$i] != '')) {

            $sql = "INSERT INTO  mnf_dt(manufacture_id,material_id,amount) VALUES
               ( 
                   '" . mysqli_real_escape_string($conn, $_POST["manufacture_id"]) . "',
                   '" . mysqli_real_escape_string($conn, $_POST["material_id"][$i]) . "',
                   '" . mysqli_real_escape_string($conn, $_POST["amount"][$i]) . "')";

            mysqli_query($conn, $sql);
            

            $sql = "UPDATE   material
                     SET     material_amout = material_amout - '" . $_POST["amuont"][$i] . "'
                    WHERE material.material_id ='" . $_POST["material_id"][$i] . "'  ";
            mysqli_query($conn, $sql);
        }
    }
    echo " บันทึกข้อมูลเรียบร้อยแล้ว";
    //  header('Location:order_m.php';

} else {
    echo "Please Enter Name";
}
