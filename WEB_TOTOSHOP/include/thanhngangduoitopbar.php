<div class="container-fluid bg-secondary mb-5">
        <?php
            while($row_danhmucname = mysqli_fetch_array($danhmuc_name)){
        ?>
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Sản Phẩm</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href=""><?php echo $row_danhmucname['danhmuc_name']?></a></p>
            </div>
        </div>
        <?php
        }
        ?>
    </div>