<?php
    include_once('db/connect.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TOTO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Set icon -->
    <link rel="shortcut icon" type="image/jpg" href="images/icon/icon_shop.jpg">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">TOTO</span>Shopper</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm Kiếm Sản Phẩm">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Loại sản phẩm</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Áo<i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Áo Phông</a>
                                <a href="" class="dropdown-item">Áo Sơ Mi</a>
                              
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Quần Jeans</a>
                        <a href="" class="nav-item nav-link">Phụ Kiện</a>
                        
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">TOTO</span>Shop</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index_test.html" class="nav-item nav-link">Trang Chủ</a>
                            <a href="shop_test1.html" class="nav-item nav-link active">Sản Phẩm</a>
                            <a href="detail_test.html" class="nav-item nav-link">Giới Thiệu</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Giỏ Hàng-Thanh Toán</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart_test.html" class="dropdown-item">Giỏ Hàng</a>
                                    <a href="checkout_test.html" class="dropdown-item">Thanh Toán</a>
                                </div>
                            </div>
                            <a href="contact_test.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="" class="nav-item nav-link">Đăng Nhập</a>
                            <a href="" class="nav-item nav-link">Đăng Kí</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Chính Sách Hoàn Tiền</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Trang Chủ</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Chính Sách Hoàn Tiền</p>
            </div>
        </div>
    </div>
  
    <p>&emsp;&emsp;&emsp;&emsp;Chính Sách Hoàn Tiền Áp Dụng Tại Totoshop</p>
    <p>&emsp;&emsp;&emsp;&emsp;&emsp;1.&emsp;Nếu Khách Hàng đã phải thanh toán cho Sản Phẩm không được giao hàng, Totoshop sẽ hoàn tiền tương ứng với giá trị Sản Phẩm mà ban đầu Khách Hàng đã thanh toán.</p>
    <p>&emsp;&emsp;&emsp;&emsp;&emsp;2.&emsp;Nếu Khách Hàng phải thanh toán nhiều hơn so với giá trị Sản Phẩm thể hiện trên trang web khi Khách Hàng đặt hàng, Totoshop sẽ hoàn lại cho Khách Hàng khoản tiền chênh lệch.</p>
    <p>&emsp;&emsp;&emsp;&emsp;&emsp;3.&emsp;Tất cả các khoản hoàn lại sẽ được thực hiện thông qua chuyển khoản trong vòng mười lăm (15) ngày kể từ ngày việc hoàn tiền được xác nhận bởi Totoshop. Thời điểm bạn nhận<br>&emsp;&emsp;&emsp;&emsp;&emsp;lại tiền cũng sẽ phụ thuộc vào thời gian xử lý khoản tiền hoàn lại của ngân hàng của bạn. </p>
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">TOTO</span>Shop</h1>
                </a>
            
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Địa chỉ: 123 Trần Phú, Hà Đông, Hà Nội</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>Gmail: ToToShop@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>Phone number: 01234567823</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5" >
                        <h5 class="font-weight-bold text-dark mb-4">Truy Cập Nhanh</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index_test.html"><i class="fa fa-angle-right mr-2"></i>Trang Chủ</a>
                            <a class="text-dark mb-2" href="shop_test1.html"><i class="fa fa-angle-right mr-2"></i>Sản Phẩm</a>
                            <a class="text-dark mb-2" href="detail_test.html"><i class="fa fa-angle-right mr-2"></i>Giới Thiệu</a>
                            <a class="text-dark mb-2" href="cart_test.html"><i class="fa fa-angle-right mr-2"></i>Giỏ Hàng</a>
                            <a class="text-dark mb-2" href="checkout_test.html"><i class="fa fa-angle-right mr-2"></i>Thanh Toán</a>
                            <a class="text-dark" href="contact_test.html"><i class="fa fa-angle-right mr-2"></i>Liên Hệ</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Truy Cập Nhanh </h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="Cs_Doi_Hang.html"><i class="fa fa-angle-right mr-2"></i>Chính Sách Đổi Hàng</a>
                            <a class="text-dark mb-2" href="Cs_Bao_Hanh.html"><i class="fa fa-angle-right mr-2"></i>Chính Sách Bảo Hành</a>
                            <a class="text-dark mb-2" href="Cs_Bao_Mat.html"><i class="fa fa-angle-right mr-2"></i>Chính Sách Bảo Mật</a>
                            <a class="text-dark mb-2" href="Cs_Hoan_Tien.html"><i class="fa fa-angle-right mr-2"></i>Chính Sách Hoàn Tiền</a>
                          
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


    
</body>

</html>