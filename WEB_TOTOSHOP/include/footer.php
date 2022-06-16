<?php
    include_once('db/connect.php'); 
?>
<?php
    $sql_thongtincuahang = mysqli_query($con, 'SELECT * FROM tbl_thongtincuahang ORDER BY thongtin_id ASC');
?>
<div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <?php
                    while($row_thongtin = mysqli_fetch_array($sql_thongtincuahang)){
                ?>
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1"><?php echo $row_thongtin['ten']?></span><?php echo $row_thongtin['loai']?></h1>
                </a>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Địa chỉ: <?php echo $row_thongtin['diachi']?></p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>Gmail: <?php echo $row_thongtin['gmail']?></p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>Phone number: <?php echo $row_thongtin['dienthoai']?></p>
                <?php
                    }
                ?>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5" >
                        <h5 class="font-weight-bold text-dark mb-4">Truy cập Nhanh</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="trangchu.php."><i class="fa fa-angle-right mr-2"></i>Trang Chủ</a>
                            <a class="text-dark mb-2" href="sanpham_all.php"><i class="fa fa-angle-right mr-2"></i>Sản Phẩm</a>
                            <a class="text-dark mb-2" href="detail_test.html"><i class="fa fa-angle-right mr-2"></i>Giới Thiệu</a>
                            <a class="text-dark mb-2" href="giohang.php"><i class="fa fa-angle-right mr-2"></i>Giỏ Hàng</a>
                            <a class="text-dark mb-2" href="thanhtoan.php"><i class="fa fa-angle-right mr-2"></i>Thanh Toán</a>
                            <a class="text-dark" href="lienhe.php"><i class="fa fa-angle-right mr-2"></i>Liên Hệ</a>
                        </div>
                    </div>
                    <?php 
                      $sql_chinhsach = mysqli_query($con, 'SELECT * FROM tbl_chinhsach ORDER BY chinhsach_id ASC');
                    ?>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Truy Cập Nhanh </h5>
                        <div class="d-flex flex-column justify-content-start">
                            <?php
                                 while($row_chinhsach = mysqli_fetch_array($sql_chinhsach)){
                            ?>
                            <a class="text-dark mb-2" href="<?php echo $row_chinhsach['chinhsach_php']?>"><i class="fa fa-angle-right mr-2"></i><?php echo $row_chinhsach['chinhsach_name']?></a>
                            <?php
                                }
                            ?>     
                          
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Thông tin đăng kí</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Tên" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Đăng kí Ngay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="https://www.facebook.com/Totoshop.com.vn/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                   
                    <a class="text-dark px-2" href="https://www.instagram.com/totoshopvn/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="https://www.youtube.com/channel/UCNlOKoeutijiatYxUkDXGnA">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
