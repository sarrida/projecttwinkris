<?php

include('../../../lib/config.php') ;
echo "\n";
 

$sql = "INSERT INTO sale (c_id,sale_date) 
                        VALUES  (
                                    '".$_POST["c_id"]."',
                                    '".$_POST["sale_date"]."'
                                   
                                )";
                mysqli_query($conn, $sql);

$number = count($_POST["product_id"]);

if($number > 0)
{
	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["product_id"][$i] != ''))
		{	
            
			$sql = "INSERT INTO  sale_detail(sale_id,product_id,amount,price) VALUES
               ( 
                    '".mysqli_real_escape_string($conn, $_POST["sale_id"])."',
                    '".mysqli_real_escape_string($conn, $_POST["product_id"][$i])."',
                    '".mysqli_real_escape_string($conn, $_POST["amount"][$i])."',	
                    '".mysqli_real_escape_string($conn, $_POST["price"][$i])."'
                )";
            mysqli_query($conn, $sql);
		}
	}
echo "Data successfully";
// header('Location:order_mat.php');
}else{
	echo "Error";
}

?>