@extends('site.master')

@section('extra-style')
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
@endsection

@section('content')

<div class="wrap_profile"><!--Start wrap_profile-->

    <!--============ Start main ============-->
    @include('site/partials.mainSection')
    <!--============ End main ============-->
    
    <!--============ Start profile ============-->
    <section class="profile">
        <div class="container-fluid"><!--Start container-->
            <div class="row"><!--Start row-->

                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="fixed_div">
                        <img src="{{ asset('images/advertises/'.advertise('left_adv')) }}" alt="advertise('left_alt')">
                    </div>
                </div><!--using to adverts-->

                <div class="col-md-6 col-xs-12">
                    <div class="portofolio"><!--Start Portofolio-->
                        <div class="row parent_portofolio_img">
                            <div class="portofolio_img">
                                <div class="col-sm-3 col-xs-12">
                                    <img src="{{ asset('images/companies/'.$branch->companies->main_image) }}" alt="main image">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <ul class="portofolio_info list-unstyled">
                                        <li>
                                            <span class="tag">Name:</span>
                                            <span class="taginfo">{{ str_replace('-',' ',$branch->name) }}</span>
                                        </li>   
                                        <li>
                                            <span class="tag">Address:</span>
                                            <span class="taginfo">
                                               {{ $branch->address }}
                                            </span>
                                        </li>
                                        <li>
                                            <span class="tag">Specialization:</span>
                                            <span class="taginfo">
                                                {{ $branch->companies->categories->name }}
                                            </span>
                                        </li>
                                        <li class="pro_socials">
                                            <a href="{{ $branch->companies->facebook }}" target="_blank">
                                                <i class="fa fa-facebook fa-fw"></i>
                                            </a>
                                            <a href="{{ $branch->companies->twitter }}" target="_blank">
                                                <i class="fa fa-twitter fa-fw"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-linkedin fa-fw"></i>
                                            </a>
                                            <a href="{{ $branch->companies->youtube }}" target="_blank">
                                                <i class="fa fa-youtube fa-fw"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-google-plus fa-fw"></i>
                                            </a>
                                            <a href="{{ $branch->companies->instgram }}" target="_blank">
                                                <i class="fa fa-instagram fa-fw"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="hidden_phone">
                                                <ul class="list-unstyled">
                                                    @foreach(explode(',' , $branch->phone) as $phone)
                                                    <li>
                                                        <i class="fa fa-phone fa-fw"></i>
                                                        <span>{{ $phone }}</span>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <ul class="list-unstyled list-inline location">
                                        <li>
                                            <a class="special_phone_profile">
                                                <i class="fa fa-phone fa-fw"></i>
                                            </a>    
                                        </li>
                                        <li>
                                            <a class="spe_message">
                                                <i class="fa fa-envelope fa-fw"></i>
                                            </a>    
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-globe fa-fw"></i>
                                            </a>    
                                        </li>
                                        <li>
                                            <a href="{{ route('profile.map',$branch->id) }}" >
                                                <i class="fa fa-map-signs fa-fw"></i>
                                            </a>    
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--End first branched row-->
                        
                        <div class="row parent_description"><!--Start branched row-->

                            <div class="col-sm-12 col-xs-12"><!--Start branched col-->

                                <div class="description"><!--Start description-->
                                    <h4>Description: </h4>
                                    <p>
                                       {{ $branch->companies->description }}
                                    </p>
                                </div><!--End description-->

                                <div class="services"><!--Start services-->
                                    <h4>Services: </h4>
                                    <ul class="list-unstyled list-inline">
                                        @foreach($branch->companies->tags as $tag)
                                            <li>{{ $tag->name }}</li>
                                        @endforeach
                                        
                                    </ul>
                                </div><!--End services-->
                                
                                <div class="services"><!--Start services-->
                                    <h4>Branches: </h4>
                                    <ul class="list-unstyled list-inline">
                                        @foreach($anotherBranches as $anotherBranch)
                                            @if($anotherBranch->id != $branch->id)
                                                <li>
                                                    <a href="{{ url('LP/'.$anotherBranch->name) }}">
                                                        {{ $anotherBranch->address }}
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div><!--End services-->
                                
                            </div><!--End branched col-->
                            
                        </div><!--End second branched row-->
                        
                        <div class="row parent_profile_form">
                            <div class="col-sm-12 col-xs-12"><!--Start branched col-->
                                <div class="profile_form">
                                    <h4>feel free to fill the fields</h4>
                                    <form action="{{ route('profile.sendEmailToCompany',$branch->id) }}" method="posT">    
                                        {{ csrf_field() }}
                                        <input type="text" name="name" placeholder="Name.....">
                                        <input type="email" name="email" placeholder="E-mail.....">
                                        <textarea  name="message" placeholder="message....."></textarea>
                                        <input type="submit" value="Send">
                                    </form>
                                </div> 
                            </div><!--End branched col-->
                        </div>    

  
                        <div class="row"><!--Start third branched row-->
                            <div class="col-xs-12">           
                                <!--Start another ex carousel-example-generic-->
                                <div id="carousel3d">
                                    <div class="photo-thumbs">
                                        <carousel-3d :perspective="0" :space="200" :display="5" :controls-visible="true" :controls-prev-html="'❬'" :controls-next-html="'❭'" :controls-width="30" :controls-height="60" :clickable="true" :autoplay="true" :autoplay-timeout="5000">
                                            @foreach($branch->companies->images as $key => $image)
                                                <slide :index="{{$loop->index}}">
                                                    <img src="{{ asset('images/companies/gallery/'.$image->url) }}" alt="">
                                                </slide>
                                            @endforeach
                                        </carousel-3d>
                                    </div>    
                                </div>
                                <!--End another ex-->
                            </div>
                        </div><!--End third branched row-->

                        @if(! empty($branch->companies->video))
                            {!! convertYoutube($branch->companies->video) !!} 
                        @endif
                        
                    </div><!--End portofolio-->
                </div>     
                
                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="fixed_div">
                         <img src="{{ asset('images/advertises/'.advertise('right_adv')) }}" alt="advertise('right_alt')">
                    </div>    
                </div><!--using to adverts-->
                
            </div><!--End row-->
        </div><!--End container-->
    </section>
    <!--============ End profile ============-->

    <!--============ Start up ============-->
    <i class="up fa fa-chevron-up fa-fw hidden-xs"></i>
    <!--============ End up ============-->

</div><!--End wrap_profile-->

@endsection

@push('extra-js')
    <!--========== LightBox JS ==========-->
    <script src="{{ asset('js/gallery.js') }}"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script>
        <script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
        <script>
            new Vue({
              el: '#carousel3d',
                  data: {
                    slides: 7
                  },
                  components: {
                    'carousel-3d': Carousel3d.Carousel3d,
                    'slide': Carousel3d.Slide
                  }
            })
        </script>
@endpush


