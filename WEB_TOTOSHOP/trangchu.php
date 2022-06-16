<?php
    include('include/topbar.php');
    if(isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
    }
    else{
        $tam = '';
    }
    if( $tam=='danhmuc'){
        include('include/sanphamtheodanhmuc.php');
         // sau này sẽ sửa lại thành khi click vào sẽ vào trang danh muc cho từng sản phẩm ví dụ như áo thun, quần...
    }
    else if($tam =='chitietsanpham'){
        include('include/chitietsanpham.php');
        // sau này sẽ sửa lại thành khi click vào sẽ vào trang từng sản phẩm một
    }
    else if($tam == 'giohang'){
        include('include/giohang.php');
    }
    else{
        include('include/slide.php');
        include('include/chatluong.php');
        include('include/daidiendanhmuc.php');
        include('include/hangmoi.php');
    }
?>
<?php 
    include('include/footer.php');
?>

   
