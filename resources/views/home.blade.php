@extends('layouts.app')

@section('content')
<div class="welcome-area wow fadeInUp" data-wow-delay="200ms">
    <div id="map" style="width: 100%; height: 100%;"></div>
</div>
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
<section class="rehome-house-sale-area section-padding-100-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="200ms">
                    <h2>Top New In <span>EjareKade</span></h2>
                </div>
            </div>
            @foreach($tasks as $task)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                    <!-- Property Thumb -->
                    <div class="property-thumb">
                        <img src="/img/ads/{{ $task->img }}" alt="">
                    </div>
                    <!-- Property Description -->
                    <div class="property-desc-area">
                        <!-- Property Title & Seller -->
                        <div class="property-title-seller d-flex justify-content-between">
                            <!-- Title -->
                            <div class="property-title">
                                <h4>{{ $task->title }}</h4>
                                <p class="mapshover"><i class="fa fa-map-marker" aria-hidden="true"></i>Address: {{ $task->state }}</p>
                                <div class="mapsshow">
                                  <div class="map1" style="width: 290px; height: 250px;margin:4px 0px;"></div>
                                  <input  type="text" class="latitude" value={{$task->latit}} >
                                  <input  type="text" class="longitude" value={{$task->long}} >
                                </div>
                            </div>
                            <!-- Seller -->
                            <div class="property-seller">
                                <p>Seller:</p>
                                <h6>{{ $task->name }}</h6>
                            </div>
                        </div>
                        <!-- Property Info -->
                        <div class="property-info-area d-flex flex-wrap">
                            <p>category: <span>{{ $task->category }}</span></p>
                            <p>sub category: <span>{{ $task->subcategory }}</span></p>
                            <p>state: <span>{{ $task->state }}</span></p>
                            <p>city: <span>{{ $task->city }}</span></p>
                        </div>
                    </div>

                    <!-- Property Price -->
                    <div class="property-price">
                        <p class="badge-rent">@guest For Rent @if (Route::has('register')) @endif @else <a href="http://localhost:8000/edit/{{$task->id}}">edit</a> | <a href="http://localhost:8000/delete/{{$task->id}}">delete</a>  @endguest</p>
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
    zoom: 15, // Initial zoom level (optional)
    coords: [29.26843303197378, 51.216711408227525], // Map center (optional)
    type: "ROADMAP" // Map type (optional)
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
