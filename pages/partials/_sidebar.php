<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="../../../images/faces/face2.jpg" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">Sarridah M.</span>
          <span class="text-secondary text-small">Project Manager</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../../ui-features/index.php">
        <span class="menu-title">หน้าแรก</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#data-pages" aria-expanded="false" aria-controls="data-pages">
        <span class="menu-title">ข้อมูล</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
      </a>
      <div class="collapse" id="data-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../customer/customer.php"><i class="mdi mdi-account-multiple">&nbsp;</i>ข้อมูลลูกค้า</a></li>
          <li class="nav-item"> <a class="nav-link" href="../supplier/supplier.php"><i class="mdi mdi-truck">&nbsp;</i>ข้อมูลซับพลายเออร์</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#datacus-pages" aria-expanded="false" aria-controls="datacus-pages">
        <span class="menu-title">ข้อมูลพนักงาน</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi mdi-dribbble menu-icon"></i>
      </a>
      <div class="collapse" id="datacus-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../employee/employee.php"><i class="mdi mdi-account-multiple-outline">&nbsp;</i>ข้อมูลพนักงาน</a></li>
          <li class="nav-item"> <a class="nav-link" href="../work/work.php"><i class="mdi mdi-fingerprint">&nbsp;</i>การเข้างาน</a></li>
          <li class="nav-item"> <a class="nav-link" href="../salary/salary.php"><i class="mdi mdi-coin">&nbsp;</i>ข้อมูลเงินเดือน</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#product-pages" aria-expanded="false" aria-controls="product-pages">
        <span class="menu-title">ข้อมูลสินค้า</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-crosshairs menu-icon"></i>
      </a>
      <div class="collapse" id="product-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../product/product.php"><i class="mdi mdi-food-variant">&nbsp;</i>ข้อมูลสินค้า</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#sale-pages" aria-expanded="false" aria-controls="sale-pages">
        <span class="menu-title">การขาย</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-alarm-plus menu-icon"></i>
      </a>
      <div class="collapse" id="sale-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../sale/insertsale.php"><i class="mdi mdi-shape-polygon-plus">&nbsp;</i>new sale</a></li>
          <li class=" nav-item"> <a class="nav-link" href="../sale/sale.php"><i class="mdi mdi-book-plus">&nbsp;</i>ข้อมูลการขาย</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#pay-pages" aria-expanded="false" aria-controls="pay-pages">
        <span class="menu-title">การชำระ</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-image-filter-tilt-shift  menu-icon"></i>
      </a>
      <div class="collapse" id="pay-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../pay/pay.php"><i class="mdi mdi-deskphone">&nbsp;</i>ข้อมูลการชำระ</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#manufacture-pages" aria-expanded="false" aria-controls="manufacture-pages">
        <span class=" menu-title">การผลิต</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-camera-iris menu-icon"></i>
      </a>
      <div class="collapse" id="manufacture-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../manufacture/manufacture.php"><i class="mdi mdi-amplifier">&nbsp;</i>ข้อมูลการผลิต</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#material-pages" aria-expanded="false" aria-controls="material-pages">
        <span class="menu-title">วัตถุดิบ</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-blur-radial  menu-icon"></i>
      </a>
      <div class="collapse" id="material-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../material/material.php"><i class="mdi mdi-fish">&nbsp;</i>ข้อมูลวัตถุดิบ</a></li>
          <li class="nav-item"> <a class="nav-link" href="../ordermaterial/ordermaterial.php"><i class="mdi mdi-cart-plus">&nbsp;</i>การสั่งซื้อวัตถุดิบ</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#deli-pages" aria-expanded="false" aria-controls="deli-pages">
        <span class="menu-title">จัดส่ง</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-dribbble menu-icon"></i>
      </a>
      <div class="collapse" id="deli-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../delivery/deli.php"><i class="mdi mdi-truck-delivery">&nbsp;</i>ข้อมูลจัดส่ง</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#mec-pages" aria-expanded="false" aria-controls="mec-pages">
        <span class="menu-title">เครื่องจักร</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-bullseye menu-icon"></i>
      </a>
      <div class="collapse" id="mec-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../mechine/mechine.php"><i class="mdi mdi-wrench">&nbsp;</i>ข้อมูลเครื่องจักร</a></li>
          <li class="nav-item"> <a class="nav-link" href="../fix/fix.php"><i class="mdi mdi-screwdriver">&nbsp;</i>แจ้งซ่อม</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#charts-pages" aria-expanded="false" aria-controls="charts-pages">
        <span class="menu-title">กราฟ</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-radiobox-marked  menu-icon"></i>
      </a>
      <div class="collapse" id="charts-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../graph/index.php"><i class="mdi mdi-trending-up">&nbsp;</i>กราฟ</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>