<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css "/>
    <link rel="stylesheet" href="./asset/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/cart.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    
    <title>Cart</title>
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
            <div class="colum-10">
                <p class="cart-title"><a class="cart-a" href="index.html">Trang Chủ </a>/ Giỏ Hàng - Bạn đang có 1 sản phẩm trong giỏ hàng</p> 
            </div>
            <div class="cart_product">
                <div class="cart-title-left colum-8">
                    <div class="header-info">
                        <div class="colum-4">SẢN PHẨM</div>
                        <div class="colum-2">GIÁ</div>
                        <div class="colum-2">SỐ <br>LƯỢNG</div>
                        <div class="colum-2">TỔNG</div>
                    </div>

                    
                    <div class="cart-item">
                        <div class="colum-4">
                            <div class="names-img">
                                <img src="./assets/img/sp1.jpg" class="img">
                                <div class="item-names">
                                    <p class="names-p"><a class="names" href="#">QUẦN KHAKI NAM</a><br>Size:</p>
                                </div>
                            </div>
                        </div>
                        <div class="colum-2">
                            <div class="money">
                                <p>500,000<br> VND</p>
                            </div>
                        </div>

                        <div class="colum-2">
                            <div class="quantity">
                                <input type="number" class="quantity-box">
                            </div>  
                        </div>
                        <div class="colum-2">
                            <div class="count">
                                <p>500,000<br> VND</p>
                            </div>
                        </div>
                        <div class="colum-1">
                            <div class="remove">
                                <a href="#" class="cart-remove" onclick="">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-info">
                        <div class="back-pay">
                            <div class="btn-back colum-5">
                                <a href="#" class="back-a"><i class="fa-solid fa-angle-left"></i>TIẾP TỤC MUA SẮM</a>
                            </div>
                            <div class="colum-2-5">

                            </div>
                            <div class="pay colum-2-5">
                                <a href="checkout.html" class="a-pay">
                                    <button class="btn-pay">THANH TOÁN <i class="fa-solid fa-chevron-right"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="bill colum-3">
                    <div class="bill-tt">
                        <div class="title-bill colum-10">
                            <h6>TÓM TẮT ĐƠN HÀNG</h6>
                        </div>
                        <div class="expense-bill colum-10">
                            <p>Chi phí đơn hàng = Giá trị đơn hàng + phí vận chuyển + Thuế</p>
                        </div>
                        <div class="fee colum-10">
                            <div class="value-title colum-6-5">
                                <span>Giá Trị Đơn Hàng</span>
                            </div>
                           
                            <div class="value colum-3-5">
                                <span>500,000 VND</span>
                            </div>
                        </div>

                        <div class="fee colum-10">
                            <div class="value-title colum-6-5">
                                <span>Phí Vận Chuyển</span>
                            </div>
                            <div class="colum-2-5"></div>
                            <div class="value colum-3-5">
                                <span>0 VND</span>
                            </div>
                        </div>
                        <div class="fee colum-10">
                            <div class="value-title colum-6-5">
                                <span>Thuế</span>
                            </div>
                            <div class="colum-2-5"></div>
                            <div class="value colum-3-5">
                                <span>0 VND</span>
                            </div>
                        </div>
                        <div class="fee colum-10">
                            <div class="value-title colum-6-5">
                                <span>Tổng Chi Phí</span>
                            </div>
                           
                            <div class="value colum-3-5">
                                <span class="count-fee">500,000 VND</span>
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