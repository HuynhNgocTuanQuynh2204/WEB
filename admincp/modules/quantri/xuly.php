<?php
include('../../config/config.php');
session_start();
$tentaikhoan = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$matkhau = md5($_POST['password']);
$diachi = $_POST['address'];
$level = $_POST['level'];
 if(isset($_POST['suataikhoan'])){
    $sql = "UPDATE tbl_user SET name='$tentaikhoan', username='$email', password='$matkhau', phone='$phone ' ,diachi='$diachi', level='$level' 
    WHERE id_user = '$_GET[id]'";
    $qr = mysqli_query($mysqli,$sql);
    echo '<script type="text/javascript">alert("Sửa thông tin thành công");    window.location.href = "http://localhost/DoAn_KH_PTDL/admincp/index.php?action=quantri&query=them"; </script>';
 }
?>