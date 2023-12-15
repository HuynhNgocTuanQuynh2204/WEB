<?php
 $sql_sua_bd = "SELECT * FROM tbl_dichvu WHERE id_dichvu = '$_GET[id]' LIMIT 1";
 $query_sua_bd =   mysqli_query($mysqli,$sql_sua_bd);
?>
<div class="container">
  <h3 class="text-center">Sửa lịch đã đặt</h3>
  <?php
   while($row = mysqli_fetch_array($query_sua_bd)){
   ?>
  <form method="POST" action="index.php?quanly=xulydatlich&id=<?php echo  $row['id_dichvu'] ?>" enctype="multipart/form-data">
  <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="name">Họ và tên</label>
          <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['hovaten'] ?>" required >
        </div>
        <div class="form-group">
          <label for="hinhanh">Hình ảnh</label>
          <input type="file" name="hinhanh">
          <img src="uploads/<?php echo $row['hinhanh'] ?>" width="150px">
        </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
                    <label for="dienthoai">Điện thoại</label>
                    <input type="text" class="form-control" id="dienthoai" name="dienthoai" value="<?php echo $row['phone'] ?>">
                </div>
  
                <div class="form-group">
                    <label for="date">Ngày</label>
                    <input type="date" class="form-control" id="date" name="date" value="<?php echo $row['ngay'] ?>">
                </div>
                <div class="form-group">
                    <label for="time">Giờ</label>
                    <input type="time" class="form-control" id="time" name="time" value="<?php echo $row['gio'] ?>">
                </div>
                <div class="form-group">
                        <label for="appointment_type">Loại dịch vụ:</label>
                        <td>
                            <select name="noidung">
                              <?php
                                if($row['noidung']==1){
                              ?>
                              <option value="1" selected>Khám bệnh</option>
                              <option value="0">Spa</option>
                              <?php
                                }else{
                              ?>
                              <option value="1">Khám bệnh</option>
                              <option value="0" selected>Spa</option>
                              <?php
                                }
                              ?>
                            </select>
                          </td>
                </div>
    <div class="text-center">
      <input type="submit" class="btn btn-primary" name="sualichdat" value="Sửa bài">
    </div>
  </form>
  <?php
}
?>
</div>
