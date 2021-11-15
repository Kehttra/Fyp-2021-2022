<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>PhoneMate</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset ('css/responsive.css')}}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset ('css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset ('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
    <!--stylesheets -->
    <link rel="stylesheet" href="{{asset ('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/cart.css')}}">
    <link rel="stylesheet" href="{{asset ('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')}}" media="screen">

    <link rel="stylesheet" type="text/css" href="{{asset('Auth/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Auth/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Auth/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Auth/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Auth/flexslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Auth/chosen.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Auth/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Auth/color-01.css')}}">
    @livewireStyles


    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">

                <div class="topbar-menu-area">
                    <div class="container">
                        <div class="topbar-menu left-menu">
                            <ul>
                                <li class="menu-item">
                                    <a title="Hotline: (+123) 456 789" href="#"><span class="icon label-before fa fa-mobile"></span>Hotline: +961/81895453</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-menu right-menu">
                            <ul>

                                <li class="menu-item"><a title="ChatBot" href="register.html">Chatbot</a></li>

                                <li class="menu-item menu-item-has-children parent">
                                    <a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Pound (GBP)" href="#" style="color:black">Pound (GBP)</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Euro (EUR)" href="#" style="color:black">Euro (EUR)</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Dollar (USD)" href="#" style="color:black">Dollar (USD)</a>
                                        </li>
                                    </ul>
                                </li>
                                @if(Route::has('login'))
                                @auth
                                @if(Auth::user()->utype === 'ADM')
                                <li class="menu-item menu-item-has-children parent">
                                    <a title="My Account" href="#">My Account {{Auth::user()->name}} <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Dashboard" href="{{route('admin.dashboard')}}" style="color:black">Dashboard</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Categories" href="{{ route('admin.categories')}}" style="color:black">Categories</a>
                                        </li>
                                        <li>
                                            <a style="color:black" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                        <form id="logout-form" method="POST" action="{{route('logout')}}">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                                @else
                                <li class="menu-item menu-item-has-children parent">
                                    <a title="My Account" href="#">My Account {{Auth::user()->name}} <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Dashboard" href="{{route('user.dashboard')}}" style="color:black">Dashboard</a>
                                        </li>
                                        <li>
                                            <a style="color:black" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                        <form id="logout-form" method="POST" action="{{route('logout')}}">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                                @endif
                                @else
                                <li class="menu-item"><a title="Register or Login" href="{{route('login')}}">Login</a></li>
                                <li class="menu-item"><a title="Register or Login" href="{{route('register')}}">Register</a></li>
                                @endif
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="mid-section main-info-area">

                        <div class="wrap-logo-top left-section">
                            <a href="/" class="link-to-home"><img src="{{asset('images/Logo2.PNG')}}" alt="mercado"></a>
                        </div>

                        @livewire('header-search-component')

                        <div class="wrap-icon right-section">
                            <div class="wrap-icon-section wishlist">
                                <a href="#" class="link-direction">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <div class="left-info">
                                        <span class="index">0 item</span>
                                        <span class="title">Wishlist</span>
                                    </div>
                                </a>
                            </div>
                            <div class="wrap-icon-section minicart">
                                <a href="#" class="link-direction">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <div class="left-info">
                                        @if (Cart::count()>0)
                                        <span class="index">{{Cart::count()}} items</span>
                                        @endif
                                        <span class="title">CART</span>
                                    </div>
                                </a>
                            </div>
                            <div class="wrap-icon-section show-up-after-1024">
                                <a href="#" class="mobile-navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                            <li class="menu-item home-icon">
                                <a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </li>

                            <li class="menu-item">
                                <a href="/Aboutus" class="link-term mercado-item-title">About Us</a>
                            </li>

                            <li class="menu-item">
                                <a href="/shop" class="link-term mercado-item-title">Shop</a>
                            </li>

                            <li class="menu-item">
                                <a href="/Phonebrands" class="link-term mercado-item-title">Phone Brands</a>
                            </li>

                            <li class="menu-item">
                                <a href="/Cart" class="link-term mercado-item-title">Cart</a>
                            </li>

                            <li class="menu-item">
                                <a href="/Contactus" class="link-term mercado-item-title">Contact Us</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    {{$slot}}

    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>Address</h3>
                                <span>Aramoun Mian Road, Infront of Jawhari Station, PhoneMate 1st Floor</span>
                                <p>81/895453 -- 78/806084 -- 70/613904
                                    <br>ibrahimmonajjed997@gmail.com
                                </p>
                            </div>
                            <ul class="location_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                            <div class="menu-bottom">
                                <ul class="link">
                                    <li> <a href="#">Home</a></li>
                                    <li> <a href="#">About</a></li>

                                    <li> <a href="#">Phone Brands </a></li>
                                    <li> <a href="#">Shop </a></li>
                                    <li> <a href="#"> Contact us</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2021 All Rights Reserved. Designed By Rafik Hariri Seniors 2021</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{ asset('js/plugin.js')}}"></script>

    <script src="{{ asset('cartjs/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
    <script src="{{ asset('cartjs/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
    <script src="{{ asset('cartjs/bootstrap.min.js')}}"></script>
    <script src="{{ asset('cartjs/jquery.flexslider.js')}}"></script>
    {{-- <script src="{{ asset('cartjs/chosen.jquery.min.js')}}"></script> --}}
    <script src="{{ asset('cartjs/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('cartjs/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('cartjs/jquery.sticky.js')}}"></script>
    <script src="{{ asset('cartjs/functions.js')}}"></script>
    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
    <!-- javascript -->
    <script src="{{ asset('js/owl.carousel.js')}}"></script>
    <script src="{{ asset('https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/238f5de084.js" crossorigin="anonymous')}}"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    @livewireScripts
    </body>

</html>