<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="shortcut icon" href="{{ asset('libs/web/images/favicon.png') }}" type="">

        <title> Feane </title>

        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('libs/web/css/bootstrap.css') }}" />

        <!--owl slider stylesheet -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <!-- nice select  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
        <!-- font awesome style -->
        <link href="{{ asset('libs/web/css/font-awesome.min.css') }}" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="{{ asset('libs/web/css/style.css') }}" rel="stylesheet" />

        <!-- responsive style -->
        <link href="{{ asset('libs/web/css/responsive.css') }}" rel="stylesheet" />

    </head>
    <body>
        <div class="hero_area" id="section0">
        <div class="bg-box">
            <img src="{{ asset('libs/web/images/hero-bg.jpg') }}" alt="">
        </div>
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="/">
                <span>
                    Feane
                </span>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mx-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}">Kategorie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Rezerwacje</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section3">O nas</a>
                    </li>
                </ul>
                <div class="user_option">
                    <a href="{{ route('login') }}" class="user_link">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    </a>
                    <a class="cart_link" href="#">
                    </a>
                    <form class="form-inline">
                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    </form>
                    <a href="" class="order_online">
                    Order Online
                    </a>
                </div>
                </div>
            </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <div class="container ">
                    <div class="row">
                    <div class="col-md-7 col-lg-6 ">
                        <div class="detail-box">
                            <h1>
                            Restauracja fast food
                            </h1>
                        <p>
                            I dlatego otworzę ból na łatwość rzeczy, wygodę, mądre czasy, elastyczność prac niż ktokolwiek, z którego jest błąd. Są chwile bólu, porodu, który odpędza ból, tego wielkiego człowieka, którego nic nie robimy, aby go uwolnić.
                        </p>
                        <div class="btn-box">
                            <a href="" class="btn1">
                            Order Now
                            </a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="carousel-item ">
                <div class="container ">
                    <div class="row">
                    <div class="col-md-7 col-lg-6 ">
                        <div class="detail-box">
                        <h1>
                            Fast Food Restaurant
                        </h1>
                        <p>
                            Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                        </p>
                        <div class="btn-box">
                            <a href="" class="btn1">
                            Order Now
                            </a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                    <div class="col-md-7 col-lg-6 ">
                        <div class="detail-box">
                        <h1>
                            Fast Food Restaurant
                        </h1>
                        <p>
                            Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                        </p>
                        <div class="btn-box">
                            <a href="" class="btn1">
                            Order Now
                            </a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="container">
                <ol class="carousel-indicators">
                <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel1" data-slide-to="1"></li>
                <li data-target="#customCarousel1" data-slide-to="2"></li>
                </ol>
            </div>
            </div>

        </section>
        <!-- end slider section -->
        </div>

        <!-- about section -->
        <section class="about_section layout_padding">
        <div class="container" id="section2">
            <div class="row">
            <div class="col-md-6 ">
                <div class="img-box">
                <img src="{{ asset('libs/web/images/about-img.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                <div class="heading_container">
                    <h2>
                    Jesteśmy Feane
                    </h2>
                </div>
                <p>
                    Hamburger – typowe danie typu fast food, kanapka (sandwicz) z kotletem z mięsa wołowego (patty).
                    Porcja mięsa mielonego uformowana jest w płaski, okrągły placek, następnie usmażona lub upieczona
                    bez panierki na ruszcie (grillu). Gotowy kotlet bywa zwykle umieszczany między dwoma kawałkami lekko
                    przypieczonej, poprzecznie przeciętej bułki (co pozwala go jeść trzymając w dłoni, bez pomocy sztućców),
                    oraz ugarnirowany dodatkami takimi jak sałata, pomidor, ketchup, majonez, ogórek konserwowy. W języku
                    polskim słowo „hamburger” oznaczać może także sam, niepanierowany kotlet z mięsa mielonego[a].
                <a href="">
                    Zobacz więcej
                </a>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- end about section -->

        <!-- book section -->
        <section class="book_section layout_padding" id="section3">
        <div class="container">
            <div class="heading_container">
            <h2>
                Znajdz nas
            </h2>
            </div>
            <div class="row">
                <div class="map_container ">
                <div id="googleMap"></div>
                </div>
            </div>
        </div>
        </section>
        <!-- end book section -->

        <!-- client section -->

        <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center psudo_white_primary mb_45">
            <h2>
                What Says Our Customers
            </h2>
            </div>
            <div class="carousel-wrap row ">
            <div class="owl-carousel client_owl-carousel">
                <div class="item">
                <div class="box">
                    <div class="detail-box">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                    </p>
                    <h6>
                        Moana Michell
                    </h6>
                    <p>
                        magna aliqua
                    </p>
                    </div>
                    <div class="img-box">
                    <img src="{{ asset('libs/web/images/client1.jpg') }}" alt="" class="box-img">
                    </div>
                </div>
                </div>
                <div class="item">
                <div class="box">
                    <div class="detail-box">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                    </p>
                    <h6>
                        Mike Hamell
                    </h6>
                    <p>
                        magna aliqua
                    </p>
                    </div>
                    <div class="img-box">
                    <img src="{{ asset('libs/web/images/client2.jpg') }}" alt="" class="box-img">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- end client section -->

        <!-- footer section -->
        <footer class="footer_section">
        <div class="container">
            <div class="row">
            <div class="col-md-4 footer-col">
                <div class="footer_contact">
                <h4>
                    Contact Us
                </h4>
                <div class="contact_link_box">
                    <a href="">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                        Location
                    </span>
                    </a>
                    <a href="">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                        Call +01 1234567890
                    </span>
                    </a>
                    <a href="">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                        demo@gmail.com
                    </span>
                    </a>
                </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <div class="footer_detail">
                <a href="" class="footer-logo">
                    Feane
                </a>
                <p>
                    Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                </p>
                <div class="footer_social">
                    <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="">
                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                    </a>
                </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <h4>
                Opening Hours
                </h4>
                <p>
                Everyday
                </p>
                <p>
                10.00 Am -10.00 Pm
                </p>
            </div>
            </div>
            <div class="footer-info">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a><br><br>
                &copy; <span id="displayYear"></span> Distributed By
                <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
            </p>
            </div>
        </div>
        </footer>
        <!-- footer section -->

        <!-- jQery -->
        <script src="{{ asset('libs/web/js/jquery-3.4.1.min.js') }}"></script>
        <!-- popper js -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <!-- bootstrap js -->
        <script src="{{ asset('libs/web/js/bootstrap.js') }}"></script>
        <!-- owl slider -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
        </script>
        <!-- isotope js -->
        <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
        <!-- nice select -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
        <!-- custom js -->
        <script src="{{ asset('libs/web/js/custom.js') }}"></script>
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
        </script>
        <!-- End Google Map -->

    </body>
</html>
