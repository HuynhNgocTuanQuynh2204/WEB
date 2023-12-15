<div class="quanlybaidang">
<h3 style="text-align: center;text-transform: uppercase;font-weight: bold;">Lịch thăm khám,spa chờ duyệt</h3>
<?php
 $sql_lietke_bd = "SELECT * FROM tbl_dichvu,tbl_user WHERE tbl_dichvu.id_user = tbl_user.id_user ORDER BY tbl_dichvu.id_dichvu DESC";
 $query_lietke_bd =   mysqli_query($mysqli,$sql_lietke_bd);
?>

<table style="width: 100%;" border="1" style="border-collapse: collapse;">
<tr>
    <th>ID</th>
    <th>Tên khách hàng</th>
    <th>Nội dung</th>
    <th>Ngày đặt</th>
    <th>Giờ đặt</th>
    <th>Thời gian đã đặt</th>
    <th>Hình ảnh</th>
    <th>Tình trạng</th>
</tr>
  <?php 
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_bd)){
      $i++;
      if($row['tinhtrang'] == '1'){  
    ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['name'] ?></td> 
    <td><?php 
        if($row['noidung']==0){
          echo"Khám bệnh";
        }else{
          echo"Spa";
        }
     ?></td>
    <td><?php echo $row['ngay'] ?></td> 
    <td><?php echo $row['gio'] ?></td>  
    <td><?php echo $row['thoigian'] ?></td>
    <td><img src="../uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td> 
    <td>Chờ xét duyêt</td>
    <td>
        <?php
            echo '<a class="btn btn-info" href="modules/quanlybaidang/xuly.php?tinhtrang=0&id='.$row['id_dichvu'].'">Duyệt bài viết</a>|| <a class ="btn btn-primary" href="modules/quanlybaidang/xuly.php?tinhtrang=2&id='.$row['id_dichvu'].'">Hủy bài viết</a>';
        ?>
    </td>
  </tr>
 
  <?php }} ?>
</table>
</div>
<div class="quanlybaidang">
<h3 style="text-align: center;text-transform: uppercase;font-weight: bold;">Lịch thăm khám,spa đã duyệt</h3>
<?php
 $sql_lietke_da_duyet = "SELECT * FROM tbl_dichvu,tbl_user WHERE tbl_dichvu.id_user = tbl_user.id_user AND tbl_dichvu.tinhtrang = '0' ORDER BY tbl_dichvu.id_dichvu DESC";
 $query_lietke_da_duyet =   mysqli_query($mysqli,$sql_lietke_da_duyet);
?>
<table style="width: 100%;" border="1" style="border-collapse: collapse;">
<tr>
    <th>ID</th>
    <th>Tên khách hàng</th>
    <th>Nội dung</th>
    <th>Ngày đặt</th>
    <th>Giờ đặt</th>
    <th>Thời gian đã đặt</th>
    <th>Hình ảnh</th>
    <th>Tình trạng</th>
  </tr>
  <?php 
    $i=0;
    while($row_dd = mysqli_fetch_array($query_lietke_da_duyet)){
      $i++;
      if($row_dd['tinhtrang'] == '0'){  
    ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row_dd['name'] ?></td> 
    <td><?php 
        if($row_dd['noidung']==0){
          echo"Khám bệnh";
        }else{
          echo"Spa";
        }
     ?></td>
    <td><?php echo $row_dd['ngay'] ?></td> 
    <td><?php echo $row_dd['gio'] ?></td>  
    <td><?php echo $row_dd['thoigian'] ?></td>
    <td><img src="../uploads/<?php echo $row_dd['hinhanh'] ?>" width="150px"></td> 
    <td>Đã duyệt lịch đặt của khách hàng</td> 
  <?php }} ?>
</table>
</div>
<div class="quanlybaidang">
<h3  style="text-align: center;text-transform: uppercase;font-weight: bold;">Lịch tham khám, spa đã hủy </h3>
<?php
 $sql_lietke_da_huy = "SELECT * FROM tbl_dichvu,tbl_user WHERE tbl_dichvu.id_user = tbl_user.id_user AND tbl_dichvu.tinhtrang = '2' ORDER BY tbl_dichvu.id_dichvu DESC";
 $query_lietke_da_huy =   mysqli_query($mysqli,$sql_lietke_da_huy);
?>
<table style="width: 100%;" border="1" style="border-collapse: collapse;">
  <tr>
    <th>ID</th>
    <th>Tên khách hàng</th>
    <th>Nội dung</th>
    <th>Ngày đặt</th>
    <th>Giờ đặt</th>
    <th>Thời gian đã đặt</th>
    <th>Hình ảnh</th>
    <th>Tình trạng</th>
  </tr>
  <?php 
    $i=0;
    while($row_dh = mysqli_fetch_array($query_lietke_da_huy)){
      $i++;
      if($row_dh['tinhtrang'] == '2'){  
    ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row_dh['name'] ?></td> 
    <td><?php 
        if($row_dh['noidung']==0){
          echo"Khám bệnh";
        }else{
          echo"Spa";
        }
     ?></td>
    <td><?php echo $row_dh['ngay'] ?></td> 
    <td><?php echo $row_dh['gio'] ?></td>  
    <td><?php echo $row_dh['thoigian'] ?></td>
    <td><img src="../uploads/<?php echo $row_dh['hinhanh'] ?>" width="150px"></td> 
    <td>Đã hủy lịch đặt của khách hàng</td>
    <td>
    </td>
  </tr>
 
  <?php }} ?>
</table>
</div>
<style>
    div.quanlybaidang{
        padding: 100px 0px;
    }
</style>