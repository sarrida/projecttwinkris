<?php
include('../../../lib/config.php');
echo "\n";

$sql = "INSERT INTO odrer_matr (e_id,supplier_id,date_matr,status) 
                            VALUES  (
                                    '" . $_POST["e_id"]."',
                                    '" . $_POST["supplier_id"]."',
                                    '" . $_POST["date_matr"]."',
                                    '" . $_POST["status"] . "'
                                    )
                        ";
mysqli_query($conn, $sql);


$number = count($_POST["material_id"]);

if ($number > 0) {
    for ($i = 0; $i < $number; $i++) {
        if (trim($_POST["material_id"][$i] != '')) {

            $sql = "INSERT INTO  odrer_matr_datail(odrer_matr_id,material_id,amuont,price) VALUES
               ( 
                   '" . mysqli_real_escape_string($conn, $_POST["odrer_matr_id"]) . "',
                   '" . mysqli_real_escape_string($conn, $_POST["material_id"][$i]) . "',
				   '" . mysqli_real_escape_string($conn, $_POST["amuont"][$i]) . "',
                   '" . mysqli_real_escape_string($conn, $_POST["price"][$i]) . "')";

            mysqli_query($conn, $sql);

            // $sql = "UPDATE   material
            //          SET     material_amout = material_amout + '" . $_POST["amuont"][$i] . "'
            //         WHERE material.material_id ='" . $_POST["material_id"][$i] . "'  ";
            // mysqli_query($conn, $sql);
        }
    }
    echo " บันทึกข้อมูลเรียบร้อยแล้ว";
    //  header('Location:order_m.php';

} else {
    echo "Please Enter Name";
}
?>