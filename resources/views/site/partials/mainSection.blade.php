    <!--============ Start main ============-->
    <section class="main" style="background:url({{  URL::asset('images/advertises/'.advertise('mainBG_image')) }}) no-repeat center center fixed;background-size: cover; height: 60vh; position: relative">
        <div class="overlay"><!--Start overlay-->
            <div class="container-fluid"><!--Start container-->
                
                <div class="heading text-center">
                    <h1><span>Find</span> {{ mainData('headingText') }}</h1>
                </div>
                
                
                <div class="row text-center"><!--Start row-->

                    
                    <form action="{{ route('search-result') }}" method="GET">
                        <input type="search" name="address" id="address" placeholder="Search by name, location also phone..." pattern=".{3,}"   required title="write 3 characters minimum" autofocus >
                        <input type="submit" value="&#xf002" name="send">
                        <label for="near" class="text-left">
                            <input id="near" name="near" class="cheked_input" type="checkbox">
                            {{ mainData('searchHint') }}
                        </label>
                    </form>
                    
                    <div class="down hidden-xs">
                        <img src="{{ asset('img/down_arrow.png') }}" alt="down_arrow">
                    </div>
                    
                    <div class="hidden_socials hidden-lg hidden-md hidden-sm">
                        <ul class="list-unstyled list-inline">
                            <li>
                                <a href="{{ mainData('facebook') }}">
                                    <i class="fa fa-facebook fa-fw"></i>
                                </a>    
                            </li>
                            <li>
                                <a href="{{ mainData('twitter') }}">
                                    <i class="fa fa-twitter fa-fw"></i>
                                </a>    
                            </li>
                            <li>
                                <a href="{{ mainData('googlePlus') }}">
                                    <i class="fa fa-google-plus fa-fw"></i>
                                </a>    
                            </li>
                            <li>
                                <a href="{{ mainData('linkedin') }}">
                                    <i class="fa fa-linkedin fa-fw"></i>
                                </a>    
                            </li>
                        </ul>
                    </div>
                </div><!--End row-->
            </div><!--End Container-->
        </div><!--End overlay-->
        
        <input name="lat" id="lat" type="hidden" value="0">
        <input name="long" id="long" type="hidden" value="0">
        <input id="latlng" type="hidden" value="0">
        
    <div id="map" ></div>
    </section>
    <!--============ End main ============-->


@push('extra-js')

    <script>

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4liock3SmHsKj0NjmbB30yaH5J0rX6Vk&callback=initMap" async defer></script>
@endpush