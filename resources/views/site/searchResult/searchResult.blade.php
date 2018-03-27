@extends('site.master')

@section('content')
 <div class="wrap_search_result"><!--Start wrap_search_result-->
    
    <!--============ Start main ============-->
    @include('site/partials.mainSection')
    <!--============ End main ============-->

    <!-- ======== Start hidden advertise Div ====-->
    <div class="advert" style="max-width: 100%"></div>  <!--this div to add advertise in future-->
    <!-- ======== End hidden advertise Div ====-->

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
                    @if($allBranches)
                    @foreach($allBranches as $branch)
                    <div class="single_search">
                        <div class="row"><!--Start branched row-->
                            
                            <div class="col-sm-3 col-xs-12"><!--Start branched col-->
                                <ul class="img_review list-unstyled text-center">
                                    <li><img src="{{ asset('images/companies/'.$branch->companies->main_image) }}" alt="company logo"></li>
                                    <!-- <li><span class="rev_num">1000</span><span class="rev">Reviews</span></li> -->
                                </ul>
                            </div><!--End branched col-->
                                
                            <div class="col-sm-9 col-xs-12"><!--Start branched col-->
                                <ul class="single_search_contact list-unstyled">
                                    <li>
                                        <span class="tag">Name:</span>
                                        <span class="taginfo">{{ str_ireplace('-',' ',$branch->name) }}</span>
                                    </li>
                                    <li>
                                        <span class="tag">Address:</span>
                                        <span class="taginfo">{{ $branch->address }}</span>
                                    </li>
                                    <li>
                                        <span class="tag">Specialization:</span>
                                        <span class="taginfo spe_tags">{{ $branch->companies->categories->name }}</span>
                                    </li>
                                    <li>
                                        <span class="tag description">Description:</span>
                                        <span class="taginfo taginfo_description">
                                            {{ str_limit($branch->companies->description, 200) }}
                                            <a href="{{ route('profile.index',$branch->name) }}" class="show_more">
                                                Show more
                                                <i class="fa fa-chevron-right fa-fw"></i>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="keywords">
                                        <span class="tag">Key words:</span>
                                        @foreach($branch->companies->tags as $tag)
                                            <span class="taginfo key_word">{{ $tag->name }}</span>
                                        @endforeach
                                    </li>
                                    <li>
                                        @if(! empty($branch->phone))
                                        <a href="{{ route('profile.index',$branch->name) }}" class="spe_a_socilas_result">
                                            <i class="fa fa-phone fa-fw"></i>
                                        </a>
                                        @endif
                                        @if(! empty($branch->website))
                                            <a href="{{ route('profile.index',$branch->name) }}" class="spe_a_socilas_result" target="_blank">
                                                <i class="fa fa-globe fa-fw"></i>
                                            </a>
                                        @endif
                                        @if(! empty($branch->long && $branch->long))
                                        <a href="{{ route('profile.map',$branch->id) }}" class="spe_a_socilas_result" target="_blank">
                                            <i class="fa fa-map-marker fa-fw"></i>
                                        </a>
                                        @endif
                                         @if(! empty($branch->companies->facebook))
                                            <a href="{{ route('profile.index',$branch->name) }}" class="spe_a_socilas_result" target="_blank">
                                                <i class="fa fa-facebook fa-fw"></i>
                                            </a>
                                        @endif
                                        @if(! empty($branch->companies->twitter))
                                            <a href="{{ route('profile.index',$branch->name) }}" class="spe_a_socilas_result" target="_blank">
                                                <i class="fa fa-twitter fa-fw"></i>
                                            </a>
                                        @endif
                                        @if(! empty($branch->companies->youtube))
                                            <a href="{{ route('profile.index',$branch->name) }}" class="spe_a_socilas_result" target="_blank">
                                                <i class="fa fa-youtube fa-fw"></i>
                                            </a>
                                        @endif
                                       @if(! empty($branch->companies->instgram))
                                            <a href="{{ route('profile.index',$branch->name) }}" class="spe_a_socilas_result" target="_blank">
                                                <i class="fa fa-instagram fa-fw"></i>
                                            </a>
                                        @endif
                                        @if(! empty($branch->companies->linkedin))
                                            <a href="{{ route('profile.index',$branch->name) }}" class="spe_a_socilas_result" target="_blank">
                                                <i class="fa fa-linkedin fa-fw"></i>
                                            </a>
                                        @endif
                                        @if(! empty($branch->companies->googleplus))
                                            <a href="{{ route('profile.index',$branch->name) }}" class="spe_a_socilas_result" target="_blank">
                                                <i class="fa fa-google-plus fa-fw"></i>
                                            </a>
                                        @endif
                                        
                                    </li>
                                    
                                </ul>
                            </div><!--End branched col-->
                        </div><!--End branched row-->
                    </div>
                    @endforeach
                    @endif
                    <div class="single_search">
                        <div class="row"><!--Start branched row-->
                            <div class="col-xs-12 ">
                                <h3 class="text-center">no companies similar</h3>
                            </div>
                        </div>
                    </div>

                    

                    <div class="advert" style="max-width: 100%"></div>

                    <!--============ Start our-blog ============-->
                    <section class="our-team">
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
</div><!--End wrap_search_result-->
@endsection