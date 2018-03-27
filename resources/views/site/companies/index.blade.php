@extends('site.master')

@section('content')
<div class="wrap_search_result"><!--Start wrap_contact_us-->
     <!--============ Start main ============-->
    @include('site/partials.mainSection')
    <!--============ End main ============-->
    <div class="advert" style="max-width: 100%"></div>  <!--this div to add advertise in future-->
    
     <!--============ Start search_result ============-->
    <section class="search_result">
        <div class="container-fluid"><!--Start container-->
            <div class="row"><!--Start row-->
                
                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="fixed_div" >
                        <img src="{{ asset('images/advertises/'.advertise('left_adv')) }}" alt="advertise('left_alt')">
                    </div>
                </div>
    
                <div class="col-md-6 col-xs-12">
                    
                    <!-- Branches Loop -->
                     @foreach($companies as $company)
                    <div class="single_search">
                        <div class="row"><!--Start branched row-->
                            
                            <div class="col-md-3 hidden-sm hidden-xs"><!--Start branched col-->
                                <ul class="img_review list-unstyled text-center">
                                    <li><img src="{{ asset('images/companies/'.$company->main_image) }}" alt="company logo"></li>
                                    <!-- <li><span class="rev_num">1000</span><span class="rev">Reviews</span></li> -->
                                </ul>
                            </div><!--End branched col-->
                                
                            <div class="col-md-9 col-xs-12"><!--Start branched col-->
                                <ul class="single_search_contact list-unstyled">
                                    <li>
                                        <span class="tag">Name:</span>
                                        <span class="taginfo">{{ str_ireplace('-',' ',$company->name) }}</span>
                                    </li>
                                    <li>
                                        <span class="tag">Specialization:</span>
                                        <span class="taginfo spe_tags">{{ $company->categories->name }}</span>
                                    </li>
                                    <li>
                                        <span class="tag description">Description:</span>
                                        <span class="taginfo taginfo_description">
                                            {{ str_limit($company->description, 200) }}
                                            <a href="{{ route('company.show',$company->id) }}" class="show_more">
                                                Show more
                                                <i class="fa fa-chevron-right fa-fw"></i>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="keywords">
                                        <span class="tag">Key words:</span>
                                        @foreach($company->tags as $tag)
                                            <span class="taginfo key_word">{{ $tag->name }}</span>
                                        @endforeach
                                    </li>
                                    <li>
                                        @if(! empty($company->phone))
                                        <a href="{{ route('profile.index',$company->name) }}" class="spe_a_socilas_result">
                                            <i class="fa fa-phone fa-fw"></i>
                                        </a>
                                        @endif
                                        @if(! empty($company->website))
                                            <a href="{{ route('profile.index',$company->name) }}" class="spe_a_socilas_result" target="_blank">
                                                <i class="fa fa-globe fa-fw"></i>
                                            </a>
                                        @endif
                                        @if(! empty($company->long && $company->long))
                                        <a href="{{ route('profile.map',$company->id) }}" class="spe_a_socilas_result" target="_blank">
                                            <i class="fa fa-map-marker fa-fw"></i>
                                        </a>
                                        @endif
                                         @if(! empty($company->facebook))
                                            <a href="{{ route('profile.index',$company->name) }}" class="spe_a_socilas_result" target="_blank">
                                                <i class="fa fa-facebook fa-fw"></i>
                                            </a>
                                        @endif
                                        @if(! empty($company->twitter))
                                            <a href="{{ route('profile.index',$company->name) }}" class="spe_a_socilas_result" target="_blank">
                                                <i class="fa fa-twitter fa-fw"></i>
                                            </a>
                                        @endif
                                        @if(! empty($company->youtube))
                                            <a href="{{ route('profile.index',$company->name) }}" class="spe_a_socilas_result" target="_blank">
                                                <i class="fa fa-youtube fa-fw"></i>
                                            </a>
                                        @endif
                                       @if(! empty($company->instgram))
                                            <a href="{{ route('profile.index',$company->name) }}" class="spe_a_socilas_result" target="_blank">
                                                <i class="fa fa-instagram fa-fw"></i>
                                            </a>
                                        @endif
                                        @if(! empty($company->linkedin))
                                            <a href="{{ route('profile.index',$company->name) }}" class="spe_a_socilas_result" target="_blank">
                                                <i class="fa fa-linkedin fa-fw"></i>
                                            </a>
                                        @endif
                                        @if(! empty($company->googleplus))
                                            <a href="{{ route('profile.index',$company->name) }}" class="spe_a_socilas_result" target="_blank">
                                                <i class="fa fa-google-plus fa-fw"></i>
                                            </a>
                                        @endif
                                    </li>
                                </ul>
                            </div><!--End branched col-->
                        </div><!--End branched row-->
                    </div>
                    @endforeach
                    {{ $companies->links() }}
                    
                    <div class="advert" style="max-width: 100%"></div>

                    <!--============ Start our-blog ============-->
                    <section class="our-team" >
                        <div class="overlay"><!--Start overlay-->
                            <div class="container"><!--Start Container-->
                                <div class="row"><!--Start row-->

                                    <h3>Read more blogs</h3>

                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            @foreach($blogs as $blog)
                                                <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                            @endforeach
                                        </ol>
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            @foreach($blogs as $blog)
                                            <div class="item {{ $loop->first ? 'active' : '' }}" >
                                                <div class="item-info">
                                                    <p> {{ str_limit($blog->body,600) }} </p>
                                                    <div class="item-link">
                                                        <a href="{{ url('/blog/'.$blog->title) }}">Read this article</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div><!--End row-->
                            </div><!--End Container-->
                    </section>
                    <!--============ End our-blog ============-->
                    <div class="advert" style="max-width: 100%"></div>
                </div>

                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="fixed_div">
                        <img src="{{ asset('images/advertises/'.advertise('right_adv')) }}" alt="advertise('right_alt')">
                    </div>
                </div>

            </div><!--End row-->
             
            <nav aria-label="Page navigation" class=" text-center">
          
            </nav>
            
        </div><!--End Container-->
    </section>
    <!--============ End search_result ============-->
    <!-- ======== Start hidden advertise Div ====-->
    <div class="advert" style="max-width: 100%"></div>  <!--this div to add advertise in future-->
    <!-- ======== End hidden advertise Div ====-->

    <!--============ Start up ============-->
    <i class="up fa fa-chevron-up fa-fw hidden-xs"></i>
    <!--============ End up ============-->
</div>

@endsection