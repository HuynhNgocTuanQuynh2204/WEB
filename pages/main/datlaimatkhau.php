<?php
    if (isset($_POST['datlaimatkhau'])) {
        $matkhau1 = md5($_POST['password1']);
        $matkhau2 = md5($_POST['password2']);
        $id = $_GET['id'];
        if($matkhau1 == $matkhau2){
            $sql = "UPDATE tbl_user SET password = '$matkhau1' WHERE id_user = '$id'";
            $row = mysqli_query($mysqli, $sql);
            
            if ($row && mysqli_affected_rows($mysqli) > 0) {
                echo '<script>alert("Mật khẩu đặt lại thành công");window.location.href = "index.php?quanly=dangnhap";</script>';
            } else {
                echo '<p style="color:red;text-align:center">Có lỗi xảy ra. Vui lòng thử lại sau.</p>';
            }
        } else {
            echo '<p style="color:red;text-align:center">Mật khẩu không khớp. Vui lòng nhập lại!</p>';
        }
    }
?>

<script>
    if ("<?php echo isset($_SESSION['dangky']); ?>" === "1") {
        alert("Đăng nhập thành công");
        window.location.href = "index.php"; 
    }
</script>

<form action="" method="POST">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Đặt lại mật khẩu</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" name="password1" id="password" placeholder="Mật khẩu...">
                        </div>
                        <div class="form-group">
                            <label for="password">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" name="password2" id="password" placeholder="Nhập lại mật khẩu...">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" name="datlaimatkhau" value="Đặt lại mật khẩu">
                        </div>
                        <div class="form-group text-center">
                            <a href="index.php?quanly=dangnhap">Quay lại đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
