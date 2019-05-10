<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>اجاره کده - اجاره ملک، خودرو، ویلا، سوئیت</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./style.css">
    <style>
    label {
    color: white;
    display: inline-block;
    margin-bottom: .5rem;
    background: #2a303b;
    padding: 5px;
    border-radius: 6px;
    width: 150px;
    }
    input {
    overflow: visible;
    border: 1px solid #2a303b;
    border-radius: 5px;
    height: 32px;
    }

    button.btn.dropdown-toggle.btn-light {
    background: #ff0000;
    }
    .dropdown.bootstrap-select {
    background: red;
    }
    hr{
      width: 100%;
    }
    #map {
      height: 400px;
      width: 100%;
     }
 </style>
</head>

<body>
    <!-- **** Header Area Start **** -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_mail"></i> <span>info@ejarekade.com</span></a>
                            <a href="#"><i class="icon_phone"></i> <span>(098921) 743 5023</span></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Top Social Area -->
                            <div class="top-social-area ml-auto">
                                <a href="https://www.facebook.com/ejare.kade.9"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/ejarekade1398"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/in/ejare-kade-722110184/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/ejarekade1398/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area animated">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="rehomesNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="./index.html"><img src="./img/logo.png" width="240" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                  <li><a href="http://localhost:8000/submit-ads">submit-ads</a></li>
                                    <li><a href="http://localhost:8000/register">Login / Sign up</a></li>
                                    <li class="active"><a href="http://localhost:8000/">Home</a></li>
                                </ul>

                                <!-- Contact btn -->
                                <div class="contact-btn mt-3 mt-lg-0 ml-3 ml-lg-5">
                                    <a href="#">Contact Us</a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- **** Header Area End **** -->
    <!-- **** Welcome Maps Area Start **** -->
    @yield('content')

    <!-- **** Footer Area Start **** -->
    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0" style="background-image: url(img/bg-img/17.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row justify-content-between">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img src="../img/logo.png" alt=""></a>

                            <p>Ejarekade site is the first and only specialized rental site in Iran that has begun its activities. You are welcome visitor to place all your ads for free on the site and use all the facilities of the site for free.</p>
                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="https://www.facebook.com/ejare.kade.9"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/ejarekade1398"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/in/ejare-kade-722110184/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/ejarekade1398/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                          </div>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Get info</h5>

                            <!-- Contact Area -->
                            <div class="footer-contact">
                                <p>Phone: <span>(098921) 743 5023</span></p>
                                <p>Email: <span>info@ejarekade.com</span></p>
                                <p>Address: <span>Iran - Teharan</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Property Cities</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav d-flex flex-wrap">
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Tehran</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Alborz</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Boushehr</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Kordestan</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Mashhad</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Esfehan</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Khoozestan</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Mazandaran</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Newsletter</h5>

                            <p>Subscribe our newsletter gor get notification about new updates, count, etc.</p>
                            <!-- Newsletter Form -->
                            <form action="index.html" class="nl-form">
                                <input type="email" name="nl-email" class="form-control" placeholder="Enter your email...">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-content">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Web Designer( Laravel ) & seo <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Iman Karimi Nia</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>

                    <!-- Footer Menu -->
                    <div class="col-12 col-sm-6">
                        <div class="footer-menu">
                            <ul class="nav">
                                <li><a href="http://localhost:8000/">Home</a></li>
                                <li><a href="http://localhost:8000/register">Login/Sign Up</a></li>
                                <li><a href="http://localhost:8000/submit-ads">submit-ads</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- **** Footer Area End **** -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="../js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="../js/rehomes.bundle.js"></script>
    <!-- Active -->
    <script src="../js/default-assets/active.js"></script>

</body>

</html>
