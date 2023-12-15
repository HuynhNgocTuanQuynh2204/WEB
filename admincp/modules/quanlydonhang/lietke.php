<h6 style="text-align: center;text-transform: uppercase;font-weight: bold;">Liệt kê đơn hàng</h6>
<?php
 $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_user WHERE tbl_cart.id_khachhang = tbl_user.id_user ORDER BY tbl_cart.id_cart DESC";
 $query_lietke_dh =   mysqli_query($mysqli,$sql_lietke_dh);
?>

<table style="width: 100%;" border="1" style="border-collapse: collapse;">
  <tr>
    <th>ID</th>
    <th>Mã đơn hàng</th>
    <th>Tên khách hàng</th>
    <th>Địa chỉ nhận </th>
    <th>Email</th>
    <th>Số điện thoại</th>
    <th>Tình trạng</th>
    <th>Ngày đặt</th>
    <th>Quản lý</th>
    <th>In đơn hàng</th>
    
  </tr>
  <?php 
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
      $i++;  
    ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td> 
    <td><?php echo $row['name'] ?></td> 
    <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['phone'] ?></td>
    <td>
        <?php
        if($row['cart_status'] == 1){
            echo ' <a class="btn btn-danger" href="modules/quanlydonhang/xuly.php?cart_status=0&code='.$row['code_cart'].'">Đơn hàng mới</a>';
        } elseif($row['cart_status'] == 0){
          echo 'Đã xem';
        }else{
          echo'<b style="color:violet">Đã nhận hàng</b>';
        }
        ?>
    </td>
    <td><?php echo $row['thoigian'] ?></td>
    <td>
        <a   class="btn btn-success" href="index.php?action=donhang&query=xemdonhang&code=<?php echo  $row['code_cart']?>">Xem đơn hàng</a>
    </td>
    <td>
        <a  class="btn btn-secondary" href="modules/quanlydonhang/indonhang.php?code=<?php echo  $row['code_cart']?>">In đơn hàng</a>
    </td>
  </tr>
 
  <?php } ?>
</table>