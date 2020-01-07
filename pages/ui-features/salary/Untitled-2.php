<?php 
require'db_connect.php';
@ini_set('display_errors', '0');
$filename = "test.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
print $contents;
?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 18px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
.body{
  background-color: #ffffcc;
}

.mmm{
  font-family: 'Kanit', sans-serif;
}
</style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       
        <title>แสดงข้อมูลสินค้า</title>
    </head>
    <body class="body">
      <br><br>


        <div class="container">


 
     <div class="mmm"> <h1>เงินเดือนพนักงาน(Salary of Employee)</h1></div>

  <hr>

  <form action="" method="post">
  <div class="form-group">
                  <div class="col-sm-7">
                  <div class="mmm"> <label>ชื่อพนักงาน : </label></div>
            <select name="employee_id" class="form-control" >
              <?php
             $sql = "SELECT * FROM employee Order By employee_id ASC";
             $query = mysqli_query($connect,$sql);
             while($result=mysqli_fetch_array($query)){
             ?>
               <option value="<?php echo $result['employee_id'] ?>"><?php echo $result['employee_id']?> | <?php echo $result['employee_name']?></option>
             <?php } ?>
          </select>
             </div>
             </div>
             <div class="form-group">
           <div class="col-sm-3">
           <div class="mmm"><label for="inputEmail4">เดือน / ปี : </label></div>
        <input type="MONTH" class="form-control" id="inputEmail4" name="start_date"><br>
        <button type="submit" class="btn btn-success"  value="1" name="search" title="search"  ><i class="fa fa-search" ></i> ค้นหา</button>
      </div>
    </div>
     
  </form>

  <?php  $search = (isset($_POST['search'])) ? $_POST['search'] : null; ?>
  <?php if($search) { 
      $id = $_POST['employee_id'];
      $date_start = $_POST['start_date'];
      $sql="SELECT * from employee WHERE employee_id = '$id' " ;
      
      $connect->query($sql);
      $result = mysqli_query($connect, $sql);
     $row=mysqli_fetch_array($result);
     $em_salary = $row['employee_salary'];
    ?>
    <br />
  <br >
  <center><div class="card border-success mb-10" style="max-width: 50rem;">
  <center><h5> <div class="card-header">รายละเอียดเงินเดือน</div></h5></center>
    <div class="card-body text-dark">
      <h6 class="card-title"><td>
        ชื่อพนักงาน : <?= $row['employee_name'];?>
      </td> </h6>
      <p class="card-text"></p>
      <h6 class="card-title"><td>
    
        จำนวนวันมาทำงาน :
        <?php
        $work =explode("-",$date_start);
           ?>
   
<?php
 $id = $_POST['employee_id'];
$date_start = $work[1];
$sql = "SELECT count(work_date) AS SUM FROM tb_work WHERE employee_id = '$id'  AND MONTH(work_date)= '$date_start' ";

$connect->query($sql);
$result = mysqli_query($connect, $sql);
$row=mysqli_fetch_array($result);
 
  echo $row['SUM']; 
  
  ?>
    </td> </h6>
     <p class="card-text"></p>
      <h6 class="card-title"><td>
     
    
        จำนวนเงินเดือน : <?php   echo $row['SUM']*$em_salary ?>
     
      </td> </h6>
      <p class="card-text"></p>
    </div>
  </div>
  </div><br>
<?php } ?>
<center>
<a href='index.html'><img src="picture/picture3.png" width="100" height="100"/>
  </center>
  </body><br><br>
  </html>