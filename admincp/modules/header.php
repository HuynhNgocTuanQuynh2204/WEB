<?php 
   if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1){
    unset($_SESSION['name']);
    unset($_SESSION['username']);
    unset($_SESSION['id_user']);
    unset($_SESSION['level']);
    header('location:login.php');
   }
?>  

<div class="container mt-4" style="text-align: center;">
    <p><a href="index.php?dangxuat=1" class="btn btn-danger">Đăng xuất: 
        <?php if (isset($_SESSION['name'])){
            echo $_SESSION['name'];
        } 
        ?>
    </a></p>
</div>
