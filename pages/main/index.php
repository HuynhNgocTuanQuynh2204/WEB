
   
        </div>
        <div class="main container my-3">
            <div class="option d-flex justify-content-between mx-2">
                <div class="menu">
                    <ul style="display: block;" class="nav flex-column">
                        <li class="nav-item ">
                            <a class="nav-link item-menu d-flex align-items-center" href="#">
                                <span margin-right: 2px; class="material material-symbols-outlined">
                                    menu
                                </span>
                                <span>Tất cả thú cưng và sản phẩm</span>
                            </a>
                        </li>
                        <?php
                        $sql_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                        $query = mysqli_query($mysqli,$sql_danhmucsp);
                        while($result =  mysqli_fetch_array($query)){
                        ?>
                        <li class="nav-item">
                            <a class="nav-link item-menu d-flex justify-content-between" href="index.php?quanly=danhmucsanpham&id=<?php echo $result['id_danhmuc'] ?>">
                                <span><?php echo $result['tendanhmuc'] ?></span>
                                <span style="font-size: 14px;" class=" material material-symbols-outlined">
                                    arrow_forward_ios
                                </span>
                            </a>
                            <?php
                        }
                        ?>
                </div>
                <?php
  $sql = "SELECT * FROM tbl_trangchu";
  $query = mysqli_query($mysqli,$sql);
?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
  <div class="carousel-inner">
    <?php 
      $active = true; // Biến này để kiểm soát slide đầu tiên là active
      while($row = mysqli_fetch_array($query)){
    ?>
    <div class="carousel-item <?php if($active){ echo 'active'; $active = false; } ?>">
      <a href="<?php echo $row['link'] ?>"><img   src="admincp/modules/quanlywebsite/uploads/<?php echo $row['hinhanh'] ?>" class="d-block w-100" alt="Slide"></a>
    </div>
    <?php
      }
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            </div>
            <div class="mx-4 mt-3 title_products">Pet chó dễ thương</div>
            <div class="border_title mb-3"></div>
            <?php
$sql_sanpham_c = "SELECT * FROM tbl_sanpham WHERE id_danhmuc = 1 ORDER BY id_sanpham DESC LIMIT 8";
$query_sp_c = mysqli_query($mysqli, $sql_sanpham_c);
?>
<div class="row">
    <?php
    while ($row_c = mysqli_fetch_array($query_sp_c)) {
    ?>
    <div class="col-md-3">
        <div class="product-item">
            <a href="index.php?quanly=sanpham&id=<?php echo $row_c['id_sanpham']?>">
                <img class="img img-fluid" src="admincp/modules/quanlysp/uploads/<?php echo $row_c['hinhanh'] ?>" alt="<?php echo $row_c['tensanpham'] ?>">
                <p class="text-center title_product"><?php echo $row_c['tensanpham'] ?></p>
                <p class="text-center <?php echo $row_c['tinhtrang'] == '1' ? 'text-success' : 'text-danger'; ?>">
                    <?php echo $row_c['tinhtrang'] == '1' ? 'Còn hàng' : 'Hết hàng'; ?>
                </p>
                <p class="text-center price_product" style="color: red;">Giá: <?php echo number_format($row_c['giasp'], 0, ',', '.') . 'vnđ' ?></p>
            </a>
        </div>
    </div>
    <?php
    }
    ?>
</div>
<div class="mx-4 mt-3 title_products">Pet mèo dễ thương</div>
            <div class="border_title mb-3"></div>
            <?php
$sql_sanpham_m = "SELECT * FROM tbl_sanpham WHERE id_danhmuc = 2 ORDER BY id_sanpham DESC LIMIT 8";
$query_sp_m = mysqli_query($mysqli, $sql_sanpham_m);
?>
<div class="row">
    <?php
    while ($row_m = mysqli_fetch_array($query_sp_m)) {
    ?>
    <div class="col-md-3">
        <div class="product-item">
            <a href="index.php?quanly=sanpham&id=<?php echo $row_m['id_sanpham']?>">
                <img class="img img-fluid" src="admincp/modules/quanlysp/uploads/<?php echo $row_m['hinhanh'] ?>" alt="<?php echo $row_m['tensanpham'] ?>">
                <p class="text-center title_product"><?php echo $row_m['tensanpham'] ?></p>
                <p class="text-center <?php echo $row_m['tinhtrang'] == '1' ? 'text-success' : 'text-danger'; ?>">
                    <?php echo $row_m['tinhtrang'] == '1' ? 'Còn hàng' : 'Hết hàng'; ?>
                </p>
                <p class="text-center price_product" style="color: red;">Giá: <?php echo number_format($row_m['giasp'], 0, ',', '.') . 'vnđ' ?></p>
            </a>
        </div>
    </div>
    <?php
    }
    ?>
</div>
<div class="mx-4 mt-3 title_products">Sản phẩm có tại shop</div>
            <div class="border_title mb-3"></div>
            <?php
$sql_sanpham = "SELECT * FROM tbl_sanpham WHERE id_danhmuc = 3 ORDER BY id_sanpham DESC LIMIT 8";
$query_sp = mysqli_query($mysqli, $sql_sanpham);
?>
<div class="row">
    <?php
    while ($row = mysqli_fetch_array($query_sp)) {
    ?>
    <div class="col-md-3">
        <div class="product-item">
            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                <img class="img img-fluid" src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="<?php echo $row['tensanpham'] ?>">
                <p class="text-center title_product"><?php echo $row['tensanpham'] ?></p>
                <p class="text-center <?php echo $row['tinhtrang'] == '1' ? 'text-success' : 'text-danger'; ?>">
                    <?php echo $row['tinhtrang'] == '1' ? 'Còn hàng' : 'Hết hàng'; ?>
                </p>
                <p class="text-center price_product" style="color: red;">Giá: <?php echo number_format($row['giasp'], 0, ',', '.') . 'vnđ' ?></p>
            </a>
        </div>
    </div>
    <?php
    }
    ?>
</div>
</body>
</html>