@extends('site.master')

@section('content')

<div class="wrap_about_us"><!--Start wrap_about_us-->
    <!--============ Start main ============-->
    @include('site/partials.mainSection')
    <!--============ End main ============-->
	
	<!--============ Start contact-core ============-->
    <section class="">
        <div class="container"><!--Start container-->
            <div class="row"><!--Start row-->
              <div class="col-md-12">
               <div id="map-canvas" style="width:100% ; height: 500px"></div>
              </div>

                <input type="hidden" name="myLat" id="myLat" value="{{ $branch->lat }}">
                <input type="hidden" name="myLng" id="myLng" value="{{ $branch->lng }}">
				
            </div><!--End row-->
        </div><!--End container-->
    </section>
    <!--============ End contact-core ============-->
	<!--============ Start up ============-->
    <i class="up fa fa-chevron-up fa-fw hidden-xs"></i>
    <!--============ End up ============-->

</div>

@endsection

@push('extra-js')
<script>
  function initMap() {
    var myLat = document.getElementById('myLng').value;
    var myLng = document.getElementById('myLng').value;
     
    
    var myLatLng = {lat: parseFloat(myLat), lng: parseFloat(myLng)};

    var map = new google.maps.Map(document.getElementById('map-canvas'), {
      zoom: 17,
      center: myLatLng
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Found it'
    });
  }
</script>

@endpush