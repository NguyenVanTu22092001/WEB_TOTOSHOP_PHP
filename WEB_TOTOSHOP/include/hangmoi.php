<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Hàng Mới </span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            <?php
                $sql_sanpham = mysqli_query($con, 'SELECT * FROM tbl_sanpham Where sanpham_hot = 1 ORDER BY sanpham_id ASC');
                while($row_sanpham = mysqli_fetch_array($sql_sanpham)){
            ?>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <a href="?quanly=chitietsanpham&id=<?php echo $row_sanpham['sanpham_id']?>"><img class="img-fluid w-100" src="<?php echo $row_sanpham['sanpham_image']?>" alt=""></a>
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?php echo $row_sanpham['sanpham_name']?></h6>
                        <div class="d-flex justify-content-center">
                            <h6><?php echo $row_sanpham['sanpham_giakhuyenmai']?></h6><h6 class="text-muted ml-2"><del><?php if($row_sanpham['sanpham_gia'] != $row_sanpham['sanpham_giakhuyenmai']) echo $row_sanpham['sanpham_gia'] ?></del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="?quanly=chitietsanpham&id=<?php echo $row_sanpham['sanpham_id']?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Xem Chi Tiết</a>
                        <a href="?quanly=giohang&id=<?php echo $row_sanpham['sanpham_id']?>" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm Giỏ Hàng</a>
                    </div>
                </div>
            </div>
            
            <?php
            }
            ?>
        </div>
    </div>