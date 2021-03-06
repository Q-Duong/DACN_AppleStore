<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apple Store</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/fontawesome-free-5.15.4-web/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/lightslider.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/prettify.css')}}">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <!-- <a href="#">Sign in</a>
                <a href="#">FAQs</a> -->
            </div>
            @if(Session::has('customer_id'))  
            <div class="offcanvas__top__hover">
                <span>
                @if(Session::get('customer_image')!='')
                    <img src="{{asset('public/uploads/avata/'.Session::get('customer_image'))}}" alt="">
                @else
                    <i class="far fa-user-circle"></i>
                @endif
                    {{Session::get('customer_name')}}
                    <i class="arrow_carrot-down"></i>
                </span>
                <ul>
                    <a href="{{URL::to('/account-information/'.Session::get('customer_id'))}}">
                        <li><i class="fas fa-address-card"></i> Th??ng tin t??i kho???n</li>
                    </a>
                    <a href="{{URL::to('/account-settings/'.Session::get('customer_id'))}}">
                        <li><i class="fa fa-cog"></i> C??i ?????t t??i kho???n</li>
                    </a>
                    <a href="{{URL::to('/logout-checkout')}}">
                        <li><i class="fas fa-sign-out-alt"></i> ????ng xu???t</li>
                    </a>
                </ul>
            </div>
            @else
            <div class="offcanvas__top__hover">
                <span><i class="far fa-user-circle"></i> T??i kho???n
                    <i class="arrow_carrot-down"></i>
                </span>
                <ul>
                    <a href="{{URL::to('/login-checkout')}}">
                        <li><i class="fas fa-sign-in-alt"></i> ????ng nh???p</li>
                    </a>
                    <a href="{{URL::to('/create-customer')}}">
                        <li><i class="fas fa-user-plus"></i> ????ng k??</li>
                    </a>
                </ul>
            </div>
            @endif
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="{{asset('public/frontend/img/icon/search.png')}}" alt=""></a>
            <a href="{{URL::to('/wistlist')}}"><img src="{{asset('public/frontend/img/icon/heart.png')}}" alt=""></a>
            <a href="{{URL::to('/cart')}}">
                <img src="{{asset('public/frontend/img/icon/cart.png')}}" alt="">
                <div class="count-cart-products"></div>
            </a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Mi???n ph?? v???n chuy???n v???i ????n h??ng tr??n 15.000.000???.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Mi???n ph?? v???n chuy???n v???i ????n h??ng tr??n 15.000.000???.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <!-- <a href="#">Sign in</a>
                                <a href="#">FAQs</a> -->
                            </div>

                            @if(Session::has('customer_id'))
                            <div class="header__top__hover">
                                <span>
                                @if(Session::get('customer_image')!='')
                                    <img src="{{asset('public/uploads/avata/'.Session::get('customer_image'))}}" alt="">
                                @else
                                    <i class="far fa-user-circle"></i>
                                @endif
                                    {{Session::get('customer_name')}}
                                    <i class="arrow_carrot-down"></i>
                                </span>
                                <ul>
                                    <a href="{{URL::to('/account-information/'.Session::get('customer_id'))}}">
                                        <li><i class="fas fa-address-card"></i> Th??ng tin t??i kho???n</li>
                                    </a>
                                    <a href="{{URL::to('/account-settings/'.Session::get('customer_id'))}}">
                                        <li><i class="fa fa-cog"></i> C??i ?????t t??i kho???n</li>
                                    </a>
                                    <a href="{{URL::to('/logout-checkout')}}">
                                        <li><i class="fas fa-sign-out-alt"></i> ????ng xu???t</li>
                                    </a>
                                </ul>
                            </div>
                            @else
                            <div class="header__top__hover">
                                <span><i class="far fa-user-circle"></i> T??i kho???n
                                    <i class="arrow_carrot-down"></i>
                                </span>
                                <ul>
                                    <a href="{{URL::to('/login-checkout')}}">
                                        <li><i class="fas fa-sign-in-alt"></i> ????ng nh???p</li>
                                    </a>
                                    <a href="{{URL::to('/create-customer')}}">
                                        <li><i class="fas fa-user-plus"></i> ????ng k??</li>
                                    </a>

                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="{{URL::to('/')}}"><i class="fab fa-apple"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{URL::to('/')}}">Trang ch???</a></li>

                            <li><a href="{{URL::to('/store')}}">S???n ph???m</a>
                                <ul class="dropdown">
                                    @foreach($category as $key => $cate)
                                            <li><a
                                                    href="{{asset(URL::to('/product-list/'.$cate->category_product_slug))}}">{{$cate->category_product_name}}</a>
                                            </li>
                                    @endforeach

                                </ul>
                            </li>
                            <li><a href="{{URL::to('/blog-list')}}">Tin t???c</a>
                                <ul class="dropdown">
                                    @foreach($category_post as $key => $cate_post)
                                    <li><a
                                            href="{{asset(URL::to('/blogs/'.$cate_post->category_post_slug))}}">{{$cate_post->category_post_name}}</a>
                                    </li>
                                    @endforeach

                                </ul>
                            </li>
                            <li><a href="{{URL::to('/lien-he')}}">Li??n h???</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="{{asset('public/frontend/img/icon/search.png')}}" alt=""></a>
                        <a href="{{URL::to('/wistlist')}}"><img src="{{asset('public/frontend/img/icon/heart.png')}}" alt=""></a>
                        <a href="{{URL::to('/cart')}}">
                            <img src="{{asset('public/frontend/img/icon/cart.png')}}" alt="">
                            <div class="count-cart-products"></div>
                            
                        </a>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    
    <section class="hero">
        <div class="hero__slider owl-carousel">
        @foreach($slider as $key => $slide)
            <div class="hero__items set-bg active" data-setbg="{{asset('public/uploads/slider/'.$slide->slider_image)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <p>{!! $slide->slider_desc !!}</p>
                                <a href="{{URL::to('/store')}}" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fas fa-phone    "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach    
        </div>
    </section>

    <!-- <section class="hero">
        <div class="hero-product">
        @foreach($slider as $key => $slide)
            <div class="hero__items set-bg active" data-setbg="{{asset('public/uploads/slider/'.$slide->slider_image)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <p>{!! $slide->slider_desc !!}</p>
                                <a href="{{URL::to('/store')}}" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach    
        </div>
    </section> -->
    
    

    <section class="product spad">
        <div class="container">
            @yield('content')
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
    <!-- <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>Clothings Hot <br /> <span>Shoe Collection</span> <br /> Accessories</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="img/product-sale.png" alt="">
                        <div class="hot__deal__sticker">
                            <span>Sale Of</span>
                            <h5>$29.99</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Deal Of The Week</span>
                        <h2>Multi-pocket Chest Bag Black</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Categories Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                    @foreach($category as $key => $cate)
                        <a href="{{URL::to('/store')}}">
                            <div class="instagram__pic__item set-bg"
                                    data-setbg="{{asset('public/uploads/categoryproduct/'.$cate->category_product_image)}}">
                            </div>      
                        </a>    
                    @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Apple Store</h2>
                        <p>Apple Authorised Reseller.</p>
                        <!-- <h3>#Male_Fashion</h3> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="{{URL::to('/')}}"><i class="fab fa-apple"></i>  </a>
                            <span>Store Online</span>
                        </div>
                        <p>Kh??ch h??ng l?? tr???ng t??m c???a m?? h??nh kinh doanh ?????c ????o c???a ch??ng t??i, bao g???m c??? thi???t k???.</p>
                        <a href="#"><img src="{{asset('public/frontend/img/payment.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>S???n ph???m</h6>
                        <ul>
                        @foreach($category as $key => $cate)
                                <li><a href="{{asset(URL::to('/product-list/'.$cate->category_product_slug))}}">
                                    {{$cate->category_product_name}}</a>
                                </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Tin t???c</h6>
                        <ul>
                        @foreach($category_post as $key => $cate_post)
                            <li><a href="{{asset(URL::to('/blogs/'.$cate_post->category_post_slug))}}">{{$cate_post->category_post_name}}</a>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>Li???n v???i ch??ng t??i</h6>
                        <div class="footer__newslatter">
                            <p>H??y l?? ng?????i ?????u ti??n bi???t v??? h??ng m???i xu???t hi???n, xem s??ch, b??n h??ng v?? qu???ng c??o!</p>
                            <form action="#">
                                <input type="text" placeholder="Email c???a b???n">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ??
                            <script>
                            document.write(new Date().getFullYear());
                            </script>-2020
                            All rights reserved | This template is made with <i class="far fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Qu???c D????ng</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form action="{{URL::to('/search')}}" method="POST" autocomplete="off" class="search-model-form">
                {{csrf_field()}}
                <div class="input_container">
                    <img src="{{asset('public/frontend/img/icon/search-icon.svg')}}" class="input_img">
                    <input type="text" id="keywords" id="search-input" name="keywords_submit" placeholder="T??m ki???m s???n ph???m" class="input">
                </div>
                <div id="search_ajax"></div>         
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- scrollUp -->
    <a id="button"></a>
    <!-- scrollUp End -->

    <!-- Js Plugins -->
    <script src="{{asset('public/frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('public/frontend/js/mixitup.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/lightslider.js')}}"></script>
    <script src="{{asset('public/frontend/js/prettify.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/delete_wistlists.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/add_wistlists.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/apple.min.js')}}"></script>

    <script type="text/javascript">
        $('#keywords').keyup(function(){
            var query = $(this).val();

            if(query != '')
                {
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url:"{{url('/autocomplete-ajax')}}",
                    method:"POST",
                    data:{query:query, _token:_token},
                    success:function(data){
                    $('#search_ajax').fadeIn();  
                        $('#search_ajax').html(data);
                    }
                });

                }else{

                    $('#search_ajax').fadeOut();  
                }
        });

        $(document).on('click', '.li_search_ajax', function(){  
            $('#keywords').val($(this).text());  
            $('#search_ajax').fadeOut();  
        }); 
    </script>

    

    <script type="text/javascript">
    $(document).ready(function() {
        count_cart_products();
        function  count_cart_products() {
            $.ajax({
                url:'{{url('/count-cart-products')}}',
                method:"GET",
                
                success:function(data){
                $('.count-cart-products').html(data);
                }
            });
        }
        $('.add-to-cart').click(function() {
            var id = $(this).data('id_product');
            var cart_product_id = $('.cart_product_id_' + id).val();
            var cart_product_name = $('.cart_product_name_' + id).val();
            var cart_product_image = $('.cart_product_image_' + id).val();
            var cart_product_quantity = $('.cart_product_quantity_' + id).val();
            var cart_product_price = $('.cart_product_price_' + id).val();
            var cart_product_qty = $('.cart_product_qty_' + id).val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{url('/add-cart-ajax')}}',
                method: 'POST',
                data: {
                    cart_product_id: cart_product_id,
                    cart_product_name: cart_product_name,
                    cart_product_image: cart_product_image,
                    cart_product_price: cart_product_price,
                    cart_product_qty: cart_product_qty,
                    _token: _token,
                    cart_product_quantity: cart_product_quantity
                },
                success: function() {

                    swal({
                            title: "???? th??m s???n ph???m v??o gi??? h??ng",
                            text: "B???n c?? th??? mua h??ng ti???p ho???c t???i gi??? h??ng ????? ti???n h??nh thanh to??n",
                            showCancelButton: true,
                            cancelButtonText: "Xem ti???p",
                            confirmButtonClass: "btn-success",
                            confirmButtonText: "??i ?????n gi??? h??ng",
                            closeOnConfirm: false
                        },
                        function() {
                            window.location.href = "{{url('/cart')}}";
                    });
                    count_cart_products();
                }

            });

        });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('.choose').on('change', function() {
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';

            if (action == 'city') {
                result = 'province';
            } else {
                result = 'wards';
            }
            $.ajax({
                url: '{{url('/select-delivery-home')}}',
                method: 'POST',
                data: {
                    action: action,
                    ma_id: ma_id,
                    _token: _token
                },
                success: function(data) {
                    $('#' + result).html(data);
                }
            });
        });
    })
    </script>


    <script type="text/javascript">
    $(document).ready(function() {
        $('.send_order').click(function() {
            swal({
                    title: "X??c nh???n ????n h??ng",
                    text: "????n h??ng s??? kh??ng ???????c ho??n tr??? khi ?????t,b???n c?? mu???n ?????t kh??ng?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "C???m ??n, Mua h??ng",

                    cancelButtonText: "????ng,ch??a mua",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {

                        var shipping_name = $('.shipping_name').val();
                        var shipping_email = $('.shipping_email').val();
                        var shipping_address = $('.shipping_address').val();
                        var shipping_phone = $('.shipping_phone').val();
                        var shipping_notes = $('.shipping_notes').val();
                        var shipping_method = $('.payment_select').val();
                        var order_coupon = $('.order_coupon').val();
                        var city = $('.city').val();
                        var province = $('.province').val();
                        var wards = $('.wards').val();
                        var _token = $('input[name="_token"]').val();

                        $.ajax({
                            url: '{{url('/confirm-order')}}',
                            method: 'POST',
                            data: {
                                shipping_email: shipping_email,
                                shipping_name: shipping_name,
                                shipping_address: shipping_address,
                                shipping_phone: shipping_phone,
                                shipping_notes: shipping_notes,
                                _token: _token,
                                order_coupon: order_coupon,
                                city: city,
                                province: province,
                                wards: wards,
                                shipping_method: shipping_method
                            },
                            success: function() {
                                swal("????n h??ng",
                                    "????n h??ng c???a b???n ???? ???????c g???i th??nh c??ng",
                                    "success");
                            }
                        });
                        window.setTimeout(function() {
                            location.reload();
                        }, 3000);
                    } else {
                        swal("????ng", "????n h??ng ch??a ???????c g???i, l??m ??n ho??n t???t ????n h??ng", "error");
                    }
                });
        });
    });
    </script>
</body>

</html>