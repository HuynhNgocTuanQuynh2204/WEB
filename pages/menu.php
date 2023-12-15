<div class="header_down d-flex justify-content-center bg-header">
                    <nav style="padding: 0" class="navbar navbar-expand">
                        <div class="container-fluid">
                          <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link link active" aria-current="page" href="index.php">Trang chủ</a>
                              </li>
                              <li class="nav-item dropdown-hover">
                                <a class="nav-link link d-flex align-items-center" href="#"><span>Mua thú cưng</span> <span style="line-height: 0;" class="material-symbols-outlined">
                                    arrow_drop_down
                                </span></a>
                                <?php
                        $sql_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc";
                        $query = mysqli_query($mysqli,$sql_danhmucsp);
                       ?>
                                <ul class="dropdown-content">
                                  <?php 
                                   while($result =  mysqli_fetch_array($query)){
                                    ?>
                                    <li class="item-dropdown"><a class="text-center" href="index.php?quanly=danhmucsanpham&id=<?php echo $result['id_danhmuc'] ?>">Mua <?php echo $result['tendanhmuc'] ?></a></li>
                                    <?php
                                    }
                                    ?>
                                  </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link link" href="index.php?quanly=toanbosanpham">Toàn bộ sản phẩm</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link link" href="index.php?quanly=dichvu">Dịch vụ</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link link" href="index.php?quanly=lienhe">Liên hệ</a>
                              </li>
                              <?php
                                if(isset($_SESSION['id_user'])){
                              ?>
                              <li class="nav-item">
                                <a class="nav-link link" href="index.php?quanly=thaydoimatkhau">Đổi mật khẩu</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link link" href="index.php?quanly=lichsudonhang">Lịch sử đơn hàng</a>
                              </li>
                              <?php
                                }
                              ?>
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
            