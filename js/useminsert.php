<?php
  error_reporting( error_reporting() & ~E_NOTICE );
  session_start(); ?>
  
<?php
    include('../../../lib/config.php');

    $number = count($_POST["material_id"]);
    
    if($number > 0)
    {
        for($i=0; $i<$number; $i++)
        {
            
            if(trim($_POST["material_id"][$i]) != '')
            {
// =============================================================
                $material_id = $_POST["material_id"][$i] ;
                
                $sql = " SELECT * FROM material 
                         WHERE material.material_id = '$material_id'";

                $query = mysqli_query($conn,$sql);
                $result = mysqli_fetch_assoc($query);
// ============================================================ เป็นการเช็คว่าจำนวนที่จะใช้มีมากพอหรือไม่
                    if( $_POST["amount"][$i] <= $result['m_amount'])
                    {

                        $sql1 = "INSERT INTO detail_usematerial
                                            (
                                            material_id,
                                            use_amount,
                                            id_production
                                            ) 
                                    VALUES  (
                                            '".mysqli_real_escape_string($conn, $_POST["material_id"][$i])."',
                                            '".mysqli_real_escape_string($conn, $_POST["amount"][$i])."',
                                            '".mysqli_real_escape_string($conn, $_POST["id_production"])."'
                                            ) ";
                        mysqli_query($conn, $sql1);
// =========================================มาทำการลบตามจำนวนที่ป้อน======================================================================
                        $sql2 = " UPDATE material
                                  SET  m_amount = m_amount - '".$_POST["amount"][$i]."'
                                  WHERE  material.material_id = '".$_POST["material_id"][$i]."' ";
                        
                        mysqli_query($conn, $sql2);
// ==========================================ถ้าจำนวนมีไม่พอให้ทำงานในนี้============================
                    } else { ?>
                        
                    <----- จำนวนวัตถุดิบ มีไม่พอ ----->

                    <?php 
                        exit();
                    }
            } 
        } 
// ======================================================================================================== 
            // $sql = "INSERT INTO production
            //                                 (
            //                                 id_production,
            //                                 id_prd,
            //                                 pro_date,
            //                                 pro_date_expired,
            //                                 pro_amount
            //                                 ) 
            //                         VALUES  (
            //                                 '".$_POST["id_production"]."',
            //                                 '".$_POST["id_prd"]."',
            //                                 '".$_POST["pro_date"]."',
            //                                 '".$_POST["pro_date_expired"]."',
            //                                 '".$_POST["pro_amount"]."'
            //                                 ) ";
            //             mysqli_query($conn, $sql); 

                        $sql3 = "UPDATE production
                                 SET    pdt_status = 'ผลิตเสร็จแล้ว'
                                 WHERE  production.id_production = '".$_POST["id_production"]."' ";
            
                        mysqli_query($conn, $sql3);
            
                        $sql4 = "UPDATE  product
                                 SET     prd_amount = prd_amount + '".$_POST["pro_amount"]."'
                                 WHERE   product.id_prd = '".$_POST["id_prd"]."' ";
            
                        mysqli_query($conn, $sql4);            

        echo 'DATA SAVE';
    }
    else
    {
        echo "DATA NOT SAVE"; 
    }
?>