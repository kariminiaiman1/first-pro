@extends('layouts.app')

@section('content')
<script>
  $(function() {
    $("#slider-range").slider({
      range: true,
      min: 500000,
      max: 50000000,
      values: [2000000, 35000000],
      slide: function(event, ui) {
        $("#amount_min").val(ui.values[0]);
        $("#amount_max").val(ui.values[1]);
      }
    });
    $("#amount_min").val($("#slider-range").slider("values", 0));
    $("#amount_max").val($("#slider-range").slider("values", 1));
    $("#amount_min").change(function() {
      $("#slider-range").slider("values", 0, $(this).val());
    });
    $("#amount_max").change(function() {
      $("#slider-range").slider("values", 1, $(this).val());
    })
  });
</script>
<div class="welcome-area wow fadeInUp" data-wow-delay="200ms">
    <div id="map" style="width: 100%; height: 100%;"></div>
</div>
<div class="rehomes-search-form-area wow fadeInUp" data-wow-delay="200ms">
    <div class="container">
        <div class="rehomes-search-form">
            <form action="/search" method="get">
                <div class="row">
                    <div class="col-12 col-lg-10">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3">
                                <select name="category" id="category" class="form-control">
                                    <option disabled selected>دسته بندی</option>
                                    <option value="Mustard">Mustard</option>
                                    <option value="Ketchup">Ketchup</option>
                                    <option value="Barbecue">Barbecue</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <select name="subcategory" id="subcategory" class="form-control">
                                  <option disabled selected>زیر دسته</option>
                                  <option value="Mustard">Mustard</option>
                                  <option value="Ketchup">Ketchup</option>
                                  <option value="Barbecue">Barbecue</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <select name="state" id="state" class="form-control">
                                  <option disabled selected>استان</option>
                                  <option value="Mustard">Mustard</option>
                                  <option value="Ketchup">Ketchup</option>
                                  <option value="Barbecue">Barbecue</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <select name="city" id="City" class="form-control">
                                  <option disabled selected>شهر</option>
                                  <option value="Mustard">Mustard</option>
                                  <option value="Ketchup">Ketchup</option>
                                  <option value="Barbecue">Barbecue</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <input name="title" id="title" class="form-control" placeholder="عنوان آگهی" />
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                  <div class="form-control" id="slider-range"></div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                              <input class="form-control" type="text" id="amount_min" name="minprice" style="border:0; color:red; font-weight:bold;">
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                              <input class="form-control" type="text" id="amount_max" name="maxprice" style="border:0; color:red; font-weight:bold;">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2">
                        <button type="submit" class="btn rehomes-search-btn">جستجو</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<section class="rehome-house-sale-area section-padding-100-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="200ms">
                    <h2>جدیدترین آگهی ها در <span>اجاره کده</span></h2>
                </div>
            </div>
            @foreach($tasks as $task)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                    <div class="property-thumb">
                        <img src="/img/ads/{{ $task->img }}" alt="">
                    </div>
                    <div class="property-desc-area">
                        <div class="property-title-seller d-flex justify-content-between">
                            <div class="property-title">
                                <h4>{{ $task->title }}</h4>
                                <p class="mapshover"><i class="fa fa-map-marker" aria-hidden="true"></i>Address: {{ $task->state }}</p>
                                <div class="mapsshow">
                                  <div class="map1" style="width: 290px; height: 250px;margin:4px 0px;"></div>
                                  <input  type="text" class="latitude" value={{$task->latit}} >
                                  <input  type="text" class="longitude" value={{$task->long}} >
                                </div>
                            </div>
                            <div class="property-seller">
                                <p>Seller:</p>
                                <h6>{{ $task->name }}</h6>
                            </div>
                        </div>
                        <div class="property-info-area d-flex flex-wrap">
                            <p>category: <span>{{ $task->category }}</span></p>
                            <p>sub category: <span>{{ $task->subcategory }}</span></p>
                            <p>state: <span>{{ $task->state }}</span></p>
                            <p>city: <span>{{ $task->city }}</span></p>
                        </div>
                    </div>
                    <div class="property-price">
                        <p class="badge-rent">@guest Rent @if (Route::has('register')) | Sell  @endif @elseif (Auth::user()->name == $task->name) <a href="http://localhost:8000/edit/{{$task->id}}">Edit</a> | <a href="http://localhost:8000/delete/{{$task->id}}">Delete</a> @else Rent | Sell @endguest </p>
                        <p class="price">{{$task->price}} تومان</p>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $tasks->links() }}
        </div>
    </div>
</section>
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
                    <a href="#" class="partner-logo wow fadeInUp" data-wow-delay="900ms"><img src="./img/core-img/5.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function() {
  $("#map").googleMap({
    zoom: 15,
    coords: [29.26843303197378, 51.216711408227525],
    type: "ROADMAP"
  });
})
</script>
<script>
  $(".mapshover").hover(function(){
    $(this).next(".mapsshow").css("display", "block");
    lontiti=$(this).parent().find('.latitude').val();
    lontito=$(this).parent().find('.longitude').val();
     $(".map1").googleMap();
     $(".map1").addMarker({
       coords: [lontiti, lontito],
       draggable: false,
       success: function(e) {
       }
   });
    }, function(){
    $(this).next(".mapsshow").css("display", "none");
    });
</script>
@endsection
