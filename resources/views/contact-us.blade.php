@extends('layouts.app')

@section('content')
<div class="welcome-area wow fadeInUp" data-wow-delay="200ms">
    <div id="map" style="width: 100%; height: 100%;"></div>
</div>
<section class="rehome-house-sale-area section-padding-100-60">
    <div class="container">
        <div class="row">
          <div class="col-md-2 col-lg-2 col-sm-2">
          </div>
          <div class="text-center col-md-8 col-lg-8 col-sm-8">
            <h4>تماس با ما</h4>
            <p>به دلیل حجم بسیار زیاد تماس با اجاره کده هیچگونه تماس حضوری پذیرفته نمی شود<br>
شما بازدیدکننده محترم می توانید از راه های ارتباطی زیر با ما در تماس باشید</p>
            <ul class="contact-us-info list-unstyled fa-ul" style="direction:rtl;">
                <li>آدرس: تهران، سعادت آباد، چهار راه سرو، ساختمان زیتون، واحد ۵</li>
                <li>تلفن: 09217435023</li>
                <li>ایمیل: info@ejarekade.com</li>
                <li>وب سایت: ejarekade.com</li>
            </ul>
          </div>
          <div class="col-md-2 col-lg-2 col-sm-2">
          </div>
        </div>
    </div>
</section>
<div class="partner-area wow fadeInUp" data-wow-delay="200ms">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partner-logo-slide owl-carousel">
                    <a href="https://www.otaghak.com/" class="partner-logo wow fadeInUp" data-wow-delay="100ms"><img src="img/core-img/1.jpg" alt=""></a>
                    <a href="https://www.befarmaeid.com/" class="partner-logo wow fadeInUp" data-wow-delay="300ms"><img src="img/core-img/2.jpg" alt=""></a>
                    <a href="https://www.jabama.com/" class="partner-logo wow fadeInUp" data-wow-delay="500ms"><img src="img/core-img/3.jpg" alt=""></a>
                    <a href="https://divar.ir/" class="partner-logo wow fadeInUp" data-wow-delay="700ms"><img src="img/core-img/4.jpg" alt=""></a>
                    <a href="https://sarayar.com/" class="partner-logo wow fadeInUp" data-wow-delay="900ms"><img src="./img/core-img/5.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function() {
  $("#map").googleMap({
    zoom:14,
  });
  $("#map").addMarker({
    coords: [29.2714028, 51.2185082,20],
    type: "ROADMAP",
    draggable: true,
  });
})
</script>
@endsection
