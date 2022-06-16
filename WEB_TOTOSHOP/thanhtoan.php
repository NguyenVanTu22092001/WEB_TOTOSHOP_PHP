<?php
    include('include/topbar.php');
?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Thanh Toán</h1>
            
        </div>
    </div>
<div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Hóa Đơn</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Họ</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Tên</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>SDT</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label>Địa Chỉ</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        
                
                    </div>
                </div>
                <div class="collapse mb-4" id="shipping-address">
                    <h4 class="font-weight-semi-bold mb-4">Shipping Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Họ </label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Tên</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>SDT</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Địa Chỉ</label>
                            <input class="form-control" type="text" placeholder="123 Street">
                        </div>
  
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Tổng</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Products</h5>
                        <div class="d-flex justify-content-between">
                            <p>sp1</p>
                            <p>150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>sp2</p>
                            <p>150</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>sp3</p>
                            <p>150</p>
                        </div>
                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Thành Tiền</h6>
                            <h6 class="font-weight-medium">150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Ship</h6>
                            <h6 class="font-weight-medium">10</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Tổng</h5>
                            <h5 class="font-weight-bold">160</h5>
                        </div>
                    </div>
                </div>
                <div class="card border-secondary mb-5">
                    
                    <div class="card-footer border-secondary bg-transparent">
                        <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
        include('include/footer.php');
    ?>    
</body>

</html>