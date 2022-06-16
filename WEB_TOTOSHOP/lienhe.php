<?php
    include('include/topbar.php');
?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Liên Hệ</h1>
            
        </div>
    </div>
  <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Liên Hệ </span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Tên"
                                required="required" data-validation-required-message="Không Được Bỏ Trống" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Mail"
                                required="required" data-validation-required-message="Không Được Bỏ Trống" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Chủ Đề"
                                required="required" data-validation-required-message="Không Được Bỏ Trống" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" placeholder="Tin nhắn"
                                required="required"
                                data-validation-required-message="Không Được Bỏ Trống"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton" action="mail/contact.php">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php
                $sql_thongtincuahang = mysqli_query($con, 'SELECT * FROM tbl_thongtincuahang WHERE thongtin_id = 1 ORDER BY thongtin_id ASC');
            ?>
            <div class="col-lg-5 mb-5">
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Store</h5>
                    <?php
                        while($row_thongtin = mysqli_fetch_array($sql_thongtincuahang)){
                    ?>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Địa chỉ: <?php echo $row_thongtin['diachi']?></p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>Gmail: <?php echo $row_thongtin['gmail']?></p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>Điện thoại: <?php echo $row_thongtin['dienthoai']?></p>
                    <?php
                        }
                    ?>
                </div>
                
            </div>
        </div>
    </div>
    <?php 
        include('include/footer.php');
    ?>     
</body>

</html>