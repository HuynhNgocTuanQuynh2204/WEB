<?php
$id_khachhang = $_SESSION['id_user'];
$sql_lietke_dichvu = "SELECT * FROM tbl_dichvu, tbl_user WHERE tbl_dichvu.id_user = tbl_user.id_user
AND tbl_dichvu.id_user = '$id_khachhang' ORDER BY tbl_dichvu.id_dichvu DESC";
$query_lietke_dichvu = mysqli_query($mysqli, $sql_lietke_dichvu);
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center mb-4">Danh sách lịch đặt</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Tình trạng</th>
                            <th scope="col">Ngày</th>
                            <th scope="col">Giờ</th>
                            <th scope="col">Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($query_lietke_dichvu)) {
                            $i++;
                        ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['hovaten'] ?></td>
                                <td><img classs="img img-responsive" width="100%" height="150px" src="uploads/<?php echo $row['hinhanh'] ?>"></td>
                                <td>
                                <?php
                                    if($row['noidung'] == "1"){
                                        echo "Khám bệnh";
                                    } else {
                                        echo "Spa";
                                    }
                                ?>
                                </td>
                                <td><?php echo $row['phone'] ?></td>
                                <td>
                                    <?php if ($row['tinhtrang'] == 1) {
                                        echo '<span class="text-danger">Đang chờ duyệt lịch khám và chữa bệnh,spa</span>';
                                    } else if ($row['tinhtrang'] == 2) {
                                        echo '<span class="text-info">Shop đã từ chối lịch hẹn của bạn</span>';
                                    } else {
                                        echo '<span class="text-success">Lịch khám của bạn đã được duyệt</span>';
                                    } ?>
                                </td>
                                <td><?php echo $row['ngay'] ?></td>
                                <td><?php echo $row['gio'] ?></td>
                                <td>
                                    <a href="index.php?quanly=xulydatlich&xoa=<?php echo $row['id_dichvu'] ?>" class="btn btn-danger">Xóa lịch</a>
                                    <a href="index.php?quanly=sualichdat&id=<?php echo $row['id_dichvu'] ?>" class="btn btn-success">Sửa lịch</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
