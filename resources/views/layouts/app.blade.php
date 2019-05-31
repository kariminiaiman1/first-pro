<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/favicon.png')}}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./style.css">
    <script src="../js/popper.min.js"></script>
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

     .pb-4, .py-4{
       padding-bottom: 0px !important;
     }
     .nice-select{
       display: none !important;
     }
     select#category{
       display: block !important;
     }
     select#subcry{
       display: block !important;
     }
     select#City{
       display: block !important;
     }
     select#state{
       display: block !important;
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
                          <a href=""><i class="icon_mail"></i><span>info@ejarekade.com</span></a>
                          <a href=""><i class="icon_phone"></i><span>(098921) 743 5023</span></a>
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
        <div class="container classy-nav-container breakpoint-off">
          <nav class="row navbar navbar-default">
              <div class="container-fluid">
                      <div class="navbar-header">
                        <a class="nav-brand" href="{{ url('/') }}">
                          <img src="./img/logo.png" width="240" alt="">
                        </a>
                      </div>
                      <ul class="nav navbar-nav">
                          @guest
                              <li style="background: #ac13f7; " class="nav-item nav-li ">
                                  <a id="navbarDropdown" class="nav-link" href="http://localhost:8000/contact-us">تماس با ما</a>
                              </li>
                              <li style="background: #6868f5; " class="nav-item nav-li ">
                                  <a id="navbarDropdown" class="nav-link" href="http://localhost:8000/about-us">درباره ما</a>
                              </li>
                              <li style="background: #32ccfe; " class="nav-item nav-li">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('ورود') }}</a>
                              </li>
                              @if (Route::has('register'))
                              <li style="background: #00cc00; " class="nav-item nav-li">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('ثبت نام') }}</a>
                              </li>
                              <li style="background: #dede19; " class="nav-item nav-li">
                                <a class="nav-link" href="">{{ __('دسته بندی')}}</a>
                              </li>
                              <li style="background: #ff6600; " class="nav-item nav-li">
                                <a class="nav-link" href="http://localhost:8000/submit-ads">{{ __('ارسال آگهی')}}</a>
                              </li>
                              <li style="background: #fe0000; " class="nav-item nav-li">
                                <a class="nav-link" href="http://localhost:8000/">{{__('خانه')}}</a>
                              </li>
                              @endif
                          @else
                              <li style="background: #ac13f7; " class="nav-item nav-li ">
                                  <a id="navbarDropdown" class="nav-link" href="http://localhost:8000/contact-us">تماس با ما</a>
                              </li>
                              <li style="background: #6868f5; " class="nav-item nav-li ">
                                  <a id="navbarDropdown" class="nav-link" href="http://localhost:8000/about-us">درباره ما</a>
                              </li>
                              <li style="background: #32ccfe; " class="nav-item nav-li ">
                                  <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      {{ Auth::user()->name }} <span class="caret"></span>
                                  </a>
                              </li>
                              <li style="background: #00cc00; " class="nav-item nav-li ">
                                  <a class="nav-link" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('خروج') }}
                                  </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </li>
                              <li style="background: #dede19; " class="nav-item nav-li">
                                <a class="nav-link" href="">{{ __('دسته بندی')}}</a>
                              </li>
                              <li style="background: #ff6600; " class="nav-item nav-li">
                                <a class="nav-link" href="http://localhost:8000/submit-ads">{{ __('ارسال آگهی')}}</a>
                              </li>
                              <li style="background: #fe0000; " class="nav-item nav-li">
                                <a class="nav-link" href="http://localhost:8000/">خانه</a>
                              </li>
                          @endguest
                      </ul>
                  </div>
          </nav>
      </div>
  </header>
    <main class="py-4">
        @yield('content')
    </main>
    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0" style="background-image: url(./img/bg-img/17.jpg);">
        <div class="main-footer-area">
            <div class="container">
                <div class="row justify-content-between">
                  <div class="col-12 col-sm-6 col-lg-3" style="direction:rtl; text-align:justify;">
                  <div class="single-footer-widget mb-80">
                            <h5  class="widget-title">درباره ما</h5>
                            <p style="direction:rtl; text-align:justify;">سایت اجاره کده در سال 1398 توسط ایمان کریمی نیا طراحی و راه اندازی شد. سعی شده است تمام دسته بندی هایی که شامل اجاره می شوند در سایت قرار گیرند تا سایت اجاره کده بتواند منبعی عظیم در رابطه با اجاره در تمام زمینه ای موجود شود.</p>
                            <div class="social-info">
                                <a href="https://www.facebook.com/ejare.kade.9"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/ejarekade1398"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/in/ejare-kade-722110184/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/ejarekade1398/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                          </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3" style="direction:rtl; text-align:justify;">
                        <div class="single-footer-widget mb-80">
                            <h5 class="widget-title">تماس با ما</h5>
                            <div class="footer-contact">
                                <p>شماره تماس: <span>(098921) 743 5023</span></p>
                                <p>ایمیل: <span>info@ejarekade.com</span></p>
                                <p>آدرس: <span>Iran - Teharan - Borazjan</span></p>
                                <p>وب سایت: <span>Ejarekade.com</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3" style="direction:rtl; text-align:justify;">
                        <div class="single-footer-widget mb-80">
                            <h5 class="widget-title">شهرهای پر آگهی</h5>
                            <ul class="footer-nav d-flex flex-wrap">
                                <li><a href="http://localhost:8000/search?state=&تهران=&minprice=2000000&maxprice=35000000"><i class="fa fa-map-marker" aria-hidden="true"></i> تهران</a></li>
                                <li><a href="http://localhost:8000/search?state=&البرز=&minprice=2000000&maxprice=35000000"><i class="fa fa-map-marker" aria-hidden="true"></i> البرز</a></li>
                                <li><a href="http://localhost:8000/search?state=&بوشهر=&minprice=2000000&maxprice=35000000"><i class="fa fa-map-marker" aria-hidden="true"></i> بوشهر</a></li>
                                <li><a href="http://localhost:8000/search?state=&کردستان=&minprice=2000000&maxprice=35000000"><i class="fa fa-map-marker" aria-hidden="true"></i> کردستان</a></li>
                                <li><a href="http://localhost:8000/search?state=&خراسان=&minprice=2000000&maxprice=35000000"><i class="fa fa-map-marker" aria-hidden="true"></i> خراسان</a></li>
                                <li><a href="http://localhost:8000/search?state=&اصفهان=&minprice=2000000&maxprice=35000000"><i class="fa fa-map-marker" aria-hidden="true"></i> اصفهان</a></li>
                                <li><a href="http://localhost:8000/search?state=&خوزستان=&minprice=2000000&maxprice=35000000"><i class="fa fa-map-marker" aria-hidden="true"></i> خوزستان</a></li>
                                <li><a href="http://localhost:8000/search?state=&مازندران=&minprice=2000000&maxprice=35000000"><i class="fa fa-map-marker" aria-hidden="true"></i> مازندران</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3" style="direction:rtl; text-align:justify;">
                        <div class="single-footer-widget mb-80">
                            <h5 class="widget-title">خبرنامه</h5>
                            <p>برای دریافت خبرنامه سایت اجاره کده لطفا ایمیل خود را وارد نمایید.</p>
                            <form action="index.html" class="nl-form">
                                <input type="email" name="nl-email" class="form-control" placeholder="لطفا ایمیل خود را وارد نمایید">
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
                                  </script> Web Designer & seo
                                  <i class="fa fa-heart-o" aria-hidden="true"></i> by
                                  <a href="" target="_blank">ایمان کریمی نیا Iman Karimi Nia</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="footer-menu">
                            <ul class="nav">
                                <li><a href="http://localhost:8000/register">ثبت نام</a></li>
                                <li><a href="http://localhost:8000/submit-ads">ارسال اگهی</a></li>
                                <li><a href="http://localhost:8000/">صفحه اصلی</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/rehomes.bundle.js"></script>
    <script src="../js/default-assets/active.js"></script>
</body>
</html>
