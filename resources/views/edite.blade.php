@extends('layouts.app')

@section('content')
<section class="rehome-house-sale-area section-padding-100-60">
    <div class="container">
        <div class="row">
            @foreach($taskedit as $task)
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
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
