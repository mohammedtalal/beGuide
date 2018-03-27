@extends('site.master')

@section('content')
<div class="wrap_contact_us"><!--Start wrap_contact_us-->
     <!--============ Start main ============-->
    @include('site/partials.mainSection')
    <!--============ End main ============-->

    <!--============ Start contact-core ============-->
    <section class="contact_core">
        <div class="container-fluid"><!--Start container-->
            <div class="row"><!--Start row-->

                <div class="col-sm-6 col-xs-12" >
                    <div id="map-canvas" class="map-canvas" >
                    </div>
                </div>
                
                <div class="col-sm-6 col-xs-12">
                    <div class="get_in_touch">
                        @foreach($allData as $data)
                        <div class="heading">
                            <h3>{{ $data->companyName }}</h3>
                            <p>
                                {{ $data->description }}
                            </p>
                        </div>
                        <div class="get_in_touch_addrtess">
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa fa-home fa-fw"></i>
                                    <h4>Address</h4>
                                    <p>{{ $data->address }}</p>
                                </li>
                                <li>
                                    <i class="fa fa-phone fa-fw"></i>
                                    <h4>Phone</h4>
                                    <p>{{ $data->phone }}</p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o fa-fw"></i>
                                    <h4>Email</h4>
                                    <p>{{ $data->email }}</p>
                                </li>
                            </ul>

                            <!-- inputs hidden to get our latitude and longtude  -->
                            <input type="hidden" name="myLat"  id="myLat" value="{{ $data->lat }}">
                            <input type="hidden" name="myLng" id="myLng" value="{{ $data->lng }}">
                        
                            <form action="{{ route('contact.sendEmail') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="text" name="name" placeholder="Please write your name">
                                <input type="email" name="email" placeholder="Please write your E-mail">
                                <textarea name="message" placeholder="your message"></textarea>
                                <input type="submit" name="send" value="Send">   
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div><!--End row-->
        </div><!--End container-->
    </section>
    <!--============ End contact-core ============-->
    <!--============ Start up ============-->
    <i class="up fa fa-chevron-up fa-fw hidden-xs"></i>
    <!--============ End up ============-->
</div><!--End wrap_contact_us-->
@endsection

@push('extra-js')
    <script>
      function initMap() {
        var myLat = document.getElementById('myLat').value;
        var myLng = document.getElementById('myLng').value;


        var myLatLng = {lat: parseFloat(myLat) , lng: parseFloat(myLng)};

        var map = new google.maps.Map(document.getElementById('map-canvas'), {
          zoom: 18,
          center: myLatLng
        });
        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Be Group'
        });
      }
    </script> 
@endpush