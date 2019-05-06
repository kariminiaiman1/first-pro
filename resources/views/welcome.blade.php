<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Rehomes - Real Estate HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- **** Header Area Start **** -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_mail"></i> <span>info.colorlib@gmail.com</span></a>
                            <a href="#"><i class="icon_phone"></i> <span>(12) 345 6789</span></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Top Social Area -->
                            <div class="top-social-area ml-auto">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
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
                        <a class="nav-brand" href="./index.html"><img src="./img/core-img/logo.png" alt=""></a>

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
                                    <li class="active"><a href="http://localhost:8000/">Home</a></li>
                                    <li><a href="http://localhost:8000/register">Login / Sign up</a></li>
                                    <li><a href="http://localhost:8000/submit-ads">submit-ads</a></li>
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
    <div class="welcome-area wow fadeInUp" data-wow-delay="200ms">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17107.2892861271!2d-74.01626372475907!3d40.714272545051664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1551762805743" allowfullscreen></iframe>
        </div>
    </div>
    <!-- **** Welcome Maps Area End **** -->

    <!-- **** Location Search Form Area **** -->
    <div class="rehomes-search-form-area wow fadeInUp" data-wow-delay="200ms">
        <div class="container">
            <div class="rehomes-search-form">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-10">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-3">
                                    <select name="location" id="location" class="form-control">
                                        <option value="location">Location</option>
                                        <option value="armenia">Armenia</option>
                                        <option value="argentina">Argentina</option>
                                        <option value="australia">Australia</option>
                                        <option value="belgium">Belgium</option>
                                        <option value="botswana">Botswana</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <select name="types" id="types" class="form-control">
                                        <option value="all-types">All Types</option>
                                        <option value="commercial">Commercial</option>
                                        <option value="office">Office</option>
                                        <option value="villa">Villa</option>
                                        <option value="apartment">Apartment</option>
                                        <option value="condominium">Condominium</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <select name="city" id="city" class="form-control">
                                        <option value="01">All City</option>
                                        <option value="02">London</option>
                                        <option value="03">Dhaka</option>
                                        <option value="04">Singapore</option>
                                        <option value="05">Comilla</option>
                                        <option value="06">Delhi</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <select name="all" id="all" class="form-control">
                                        <option value="01">For All</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <select name="bedrooms" id="bedrooms" class="form-control">
                                        <option value="bedrooms">Bedrooms</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <select name="bathroom" id="bathroom" class="form-control">
                                        <option value="Bathroom">Bathroom</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="slider-range mb-15">
                                        <div class="range-price text-white">Price [30000 - 150000]$</div>
                                        <div class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-min="0" data-max="200000" data-unit="$" data-value-min="30000" data-value-max="150000" data-label-result="Price">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="slider-range mb-15">
                                        <div class="range-size text-white">Size [9762 - 72063]sqFt</div>
                                        <div data-min="0" data-max="98623" data-unit="sqFt" class="slider-range-size ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="9762" data-value-max="72063" data-label-result="Size">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2">
                            <button type="submit" class="btn rehomes-search-btn">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- **** Location Search Form Area **** -->

    <!-- **** Sale area Start **** -->
    <section class="rehome-house-sale-area section-padding-100-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="200ms">
                        <h2>Top New In <span>NewYork</span></h2>
                        <p>These are the best deals and deals. All in New York City and nearby area</p>
                    </div>
                </div>

                <!-- Single Property Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="img/bg-img/1.jpg" alt="">
                        </div>

                        <!-- Property Description -->
                        <div class="property-desc-area">
                            <!-- Property Title & Seller -->
                            <div class="property-title-seller d-flex justify-content-between">
                                <!-- Title -->
                                <div class="property-title">
                                    <h4>7660 Nikolaus Burg</h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> GA 125, Newyork</p>
                                </div>
                                <!-- Seller -->
                                <div class="property-seller">
                                    <p>Seller:</p>
                                    <h6>Alex Cross</h6>
                                </div>
                            </div>
                            <!-- Property Info -->
                            <div class="property-info-area d-flex flex-wrap">
                                <p>Sqft: <span>1420 m2</span></p>
                                <p>Garage: <span>2</span></p>
                                <p>Baths: <span>05</span></p>
                                <p>Baths: <span>06</span></p>
                            </div>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-rent">For Rent</p>
                            <p class="price">$1,599/month</p>
                        </div>
                    </div>
                </div>

                <!-- Single Property Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="img/bg-img/2.jpg" alt="">
                        </div>
                        <!-- Property Description -->
                        <div class="property-desc-area">
                            <!-- Property Title & Seller -->
                            <div class="property-title-seller d-flex justify-content-between">
                                <!-- Title -->
                                <div class="property-title">
                                    <h4>736 Hauck Alley</h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> GA 125, Newyork</p>
                                </div>
                                <!-- Seller -->
                                <div class="property-seller">
                                    <p>Seller:</p>
                                    <h6>Alex Cross</h6>
                                </div>
                            </div>
                            <!-- Property Info -->
                            <div class="property-info-area d-flex flex-wrap">
                                <p>Sqft: <span>1420 m2</span></p>
                                <p>Garage: <span>2</span></p>
                                <p>Baths: <span>05</span></p>
                                <p>Baths: <span>06</span></p>
                            </div>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-sale">For Rent</p>
                            <p class="price">$2,120.000</p>
                        </div>
                    </div>
                </div>

                <!-- Single Property Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="img/bg-img/3.jpg" alt="">
                        </div>

                        <!-- Property Description -->
                        <div class="property-desc-area">
                            <!-- Property Title & Seller -->
                            <div class="property-title-seller d-flex justify-content-between">
                                <!-- Title -->
                                <div class="property-title">
                                    <h4>170 Center Park</h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> GA 125, Newyork</p>
                                </div>
                                <!-- Seller -->
                                <div class="property-seller">
                                    <p>Seller:</p>
                                    <h6>Alex Cross</h6>
                                </div>
                            </div>
                            <!-- Property Info -->
                            <div class="property-info-area d-flex flex-wrap">
                                <p>Sqft: <span>1420 m2</span></p>
                                <p>Garage: <span>2</span></p>
                                <p>Baths: <span>05</span></p>
                                <p>Baths: <span>06</span></p>
                            </div>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-rent">For Rent</p>
                            <p class="price">$1,599/month</p>
                        </div>
                    </div>
                </div>

                <!-- Single Property Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="img/bg-img/4.jpg" alt="">
                        </div>
                        <!-- Property Description -->
                        <div class="property-desc-area">
                            <!-- Property Title & Seller -->
                            <div class="property-title-seller d-flex justify-content-between">
                                <!-- Title -->
                                <div class="property-title">
                                    <h4>58 Treutel Shores</h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> GA 125, Newyork</p>
                                </div>
                                <!-- Seller -->
                                <div class="property-seller">
                                    <p>Seller:</p>
                                    <h6>Alex Cross</h6>
                                </div>
                            </div>
                            <!-- Property Info -->
                            <div class="property-info-area d-flex flex-wrap">
                                <p>Sqft: <span>1420 m2</span></p>
                                <p>Garage: <span>2</span></p>
                                <p>Baths: <span>05</span></p>
                                <p>Baths: <span>06</span></p>
                            </div>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-sale">For Rent</p>
                            <p class="price">$2,120.000</p>
                        </div>
                    </div>
                </div>

                <!-- Single Property Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="img/bg-img/5.jpg" alt="">
                        </div>

                        <!-- Property Description -->
                        <div class="property-desc-area">
                            <!-- Property Title & Seller -->
                            <div class="property-title-seller d-flex justify-content-between">
                                <!-- Title -->
                                <div class="property-title">
                                    <h4>8332 Ramiro Village</h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> GA 125, Newyork</p>
                                </div>
                                <!-- Seller -->
                                <div class="property-seller">
                                    <p>Seller:</p>
                                    <h6>Alex Cross</h6>
                                </div>
                            </div>
                            <!-- Property Info -->
                            <div class="property-info-area d-flex flex-wrap">
                                <p>Sqft: <span>1420 m2</span></p>
                                <p>Garage: <span>2</span></p>
                                <p>Baths: <span>05</span></p>
                                <p>Baths: <span>06</span></p>
                            </div>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-sale">For Rent</p>
                            <p class="price">$2,120.000</p>
                        </div>
                    </div>
                </div>

                <!-- Single Property Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="img/bg-img/6.jpg" alt="">
                        </div>

                        <!-- Property Description -->
                        <div class="property-desc-area">
                            <!-- Property Title & Seller -->
                            <div class="property-title-seller d-flex justify-content-between">
                                <!-- Title -->
                                <div class="property-title">
                                    <h4>221 Leann Suite 473</h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> GA 125, Newyork</p>
                                </div>
                                <!-- Seller -->
                                <div class="property-seller">
                                    <p>Seller:</p>
                                    <h6>Alex Cross</h6>
                                </div>
                            </div>
                            <!-- Property Info -->
                            <div class="property-info-area d-flex flex-wrap">
                                <p>Sqft: <span>1420 m2</span></p>
                                <p>Garage: <span>2</span></p>
                                <p>Baths: <span>05</span></p>
                                <p>Baths: <span>06</span></p>
                            </div>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-rent">For Rent</p>
                            <p class="price">$1,599/month</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- **** Sale Area End **** -->

    <!-- **** Partner Area Start **** -->
    <div class="partner-area wow fadeInUp" data-wow-delay="200ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-slide owl-carousel">
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo wow fadeInUp" data-wow-delay="100ms"><img src="img/core-img/1.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo wow fadeInUp" data-wow-delay="300ms"><img src="img/core-img/2.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo wow fadeInUp" data-wow-delay="500ms"><img src="img/core-img/3.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo wow fadeInUp" data-wow-delay="700ms"><img src="img/core-img/4.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo wow fadeInUp" data-wow-delay="900ms"><img src="img/core-img/5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- **** Partner Area End **** -->

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
                            <a href="#" class="footer-logo"><img src="img/core-img/logo-2.png" alt=""></a>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
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
                                <p>Phone: <span>(12) 345 6789</span></p>
                                <p>Email: <span>colorlib.info@gmail.com</span></p>
                                <p>Address: <span>Iris Watson, Box 283 8562 Fusce Rd, NY</span></p>
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
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Kalima</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Austin</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Mianma</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Mahatan</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chicago</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Mehico</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Mahatan</a></li>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> New York</a></li>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
