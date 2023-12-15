

<form action="" method="POST">
    <div class="container" style="padding: 5px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Đăng nhập khách hàng</h3>
                    </div>
                    <?php
                        if (isset($_POST['dangnhap'])){
                            $email = $_POST['email'];
                            $matkhau = md5($_POST['password']);
                            $sql = "SELECT * FROM tbl_user WHERE username = '".$email."' AND password = '".$matkhau."' LIMIT 1 ";
                            $row = mysqli_query($mysqli, $sql);
                            $count = mysqli_num_rows($row);
                            if ($count > 0){
                                $row_data = mysqli_fetch_array($row);
                                $_SESSION['name'] = $row_data['name'];
                                $_SESSION['username'] = $row_data['username'];
                                $_SESSION['id_user'] = $row_data['id_user'];
                                $_SESSION['level'] = $row_data['level']; 
                            } else {
                                echo '<p style="color:red">Mật khẩu hoặc tài khoản sai. Vui lòng đăng nhập lại. </p>';
                            }
                        }
                    ?>

<script>
    if ("<?php echo isset($_SESSION['name']); ?>" === "1") {
        alert("Đăng nhập thành công");
        window.location.href = "index.php"; 
    }
</script>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">Tài khoản</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email...">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu...">
                        </div>
                        <div class="form-group">
                            <a href="index.php?quanly=quenmatkhau">Quên mật khẩu ?</a>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" name="dangnhap" value="Đăng nhập">
                        </div>
                        <div class="form-group text-center">
                            <a href="index.php?quanly=dangky">Đăng ký tài khoản</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
