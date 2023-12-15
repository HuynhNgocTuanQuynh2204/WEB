<?php
   require("carbon/autoload.php");
   use Carbon\Carbon;
   use Carbon\CarbonInterval;
   $now = Carbon::now('Asia/Ho_Chi_Minh');
   $now->format('Y-m-d H:i:s');
  $hovaten = $_POST['name'];
  $sodienthoai = $_POST['dienthoai'];
  $date = $_POST['date'];
  $time = $_POST['time'];
    //xulyhinhanh
   $hinhanh = $_FILES['hinhanh']['name'];
   $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
   $hinhanh_time = time().'_'.$hinhanh;
   $tinhtrang = '1';
   $id_khachhang = $_SESSION['id_user'];
   $dichvu = $_POST['noidung'];
   

  

   if(isset($_POST['datlich'])){
   //them
   $sql_them = "INSERT INTO tbl_dichvu (hovaten, phone, hinhanh, noidung, ngay, gio, id_user, thoigian, tinhtrang) 
VALUES ('$hovaten', '$sodienthoai', '$hinhanh_time', '$dichvu', '$date', '$time', '$id_khachhang', '$now', '$tinhtrang')";

   mysqli_query($mysqli,$sql_them);
   move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh_time);
   echo '<script type="text/javascript">alert("Cảm ơn bạn đã đặt lịch. QTV sẽ sớm xem xét và duyệt lịch của bạn đã đặt!");    
   window.location.href = "index.php?quanly=quanlydatlich"; </script>';
   }elseif (isset($_POST['sualichdat'])){
            //sua
            if($hinhanh !=''){
               move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh_time);       
               $sql_update = "UPDATE tbl_dichvu SET hovaten='".$hovaten."', phone='". $sodienthoai."', hinhanh='". $hinhanh_time."', 
               noidung = '".$dichvu."',ngay='".$date."', gio='".$time."', id_user='". $id_khachhang
               ."', thoigian = '".$now."',tinhtrang = '".$tinhtrang."' WHERE id_dichvu='$_GET[id]'";
               $sql = "SELECT * FROM tbl_dichvu WHERE id_dichvu= '$_GET[id]' LIMIT 1";
               $query = mysqli_query($mysqli,$sql);
               while($row = mysqli_fetch_array($query)){
                  unlink('uploads/'.$row['hinhanh']);
               }
            }else{
               $sql_update = "UPDATE tbl_dichvu SET hovaten='".$hovaten."', phone='". $sodienthoai."', 
               noidung = '".$dichvu."',ngay='".$date."', gio='".$time."', id_user='". $id_khachhang
               ."', thoigian = '".$now."',tinhtrang = '".$tinhtrang."' WHERE id_dichvu='$_GET[id]'";
            }
            mysqli_query($mysqli,$sql_update);
            echo '<script type="text/javascript">alert("Cảm ơn bạn đã đăng bài. QTV sẽ sớm xem xét!");    window.location.href = "index.php?quanly=quanlydatlich"; </script>';
         
         }
   else{
      $id = $_GET['xoa'];
      $sql = "SELECT * FROM tbl_dichvu WHERE id_dichvu = '$id' LIMIT 1";
      $query = mysqli_query($mysqli,$sql);
      while($row = mysqli_fetch_array($query)){
         unlink('uploads/'.$row['hinhanh']);
      }
      $sql_xoa = "DELETE FROM tbl_dichvu WHERE id_dichvu='".$id."'";
      mysqli_query($mysqli,$sql_xoa);
      echo '<script type="text/javascript">alert("Bài viết của bạn đã được xóa");    window.location.href = "index.php?quanly=quanlydatlich"; </script>';
   }
   ?>