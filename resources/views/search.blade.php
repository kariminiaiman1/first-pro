@extends('layouts.app')

@section('content')
<script>
  $(function() {
    $("#slider-range").slider({
      range: true,
      min: 50000,
      max: 50000000,
      values: [600000, 49000000],
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
<script>
  $(document).ready(function(){
    $("#category").on("change",function(){
      var selectedVal = this.value;
      if(selectedVal=="وسایل خانه"){
        $("#subcry").empty();
        $("#subcry").append($('<option>', {
            disabled: '',
            selected: '',
            text: 'انتخاب کنید'
        }),$('<option>', {
            value: 'یخچال',
            text: 'یخچال'
        }),$('<option>', {
            value: 'کولر',
            text: 'کولر'
        }));
      }
      if(selectedVal=="املاک"){
        $("#subcry").empty();
        $("#subcry").append($('<option>', {
            disabled: '',
            selected: '',
            text: 'انتخاب کنید'
        }),$('<option>', {
            value: 'ویلا',
            text: 'ویلا'
        }),$('<option>', {
            value: 'سوئیت',
            text: 'سوئیت'
        }));
      }
      if(selectedVal=="خودرو"){
        $("#subcry").empty();
        $("#subcry").append($('<option>', {
            disabled: '',
            selected: '',
            text: 'انتخاب کنید'
        }),$('<option>', {
            value: 'بنز',
            text: 'بنز'
        }),$('<option>', {
            value: 'بی ام و',
            text: 'بی ام و'
        }));
      }
   });
   $("#state").on("change",function(){
     var selectedVal = this.value;
     if(selectedVal=="تهران"){
       $("#City").empty();
       $("#City").append($('<option>', {
           disabled: '',
           selected: '',
           text: 'انتخاب کنید'
       }),$('<option>', {
           value: 'تهران',
           text: 'تهران'
       }),$('<option>', {
           value: 'اسلام شهر',
           text: 'اسلام شهر'
       }),$('<option>', {
           value: 'شهر ری',
           text: 'شهر ری'
       }),$('<option>', {
           value: 'سعادت آباد',
           text: 'سعادت آباد'
       }));
     }
     if(selectedVal=="خراسان رضوی"){
       $("#City").empty();
       $("#City").append($('<option>', {
           disabled: '',
           selected: '',
           text: 'انتخاب کنید'
       }),$('<option>', {
           value: 'مشهد',
           text: 'مشهد'
       }),$('<option>', {
           value: 'نیشاپور',
           text: 'نیشاپور'
       }),$('<option>', {
           value: 'تربت حیدریه',
           text: 'تربت حیدریه'
       }));
     }
     if(selectedVal=="فارس"){
       $("#City").empty();
       $("#City").append($('<option>', {
           disabled: '',
           selected: '',
           text: 'انتخاب کنید'
       }),$('<option>', {
           value: 'شیراز',
           text: 'شیراز'
       }),$('<option>', {
           value: 'لار',
           text: 'لار'
       }),$('<option>', {
           value: 'استهبان',
           text: 'استهبان'
       }));
     }
     if(selectedVal=="مازندران"){
       $("#City").empty();
       $("#City").append($('<option>', {
           disabled: '',
           selected: '',
           text: 'انتخاب کنید'
       }),$('<option>', {
           value: 'ساری',
           text: 'ساری'
       }),$('<option>', {
           value: 'رامسر',
           text: 'رامسر'
       }),$('<option>', {
           value: 'چالوس',
           text: 'چالوس'
       }));
     }
  });
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
                              <select id="category" name="category" class="form-control" style="display:block !important;">
                                <option value="default" selected>دسته بندی</option>
                                <option value="املاک">املاک</option>
                                <option value="وسایل خانه">مربوط به خانه</option>
                                <option value="خودرو">وسایل نقلیه</option>
                              </select>
                          </div>
                          <div class="col-12 col-md-6 col-lg-3">
                              <select name="subcategory" id="subcry" class="form-control" style="display:block !important;">
                                  <option value="default" selected>زیر دسته</option>
                              </select>
                          </div>
                          <div class="col-12 col-md-6 col-lg-3">
                              <select name="state" id="state" class="form-control" style="display:block !important;">
                                <option value="default" selected>استان</option>
                                <option value="تهران">تهران</option>
                                <option value="خراسان رضوی">خراسان رضوی</option>
                                <option value="فارس">فارس</option>
                                <option value="مازندران">مازندران</option>
                              </select>
                          </div>
                          <div class="col-12 col-md-6 col-lg-3">
                              <select name="city" id="City" class="form-control" style="display:block !important;">
                                <option value="default" selected>شهر</option>
                              </select>
                          </div>
                          <div class="col-12 col-md-6 col-lg-3">
                              <input name="title" id="title" class="form-control" placeholder="عنوان آگهی" />
                          </div>
                          <div class="col-12 col-md-6 col-lg-3">
                                <div class="form-control" id="slider-range"></div>
                          </div>
                          <div class="col-12 col-md-6 col-lg-3">
                            <input class="form-control" type="number" id="amount_min" name="minprice" style="border:0; color:red; font-weight:bold;">
                          </div>
                          <div class="col-12 col-md-6 col-lg-3">
                            <input class="form-control" type="number" id="amount_max" name="maxprice" style="border:0; color:red; font-weight:bold;">
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
                                <p class="mapshover"><i class="fa fa-map-marker" aria-hidden="true"></i> آدرس بر روی نقشه</p>
                                <div class="mapsshow">
                                  <div class="map1" style="width: 290px; height: 250px;margin:8px 0px;"></div>
                                  <input type="text" class="hiddenin latitude" value={{$task->latit}} >
                                  <input type="text" class="hiddenin longitude" value={{$task->long}} >
                                </div>
                            </div>
                            <div class="property-seller">
                              <span>آگهی دهنده</span>
                              <p>{{ $task->name }}</p>
                            </div>
                        </div>
                        <div class="property-info-area d-flex flex-wrap table-responsive">
                          <table class="table">
                            <tr>
                              <td>دسته بندی</td>
                              <td>{{ $task->category }}</td>
                              <td>زیر دسته</td>
                              <td>{{ $task->subcategory }}</td>
                            </tr>
                            <tr>
                              <td>استان</td>
                              <td>{{ $task->state }}</td>
                              <td>شهر</td>
                              <td>{{ $task->city }}</td>
                            </tr>
                          </table>

                        </div>
                    </div>
                    <div class="property-price">
                        <p class="badge-rent">@guest آگهی @if (Route::has('register')) | اجاره  @endif @elseif (Auth::user()->name == $task->name) <a href="http://localhost:8000/edit/{{$task->id}}">ویرایش</a> | <a href="http://localhost:8000/delete/{{$task->id}}">حذف</a> @else آگهی | اجاره @endguest </p>
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
