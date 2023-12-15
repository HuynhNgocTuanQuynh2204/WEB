
          <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            } else {
                $tam = '';
            }
            if($tam =='danhmucsanpham'){
                include("main/danhmuc.php");
                
            }
            elseif($tam =='danhmucsach'){
                include("main/danhmucsach.php");
            }
            elseif($tam =='sach'){
                include("main/sach.php");
            }
            elseif($tam =='toanbosanpham'){
                include("main/toanbosanpham.php");
            }
            elseif($tam =='quenmatkhau'){
                include("main/quenmatkhau.php");
            }
            elseif($tam =='datlaimatkhau'){
                include("main/datlaimatkhau.php");
            }
            elseif($tam =='quanlytaikhoan'){
                include("main/quanlytaikhoan.php");
            }
            elseif($tam =='sachattt'){
                include("main/sachattt.php");
                
            } else if($tam =='giohang'){
                include("main/giohang.php");

            } else if($tam =='themgiohang'){
                include("main/themgiohang.php");

            } else if($tam =='danhmucbaiviet'){
                include("main/danhmucbaiviet.php");

            } else if($tam =='baiviet'){
                include("main/baiviet.php");

            }else if($tam =='tintuc'){
                include("main/tintuc.php");

            }else if($tam =='lienhe'){
                include("main/lienhe.php");

            }else if($tam =='tailieu'){
                include("main/tailieu.php"); 

            }else if($tam =='sanpham'){
                include("main/sanpham.php");

            }else if($tam =='dangky'){
                include("main/dangky.php");

            }else if($tam =='thanhtoan'){
                include("main/thanhtoan.php");

            }else if($tam =='dangnhap'){
                include("main/dangnhap.php");

            }else if($tam =='timkiem'){
                include("main/timkiem.php");

            }else if($tam =='dichvu'){
                include("main/dichvu.php");

            }else if($tam =='xulydatlich'){
                include("main/xulydatlich.php");

            }else if($tam =='quanlydatlich'){
                include("main/quanlydatlich.php");
            }else if($tam =='sualichdat'){
                include("main/sualichdat.php");

            }else if($tam =='congdong'){
                include("main/congdong.php");

            }else if($tam =='camon'){
                include("main/camon.php");
                
            }else if($tam =='thaydoimatkhau'){
                include("main/thaydoimatkhau.php");

            }else if($tam =='vanchuyen'){
                include("main/vanchuyen.php");

            }else if($tam =='thongtinthanhtoan'){
                include("main/thongtinthanhtoan.php");

            }else if($tam =='donhangdadat'){
                include("main/donhangdadat.php");

            }else if($tam =='lichsudonhang'){
                include("main/lichsudonhang.php");

            }else if($tam =='xemdonhang'){
                include("main/xemdonhang.php");

            }else if($tam =='indonhang'){
                include("main/indonhang.php");

            }else if($tam =='xulycm'){
                include("main/xulycm.php");
            }
            elseif($tam =='dangnhap'){
                include("main/dangnhap.php");
            }else if($tam =='dangky'){
                include("main/dangky.php");
            }else {
                include("main/index.php");
            }
          ?>