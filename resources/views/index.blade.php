<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css "/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    @include('header')
    <div class="banner">
        <img src="./assets/img/1-s-1634-banner-web.jpg" alt="#" class="img-banner"> 
        <div class="sub-banner">
            <div class="banner-text">B1910089 Thiết kế website</div>
            <div class="banner-introduce">
                <a class="banner-link btn btn-success" href="#">Xem sản phẩm</a>
            </div>
        </div>
    </div>
    <!-- BODY -->
    <div class="body">
        <div class="body-header">
            <h2>THỜI TRANG TRẺ EM, PHỤ NỮ VÀ NAM GIỚI</h2>
        </div>
        <div class="product">
            <div class="product-intro">
                <h3 class="product-text">SẢN PHẨM BÁN CHẠY NHẤT</h3>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col product-item">
                        <img src="./assets/img/sp1.jpg" class="product-img" alt="">
                        <div class="product-animate banner-link btn btn-success">
                            <i class="fas fa-search"></i>
                            <a href="detalis_product.html" class="">Xem</a>
                        </div>
                        <div class="product-details">
                            <span class="product-type">Thời trang nam</span>
                            <span class="product-name">Quần KaKi Nam</span>
                            <span class="product-cost">500,000 VND</span>
                        </div>  
                    </div>
                    <div class="col product-item">
                        <img src="./assets/img/sp2.jpg" class="product-img" alt="">
                        <div class="product-animate banner-link btn btn-success">
                            <i class="fas fa-search"></i>
                            <a href="#" class="">Xem</a>
                        </div>
                        <div class="product-details">
                            <span class="product-type">Thời Trang Trẻ Em</span>
                            <span class="product-name">BỘ LIỀN EM BÉ </span>
                            <span class="product-cost">200,000 VND</span>
                        </div>  
                    </div>
                    <div class="col product-item">
                        <img src="./assets/img/sp3.jpg" class="product-img" alt="">
                        <div class="product-animate banner-link btn btn-success">
                            <i class="fas fa-search"></i>
                            <a href="#" class="">Xem</a>
                        </div>
                        <div class="product-details">
                            <span class="product-type">Thời trang nam</span>
                            <span class="product-name">ÁO POLO NAM</span>
                            <span class="product-cost">600,000 VND</span>
                        </div>  
                    </div>
                    <div class="col product-item">
                        <img src="./assets/img/sp4.jpg" class="product-img" alt="">
                        <div class="product-animate banner-link btn btn-success">
                            <i class="fas fa-search"></i>
                            <a href="#" class="">Xem</a>
                        </div>
                        <div class="product-details">
                            <span class="product-type">Thời trang nam</span>
                            <span class="product-name">ÁO PHÔNG NAM</span>
                            <span class="product-cost">260,000 VND</span>
                        </div>  
                    </div>
                    <div class="col product-item">
                        <img src="./assets/img/sp5.jpg" class="product-img" alt="">
                        <div class="product-animate banner-link btn btn-success">
                            <i class="fas fa-search"></i>
                            <a href="#" class="">Xem</a>
                        </div>
                        <div class="product-details">
                            <span class="product-type">Thời trang nam</span>
                            <span class="product-name">ÁO SƠ MI NAM</span>
                            <span class="product-cost">480,000 VND</span>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div class="product-new">
            <div class="product-intro">
                <h3 class="product-text">SẢN PHẨM MỚI NHẤT</h3>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($product as $product)
                        <div class="col product-item">
                            <img src="{{ asset('img/'.$product -> thumbnail) }}" class="product-img" alt="">
                            <div class="product-animate banner-link btn btn-success">
                                <i class="fas fa-search"></i>
                                <a href="#" class="">Xem</a>
                            </div>
                            <div class="product-details">
                                <span class="product-type">Thời trang nam</span>
                                <span class="product-name">{{$product -> title}}</span>
                                <span class="product-cost">{{$product -> price}} VND</span>
                            </div>  
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="product">
            <div class="product-intro">
                <h3 class="product-text">THỜI TRANG NAM</h3>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($products_nam as $nam)
                        <div class="col product-item">
                            <img src="{{ asset('img/'.$nam -> thumbnail) }}" class="product-img" alt="">
                            <div class="product-animate banner-link btn btn-success">
                                <i class="fas fa-search"></i>
                                <a href="#" class="">Xem</a>
                            </div>
                            <div class="product-details">
                                <span class="product-type">Thời trang nam</span>
                                <span class="product-name">{{$nam -> title}}</span>
                                <span class="product-cost">{{$nam -> price}} VNĐ</span>
                            </div>  
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="product-new">
            <div class="product-intro">
                <h3 class="product-text">THỜI TRANG CỦA PHỤ NỮ</h3>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                @foreach($products_nu as $nu)
                    <div class="col product-item">
                        <img src="{{ asset('img/'.$nu -> thumbnail) }}" class="product-img" alt="">
                        <div class="product-animate banner-link btn btn-success">
                            <i class="fas fa-search"></i>
                            <a href="#" class="">Xem</a>
                        </div>
                        <div class="product-details">
                            <span class="product-type">Thời trang của phụ nữ</span>
                            <span class="product-name">{{$nu -> title}}</span>
                            <span class="product-cost">{{$nu -> price}} VNĐ</span>
                        </div>  
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        <div class="product">
            <div class="product-intro">
                <h3 class="product-text">THỜI TRANG CỦA TRẺ EM</h3>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                @foreach($products_treem as $treem)
                    <div class="col product-item">
                        <img src="{{ asset('img/'.$treem -> thumbnail) }}" class="product-img" alt="">
                        <div class="product-animate banner-link btn btn-success">
                            <i class="fas fa-search"></i>
                            <a href="#" class="">Xem</a>
                        </div>
                        <div class="product-details">
                            <span class="product-type">Thời trang của phụ nữ</span>
                            <span class="product-name">{{$treem -> title}}</span>
                            <span class="product-cost">{{$treem -> price}} VNĐ</span>
                        </div>  
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        <!-- icon of support and cart -->
        @include('icon')
    </div>
    <div class="footer">
        <!-- This is footer ! -->
        @include('footer_product')
    </div>
     
    
</body>
</html>