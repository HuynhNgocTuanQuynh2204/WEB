<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ </title>
</head>
<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['name']);
        unset($_SESSION['username']);
        unset($_SESSION['id_user']);
        unset($_SESSION['level']);
        header('location:index.php?quanly=dangnhap');
    }
?>
<body>
    <div class="box">
        <div class="header ">
            <div class="container">
                <div class="header_up">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <a class="navbar-brand" href="#">
                            <img src="./images/logo/Logo_Be_Chon.jpg" alt="" class="img_logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">    
                            <form class="d-flex" role="search" action="index.php?quanly=timkiem" method="POST">
                                <input class="form-control me-2" type="search" name="tukhoa"     placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" name="timkiem" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="collapse navbar-collapse d-flex justify-content-evenly align-items-stretch" id="navbarSupportedContent">
                       

                            <!-- <div class="d-flex justify-content-between"> -->
                            <?php
                 if(isset($_SESSION['name'])){
                 ?>
                         <a href="index.php?dangxuat=1" class="btn_login d-flex">
                                        <span class="material-symbols-outlined">
                                            account_circle
                                        </span>
                                        <span class="px-1 title_btnlogin">Đăng xuất</span>
                                    </a>
                                    <?php
                            if ($_SESSION['level']==0 ) {
                            ?>
                                <a href="http://localhost/DoAn_KH_PTDL/admincp" class="btn_login d-flex">
                                    <span class="material-symbols-outlined">
                                        account_circle
                                    </span>
                                    <span class="px-1 title_btnlogin">ADMIN</span>
                                </a>
                            <?php
                            }elseif($_SESSION['level']==1 ){?>
                                <a href="http://localhost/DoAn_KH_PTDL/admincp" class="btn_login d-flex">
                                    <span class="material-symbols-outlined">
                                        account_circle
                                    </span>
                                    <span class="px-1 title_btnlogin">Quản lí</span>
                                </a>
                            <?php
                            }elseif($_SESSION['level']==2 ){?>
                                <a href="http://localhost/DoAn_KH_PTDL/admincp" class="btn_login d-flex">
                                    <span class="material-symbols-outlined">
                                        account_circle
                                    </span>
                                    <span class="px-1 title_btnlogin">Nhân viên</span>
                                </a>
                            <?php
                            }
                            ?>
                 <?php
                 }else{
                 ?>
                  <a href="index.php?quanly=dangnhap" class="btn_login d-flex">
                                        <span class="material-symbols-outlined">
                                            account_circle
                                        </span>
                                        <span class="px-1 title_btnlogin">Đăng nhập</span>
                                    </a>
                 <?php
                 }
                ?>
                                   
                                    <a href="index.php?quanly=giohang" class="d-flex btn_shop">
                                        <span>
                                            <div class="position-relative">
                                                <span class="material-symbols-outlined">
                                                    shopping_cart
                                                </span>
                                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                0
                                                </span>
                                            </div>                                       
                                        </span>
                                        <span class="px-2 title_btnshop">Giỏ hàng</span>
                                    </a>
                            <!-- </div> -->
                        </div>
                    </nav>
                </div>