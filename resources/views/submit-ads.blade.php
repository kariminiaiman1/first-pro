<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rehomes - Real Estate HTML Template</title>
    <link rel="icon" href="../img/core-img/favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="./style.css">
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap-select.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBumVN_dqWquRFkx1Hj-GzBLoZU_adFne0"></script>
    <script type="text/javascript" src="../js/jquery.googlemap.js"></script>
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
    background: #92c800;
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
    <header class="header-area">
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
        <div class="main-header-area animated">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <nav class="classy-navbar justify-content-between" id="rehomesNav">
                        <a class="nav-brand" href="./index.html"><img src="./img/core-img/logo.png" alt=""></a>
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        <div class="classy-menu">
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <div class="classynav">
                                <ul id="nav">
                                  <li><a href="http://localhost:8000/">Home</a></li>
                                  <li><a href="http://localhost:8000/register">Login / Sign up</a></li>
                                  <li class="active"><a href="http://localhost:8000/submit-ads">submit-ads</a></li>
                                </ul>
                                <div class="contact-btn mt-3 mt-lg-0 ml-3 ml-lg-5">
                                    <a href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="rehomes-search-form-area0 wow fadeInUp" data-wow-delay="200ms">
        <div class="container">
          <div class="row">
            
            <div class="col-lg-6 col-md-6 col-sx-6">
              <label>Title</label>
              <input type="text" name="title">
            </div>
            <div class="col-lg-6 col-md-6 col-sx-6">
              <label>Description</label>
              <input type="text" name="description">
            </div>
            <hr>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>State</label>
                  <select class="selectpicker">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Barbecue</option>
                  </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>City</label>
                  <select class="selectpicker">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Barbecue</option>
                  </select>
                </div>
                <hr>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>Category</label>
                  <select class="selectpicker">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Barbecue</option>
                  </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>Sub Category</label>
                  <select class="selectpicker">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Barbecue</option>
                  </select>
                </div>
                <hr>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>Phone</label>
                  <input type="number" name="number">
                </div>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>Price</label>
                  <input type="number" name="price">
                </div>
                <hr>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>Address</label>
                  <div id="map" style="width: 600px; height: 300px;"></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>Image</label>
                  <input type="file" size="20" id="imageUpload" class=" ">
                </div>
                <hr>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <input style="background:#93ca00;color:white;padding-left:30px;padding-right:30px;padding-bottom: 7px;padding-top: 5px;" type="submit" value="submit">
                </div>
                <hr>
          </div>
        </div>
      </div>
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
                            <p>Copyright &copy;
                            <script>
                            document.write(new Date().getFullYear());
                            </script>
                              All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            </p>
                        </div>
                    </div>

                    <!-- Footer Menu -->
                    <div class="col-12 col-sm-6">
                        <div class="footer-menu">
                            <ul class="nav">
                              <li><a href="http://localhost:8000/">Home</a></li>
                              <li><a href="http://localhost:8000/register">Login / Sign up</a></li>
                              <li class="active"><a href="http://localhost:8000/submit-ads">submit-ads</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        $('.selectpicker').selectpicker({
          liveSearch: true
        });
    </script>
    <script type="text/javascript">
      $(function() {
        $("#map").googleMap();
        $("#map").addMarker({
        	address: "TEHRAN",
        	draggable: true,
        	success: function(e) {
        	    $("#latitude").val(e.lat);
        	    $("#longitude").val(e.lon);
        	}
    	});
      })
    </script>
</body>
</html>
