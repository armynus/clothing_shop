<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css "/>
    <link rel="stylesheet" href="./asset/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/checkout.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Checkout</title>
</head>
<body>
    <header id="header">
        <nav class="navbar navbar-expand-sm bg-white navbar-dark justify-content-center">
            <a class="navbar-brand " href="index.html">
                <img src="https://t004.gokisoft.com/uploads/2021/07/1-s-1636-logo-web.jpg " id="logo-header" style="width:100px;">
            </a>
            <ul class="navbar-nav ">
               <li class="nav-item">
                  <a class="nav-link text-success" href="nu.html">PHỤ NỮ</a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link text-success" href="nam.html">NAM</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-success" href="tre.html">TRẺ EM</a>
               </li>
               <li class="nav-item">
                <a class="nav-link text-success" href="#">TIN TỨC & SAVOIR-FAIRE</a>
             </li>
             <li class="nav-item">
                <a class="nav-link text-success" href="contact.html">LIÊN HỆ</a>
             </li>
            </ul>
         </nav>
    </header>
    <main>
        <div class="container">
            <div class="title">
                <a href="#" class="title-a">
                    <img src="" alt="" class="title-img">
                </a>
                <div class="title-p colum-10">
                    <p class="cart-title"> Trang Chủ ><a class="cart-a" href="index.html"> Giỏ Hàng </a></p> 
                </div>
            </div>
            <div class="checkout">
                <div class="checkout-left colum-7">
                    <div class="info">
                        <p class="address-p">Địa Chỉ Ship Hàng</p>
                    </div>
                    <div class="info">
                        <label class="info-names">Họ & tên</label>
                        <input class="info-in colum-10" type="text" placeholder="Nhập Họ & Tên" name="names">
                    </div>
                    <div class="info">
                        <label class="info-names">Email</label>
                        <input class="info-in colum-10" type="text" placeholder="you@example.com" name="email">
                    </div>
                    <div class="info">
                        <label class="info-names">Số Điện Thoại</label>
                        <input class="info-in colum-10" type="text" placeholder="0123456789" name="phonenumber">
                    </div>
                    <div class="info">
                        <label class="info-names">Địa Chỉ</label>
                        <input class="info-in colum-10" type="text" placeholder="123 Ninh Kiều - Cần Thơ" name="address">
                    </div>
                    <div class="info">
                        <label class="info-names">Ghi Chú</label>
                        <textarea class="info-in-t colum-10" type="text" name="notes"></textarea>
                    </div>
                    <div class="stick-t"></div>
                    <div class="info">
                        <label><input type="checkbox" name="stick-address">Địa chỉ ship hàng trùng với địa chỉ thanh toán.</label>
                        <label><input type="checkbox" name="stick-info">Lưu thông tin cho lần thanh toán tiếp theo.</label>
                    </div>   
                    <div class="stick-b"></div>

                    <div class="payment">
                        <p class="pay-p">Thanh Toán</p>
                        <label class="pay"><input type="radio" name="payment">Thanh Toán Khi Nhận Hàng</label>
                        <br>
                        <label class="pay"><input type="radio" name="payment">Chuyển Khoản</label>
                    </div>
                    <div class="stick-t"></div>
                    <div class="info">
                        <button class="btn-pay colum-10"> 
                            Thanh Toán
                        </button>
                    </div>
                   
                </div>

                <div class="checkout-right colum-3-5" >
                    <div class="info">
                        <p class="title-right">Đơn Hàng Của Bạn</p>
                    </div>
                    <div class="box">
                        <div class="box-fee">
                            <div class="product-count">
                                <div class="colum-6">
                                    <span><b>QUẦN KHAKI NAM</b></span>
                                    <br> x1
                                </div>
                                <div class="colum-4">
                                    <span style="color:#868e96">500,000 VNĐ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box1">
                        <div class="box-fee">
                            <div class="product-count">
                                <div class="colum-6">
                                    <span>Tổng Tiền</span>
                                </div>
                                <div class="colum-4">
                                    <span class="count-sp"><b>500,000 VNĐ</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            

           
        
        </div>
    </main>
    <div class="support-online">
        <div class="support-content">
        <a href="#" class="call-now" rel="nofollow" data-original-title="" title="">
        <img src="./assets/img/phone-call-icon.png" style="width: 50px;">
        <div class="animated infinite zoomIn alo-circle"></div>
        <div class="animated infinite pulse alo-circle-fill"></div>
        </a>
        <a class="open-popup-link" href="#" data-original-title="" title="">
        <img src="./assets/img/facebook.png" style="width: 50px;">
        </a>
        </div>
        <a class="btn-support" href="#" data-original-title="" title="">
        <div class="animated infinite zoomIn alo-circle"></div>
        <div class="animated infinite pulse alo-circle-fill"></div>
        <img src="./assets/img/zalo-sharelogo.png" style="width: 50px;">
        </a>
        </div>
    <div class="cart bg-success">
        <a href="./cart.html">
            <i class="fa-solid fa-cart-shopping" style="color: white;"></i>
        </a>
    </div>
    <div class="question">
        <a href="./cart.html">
            <i class="fa-solid fa-circle-question" style="color: white;"></i>
        </a>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <h5>GIỚI THIỆU</h5>
                <span style="margin: 20px 0;">LIÊN HỆ CÔNG TY CỔ PHẦN ZICZAC GROUP</span>
                <p>Chúng tôi luôn tiên phong trong lĩnh vực xậy dựng website cho các doanh nghiệp và của hàng. Chúng tôi luôn nỗ lực để tạo ra sản phẩm có chất lượng tốt nhất cho khách hàng.</p>
            </div>
            <div class="col" style="padding-left: 30px;">
                <h5>SẢN PHẨM MỚI</h5>
                <ul class="list_footer">
                    <li><a href="">QUẦN KHAKI NAM</a></li>
                    <li><a href="">ÁO SƠ MI NAM DÀI TAY KẺ CARO</a></li>
                    <li><a href="">ÁO POLO NAM</a></li>
                    <li><a href="">QUẦN SHORTS NAM</a></li>
                    <li><a href="">ÁO PHÔNG NAM IN TO</a></li>
                </ul>
            </div>
            <div class="col">
                <h5>TIN TỨC</h5>
                <ul class="list_footer">
                    <li><a href="">UTOPIA TRỞ THÀNH HIỆN THỰC</a></li>
                    <li><a href="">TINH THẦN MIỄN PHÍ</a></li>
                    <li><a href="">Điểm danh dàn "gà cưng"</a></li>
                    <li><a href="">Bí quyết mặc váy hoa giống Selena Gomez không bị già</a></li>
                    <li><a href="">Vì sao nói thời trang của phụ nữ Thái Lan hot số 1 châu Á?</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="end-footer">
        <span>© 2018 <p style="color: yellow;">Zic Zac Group</p> . Được thiết kế bời <p style="color: yellow;">Zic Zac</p>. All rights reserved.</span>
    </div>
</div>
</body>
</html>