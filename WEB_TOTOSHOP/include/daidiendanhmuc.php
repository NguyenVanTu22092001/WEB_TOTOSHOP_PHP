
<div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <?php
                $sql_danhmuc = mysqli_query($con, 'SELECT * FROM tbl_danhmuc ORDER BY danhmuc_id ASC');
                while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
            ?>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <a href="?quanly=danhmuc&id=<?php echo $row_danhmuc['danhmuc_id']?>" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="<?php echo $row_danhmuc['danhmuc_image'] ?>" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0"><?php echo $row_danhmuc['danhmuc_name']?></h5>
                </div>
            </div>
            
            <?php
            }
            ?>
        </div>
    </div>