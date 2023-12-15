<h6 style="text-align: center;text-transform: uppercase;font-weight: bold;">Liệt kê quản trị</h6>
<?php
 $sql_lietke_am = "SELECT * FROM tbl_user ORDER BY id_user DESC";
 $query_lietke_am =   mysqli_query($mysqli,$sql_lietke_am);
?>

<table style="width: 100%;" border="1" style="border-collapse: collapse;">
  <tr>
    <th>ID</th>
    <th>Họ và tên</th>
    <th>Số điện thoại</th>
    <th>Tài khoản</th>
    <th>Quyền</th>
    <th>Quản lý</th>
  
    
  </tr>
  <?php 
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_am)){
      $i++;  
      if($row['level']!= 0 && $row['level']!= 3){
    ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['name'] ?></td> 
    <td><?php echo $row['phone'] ?></td>
    <td><?php echo $row['username'] ?></td>
    <td><?php 
        if($row['level'] ==1){
          echo '<p style="color:yellow">Quản lý </p>';
        } elseif($row['level'] ==2){
          echo '<p style="color:green">Nhân viên </p>';
        }
    ?></td>
    <td>
    <a  class="btn btn-primary"  href="modules/quantri/xuly.php?id_admin=<?php echo  $row['id_user']?>">Xóa</a> ||
    <a  class="btn btn-secondary" href="index.php?action=quantri&query=sua&id_admin=<?php echo  $row['id_user']?>">Sửa</a>
    </td>
  </tr>
 
  <?php }} ?>
</table>