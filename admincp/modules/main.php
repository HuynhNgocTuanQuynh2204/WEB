<div class="clear"></div>
<div class="main">
<?php
            if(isset($_GET['action']) && $_GET['query']){
                $tam = $_GET['action'];
                $query = $_GET['query'];
            } else {
                $tam = '';
                $query = '';
            }
            if($tam =='quanlydanhmucsanpham' && $query == 'them'){
                include("modules/quanlydanhmucsanpham/them.php");
                include("modules/quanlydanhmucsanpham/lietke.php");

            }else if($tam =='quanlydanhmucsanpham' && $query == 'sua'){
                include("modules/quanlydanhmucsanpham/sua.php");
            }
           

            else if($tam =='quanlysp' && $query == 'them'){
                include("modules/quanlysp/them.php");
                include("modules/quanlysp/lietke.php");

            } else if($tam =='quantri' && $query == 'them'){
                include("modules/quantri/them.php");
                include("modules/quantri/lietke.php");
            } else if($tam =='quantri' && $query == 'sua'){
                include("modules/quantri/sua.php");
            

           
            }else if($tam =='quanlybinhluan' && $query == 'lietke'){
                    include("modules/quanlybinhluan/lietke.php");
            
            }else if($tam =='quanlybinhluan' && $query == 'xembinhluan'){
                    include("modules/quanlybinhluan/xembinhluan.php");

            } else if($tam =='quanlysp' && $query == 'sua'){
                include("modules/quanlysp/sua.php");
            }

            else if($tam =='quanlydonhang' && $query == 'lietke'){
                include("modules/quanlydonhang/lietke.php");
            }

            else if($tam =='donhang' && $query == 'xemdonhang'){
                include("modules/quanlydonhang/xemdonhang.php");
            }

            else if($tam =='quanlybaidang' && $query == 'xembaidang'){
                include("modules/quanlybaidang/xembaidang.php");
            }

            else if($tam =='quanlybaidang' && $query == 'lietke'){
                include("modules/quanlybaidang/lietke.php");
            }
            else if($tam =='thongtinweb' && $query == 'them'){
                include("modules/thongtinweb/them.php");
                include("modules/thongtinweb/quanly.php");
                include("modules/thongtinweb/lietke.php");
            }
            
            else if($tam =='thongtinweb' && $query == 'sua'){
                include("modules/thongtinweb/sua.php");
            }

            else if($tam =='quanlywebsite' && $query == 'them'){
                include("modules/quanlywebsite/them.php");
                include("modules/quanlywebsite/lietke.php");
            }
            
            else if($tam =='quanlywebsite' && $query == 'sua'){
                include("modules/quanlywebsite/sua.php");
            }
            else if($tam =='timkiem' && $query =='timkiem'){
                include("modules/timkiem/timkiem.php");
            }
            else {
                include("modules/doashboard.php");
            }
          ?>
</div>