<?php
  if (isset($_POST['dangky'])){
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    $matkhau =md5($_POST['matkhau']);
    $diachi = $_POST['diachi'];
    $level = 3;
    $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_user (name,username,password,phone,diachi,level) 
    VALUES('". $tenkhachhang."','". $email."','".$matkhau."','".$dienthoai."','".$diachi."','".$level."')");
    if($sql_dangky){
        echo '<p style="color:green">Bạn đã đăng kí thành công</p>';
    }else{
        echo '<p style="color:red">Đăng ký thất bại</p>';
    }
  }
?>

<h6 style="text-align: center;text-transform: uppercase;font-weight: bold;">Đăng kí thành viên</h6>
<style>
    table.dangky tr td {
    padding: 5px;
    }
    p{
        text-align: center;
    }
</style>
<div>
<form action="" method="POST" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="hovaten">Họ và tên</label>
                    <input type="text" class="form-control" id="hovaten" name="hovaten">
                </div>
                <div class="form-group">
                    <label for="email">Tài khoản</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email....">
                </div>
                <div class="form-group">
                    <label for="dienthoai">Điện thoại</label>
                    <input type="text" class="form-control" id="dienthoai" name="dienthoai">
                </div>
                <div class="form-group">
                    <label for="diachi">Địa chỉ</label>
                    <input type="text" class="form-control" id="diachi" name="diachi">
                </div>
                <div class="form-group">
                    <label for="matkhau">Mật khẩu</label>
                    <input type="password" class="form-control" id="matkhau" name="matkhau">
                </div>
                <button type="submit" class="btn btn-primary" name="dangky">Đăng ký</button>
                <a href="index.php?quanly=dangnhap" class="btn btn-link">Đăng nhập nếu có tài khoản</a>
            </div>
        </div>
    </div>
</form>

