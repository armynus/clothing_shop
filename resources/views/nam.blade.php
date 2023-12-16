<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./asset/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/category.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css "/>
    <title>Thời Trang Nam</title>
</head>
<body>
    @include('header')
    <main>
        <div class="container">
                <div class="product_selection grid">
                    <!-- filter - lọc sản phẩm -->
                    @include('filter_product')
                    <div class="product_view">
                        <div class="product_view-header">
                            <div class="product_view-sort">
                                <span class="product_view-sort-name">Sắp xếp theo: </span>
                                <div class="product_view-sort-title">
                                    <span class="product_view-sort-default">Mặc định</span>
                                    <i class="product_view-sort-icon ti-angle-down"></i>
                                    <ul class="product_view-sort-list">
                                        <li class="product_view-sort-item">Mặc định</li>
                                        <li class="product_view-sort-item">A -> Z</li>
                                        <li class="product_view-sort-item">Z -> A</li>
                                        <li class="product_view-sort-item">Giá tăng dần</li>
                                        <li class="product_view-sort-item">Giá giảm dần</li>
                                        <li class="product_view-sort-item">Hàng mới nhất</li>
                                        <li class="product_view-sort-item">Hàng cũ nhất</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="product_view-list">
                            @foreach($products_nam as $nam)
                                <div class="product_view-list-item colum-3">
                                    <div class="product_view-info">
                                        <img title="" src="{{ asset('img/'.$nam -> thumbnail) }}" alt="" class="product_view-info-img">
                                        <span class="product_view-info-sale-off"> SALE</span>
                                        <div class="product_view-info-btn">
                                            <button class="product_view-info-btn-buy"><a href="#" class="shopping_cart"><i class="fas fa-shopping-cart"  ></i></a></button>
                                            <a href="{{route('detail_product', $nam -> id)}}">
                                                <button class="product_view-info-btn-watch">
                                                <i class="fas fa-search" id="shopping_search"></i>
                                                <b> XEM</b>
                                                </button>
                                            </a>
                                            
                                        </div>  
                                    </div>
                                    <div class="proct_view-properties">Thời Trang Nam</div>
                                    <div class="product_view-name"><b>{{$nam -> title}}</b></div>
                                    <div class="product_view-cost">
                                        <span class="product_view-cost-new">{{$nam -> price}}đ</span>
                                        <span class="product_view-cost-old">{{$nam -> discount}}đ</span>
                                    </div>
                                </div>
                            @endforeach
                        <div class="more-product">
                            <div class="more-product_page switch_active">1</div>
                            <div class="more-product_page">2</div>
                            <div class="more-product_page">
                                <i class="ti-angle-right more-product_page-next"></i>...
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </main>
    <!-- icon of support and cart -->
    @include('icon')
</div>
<div class="footer">
    <!-- This is footer ! -->
    @include('footer_product')
</div>
</body>
</html>