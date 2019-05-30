<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rehomes - Real Estate HTML Template</title>
    <link rel="icon" href="../img/favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../style.css">
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

         label{
           display: inline-block !important;
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
                          <a href="#"><i class="icon_mail"></i> <span>info@ejarekade.com</span></a>
                          <a href="#"><i class="icon_phone"></i> <span>(098921) 743 5023</span></a>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="top-header-content">
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
      <div class="main-header-area animated">
          <div class="classy-nav-container breakpoint-off">
          <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a class="nav-brand" href="{{ url('/') }}">
                      <img src="./img/logo.png" width="240" alt="">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                          @guest
                              <li style="background: #ac13f7;margin:0px 1px; border-radius: 7px;padding: 2px;" class="nav-item ">
                                  <a id="navbarDropdown" class="nav-link" href="#">Contact Us</a>
                              </li>
                              <li style="background: #6868f5;margin:0px 1px; border-radius: 7px;padding: 2px;" class="nav-item ">
                                  <a id="navbarDropdown" class="nav-link" href="#">About Us</a>
                              </li>
                              <li style="background: #32ccfe;margin:0px 1px; border-radius: 7px;padding: 2px;" class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                              @if (Route::has('register'))
                              <li style="background: #00cc00;margin:0px 1px; border-radius: 7px;padding: 2px;" class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                              <li style="background: #dede19;margin:0px 1px; border-radius: 7px;padding: 2px;" class="nav-item">
                                <a class="nav-link" href="">{{ __('Category')}}</a>
                              </li>
                              <li style="background: #ff6600;margin:0px 1px; border-radius: 7px;padding: 2px;" class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/submit-ads">{{ __('Send Free Ads')}}</a>
                              </li>
                              <li style="background: #fe0000;margin:0px 1px; border-radius: 7px;padding: 2px;" class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/">{{__('Home')}}</a>
                              </li>
                              @endif
                          @else
                              <li style="background: #ac13f7;margin:0px 1px; border-radius: 7px;padding: 2px;" class="nav-item ">
                                  <a id="navbarDropdown" class="nav-link" href="#">Contact Us</a>
                              </li>
                              <li style="background: #6868f5;margin:0px 1px; border-radius: 7px;padding: 2px;" class="nav-item ">
                                  <a id="navbarDropdown" class="nav-link" href="#">About Us</a>
                              </li>
                              <li style="background: #32ccfe;margin:0px 1px; border-radius: 7px;padding: 2px;" class="nav-item ">
                                  <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      {{ Auth::user()->name }} <span class="caret"></span>
                                  </a>
                              </li>
                              <li style="background: #00cc00;margin:0px 1px; border-radius: 7px;padding: 2px;" class="nav-item ">
                                  <a class="nav-link" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </li>
                              <li style="background: #dede19;margin:0px 1px; border-radius: 7px;padding: 2px;" class="nav-item">
                                <a class="nav-link" href="">{{ __('Category')}}</a>
                              </li>
                              <li style="background: #ff6600;margin:0px 1px; border-radius: 7px;padding: 2px;" class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/submit-ads">{{ __('Send Free Ads')}}</a>
                              </li>
                              <li style="background: #fe0000;margin:0px 1px; border-radius: 7px;padding: 2px;" class="nav-item">
                                <a class="nav-link" href="http://localhost:8000/">Home</a>
                              </li>
                          @endguest
                      </ul>
                    </div>
                </div>
            </nav>
      </div>
    </header>
    <div class="rehomes-search-form-area0 wow fadeInUp" data-wow-delay="200ms" style="background:#cdcdcd">
        <div class="container">
          @foreach($taskedit as $task)
          <div class="row">
                <hr>
                <form class="form-inline" action="/update/{{$task->id}}" enctype="multipart/form-data" method="post">
                   {{ csrf_field() }}
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>Title</label>
                  <input type="text" name="title" placeholder="{{$task->title}}">
                </div>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label style="float: left;">Description</label>
                  <textarea style="float: left;width: 42%;border: 1px solid #2a303b;border-radius: 5px;" name="description">{{$task->description}}</textarea>
                </div>
                <hr>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>State</label>
                  <select name="state" class="selectpicker">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Barbecue</option>
                  </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>City</label>
                  <select name="city" class="selectpicker">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Barbecue</option>
                  </select>
                </div>
                <hr>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>Category</label>
                  <select name="category" class="selectpicker">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Barbecue</option>
                  </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>Sub Category</label>
                  <select name="subcategory" class="selectpicker">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Barbecue</option>
                  </select>
                </div>
                <hr>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>Phone</label>
                  <input type="number" name="phone" value="{{$task->phone}}">
                </div>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>Price</label>
                  <input type="number" name="price" value="{{$task->price}}">
                </div>
                <hr>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>Image</label>
                  <input type="file" name="image[]" multiple="multiple">
                  <!-- <input type="file" size="20" id="imageUpload" class=" "> -->
                </div>
                <hr>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <label>Address</label>
                  <div id="map" style="width: 600px; height: 300px;margin:4px 0px;"></div>
                  <input  type="text" id="latitude"  name="latitude" value="{{$task->latit}}">
                  <input  type="text" id="longitude"  name="longitude" value="{{$task->long}}">
                </div>
                <hr>
                <div class="col-lg-6 col-md-6 col-sx-6">
                  <!-- <input style="background:#93ca00;color:white;padding-left:30px;padding-right:30px;padding-bottom: 7px;padding-top: 5px;" type="submit" value="submit"> -->
                    <button value="submit">submit</button>
                </div>
              </form>
              @endforeach
                <hr>
          </div>
        </div>
      </div>
      <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0" style="background-image: url(./img/bg-img/17.jpg);">
          <div class="main-footer-area">
              <div class="container">
                  <div class="row justify-content-between">
                      <div class="col-12 col-sm-6 col-lg-3">
                          <div class="single-footer-widget mb-80">
                              <a href="#" class="footer-logo"><img src="../img/logo.png" alt=""></a>
                              <p>Ejarekade site is the first and only specialized rental site in Iran that has begun its activities. You are welcome visitor to place all your ads for free on the site and use all the facilities of the site for free.</p>
                              <div class="social-info">
                                  <a href="https://www.facebook.com/ejare.kade.9"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                  <a href="https://twitter.com/ejarekade1398"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                  <a href="https://www.linkedin.com/in/ejare-kade-722110184/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                  <a href="https://www.instagram.com/ejarekade1398/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                          </div>
                      </div>
                      <div class="col-12 col-sm-6 col-lg-3">
                          <div class="single-footer-widget mb-80">
                              <h5 class="widget-title">Get info</h5>
                              <div class="footer-contact">
                                  <p>Phone: <span>(098921) 743 5023</span></p>
                                  <p>Email: <span>info@ejarekade.com</span></p>
                                  <p>Address: <span>Iran - Teharan</span></p>
                              </div>
                          </div>
                      </div>
                      <div class="col-12 col-sm-6 col-lg-3">
                          <div class="single-footer-widget mb-80">
                              <!-- Widget Title -->
                              <h5 class="widget-title">Property Cities</h5>
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
                      <div class="col-12 col-sm-6 col-lg-3">
                          <div class="single-footer-widget mb-80">
                              <h5 class="widget-title">Newsletter</h5>
                              <p>Subscribe our newsletter gor get notification about new updates, count, etc.</p>
                              <form action="index.html" class="nl-form">
                                  <input type="email" name="nl-email" class="form-control" placeholder="Enter your email...">
                                  <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="copywrite-content">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-12 col-sm-6">
                          <div class="copywrite-text">
                              <p>
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());
                                </script> Web Designer( Laravel ) & seo
                                <i class="fa fa-heart-o" aria-hidden="true">
                                </i> by
                                <a href="#" target="_blank">Iman Karimi Nia</a>
                              </p>
                          </div>
                      </div>
                      <div class="col-12 col-sm-6">
                          <div class="footer-menu">
                              <ul class="nav">
                                  <li><a href="http://localhost:8000/">Home</a></li>
                                  <li><a href="http://localhost:8000/register">Register</a></li>
                                  <li><a href="http://localhost:8000/submit-ads">Send Free Ads</a></li>
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
