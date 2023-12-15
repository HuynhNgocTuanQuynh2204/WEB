<?php
if (!isset($_SESSION['id_user'])) {
    echo '<script type="text/javascript">
            alert("Bạn cần đăng nhập mới có thể đặt lịch dịch vụ");
            window.location.href = "index.php?quanly=dangnhap";
          </script>';
}
?>
          <p style="text-align: center; padding: 10px;">
    <?php
    if(isset($_SESSION['name'])){
        ?>
        <a href="index.php?quanly=quanlydatlich" class="btn btn-info">Trạng thái lịch đã đặt</a>
        <?php
    }
    ?>
</p>
<div class="container">
  <h3 class="text-center">Đặt lịch khám bệnh và spa</h3>
  <form method="POST" action="index.php?quanly=xulydatlich" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="name">Họ và tên</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="hinhanh">Hình ảnh pet</label>
          <input type="file" class="form-control-file" id="hinhanh" name="hinhanh" required>
        </div>
      </div>
      
      <div class="col-md-6">
      <div class="form-group">
                    <label for="dienthoai">Điện thoại</label>
                    <input type="text" class="form-control" id="dienthoai" name="dienthoai">
                </div>

                <div class="form-group">
                    <label for="date">Ngày</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="form-group">
                    <label for="time">Giờ</label>
                    <input type="time" class="form-control" id="time" name="time">
                </div>
                <div class="form-group">
                    <label for="appointment_type">Loại dịch vụ:</label>
                    <select class="form-control" id="appointment_type" name="noidung">
                        <option value="1">Khám bệnh</option>
                        <option value="0">Spa</option>
                    </select>
                 </div>
    </div>
    <div class="text-center">
      <input type="submit" class="btn btn-primary" name="datlich" value="Đặt lịch">
    </div>
  </form>
</div>
