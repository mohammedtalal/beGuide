@extends('site.master')

@section('content')
 <div class="wrap_home"><!--Start wrap home-->

    <!--============ Start main ============-->
    @include('site/partials.mainSection')
    <!--============ End main ============-->
    <!--============ Start best_clients ============-->
    <section class="best_clients">
        <div class="container-fluid"><!--Start container-->
            <div class="heading text-center">
                <h2>
                    {{ mainData('bestClientText') }}
                    <hr>
                </h2>
                <p> {{ mainData('bestClientBio') }}</p>
            </div>
            <div class="row"><!--Start row-->
                @foreach($branches as $branch)
                <div class="col-md-3 col-xs-12">
                    
                    <div class="client">
                        <img class="img-responsive center-block" src="{{ asset('images/companies/'.$branch->companies->main_image) }}" alt="compay_avatar">
                        <div class="client_body">
                            <h3>{{ str_replace('-',' ',$branch->name) }}</h3>
                            <p>
                               {{ str_limit($branch->companies->description,100)}}
                            </p>
                            <a href="{{ route('profile.index',$branch->name) }}">
                                More details
                                <i class="fa fa-chevron-right fa-fw"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!--End row-->
        </div><!--End container-->
    </section>
    <!--============ End best_clients ============-->

    <!--============ Start advert div ============-->
    <section class="advert">
        <div class="container-fluid"></div>
    </section>
    <!--============ End advert div ============-->

    <!--============ strat new_clients ============-->
    <section class="new_client">
        <div class="container-fluid"><!--Start Container-->
            <div class="heading text-center">
                <h2> {{ mainData('newClientText') }}</h2>
                <p>{{ mainData('newClientBio') }}</p>
            </div>
            <div class="row">
                @foreach($newClients as $branch)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single_card">
                        <img src="{{ asset('images/companies/'.$branch->companies->main_image) }}" alt="new_client_image">
                        <div class="new_client_body">
                            <h3>{{ $branch->name }}</h3>
                            <p style="line-height: 1.2">{{ str_limit($branch->companies->description,100) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div><!--End Container-->    
    </section>
    <!--============ End new_clients ============-->

    <!--============ Start subscripe ============-->
    <section class="subscripe">
        <div class="overlay"><!--Start overlay-->
            <div class="container text-center"><!--Start Container-->
                <img src="img/subscripe_img.png" alt="subscripe_img">
                <h2>{{ mainData('subscribeHeadingText') }}</h2>
                <form action="{{ route('subscribe.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="email" placeholder="E-mail..." name="email">
                        <button type="submit">
                            <i class="fa fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div><!--End Container-->
        </div><!--End overlay-->
    </section>
    <!--============ End subscripe ============-->
    
    <!--============ Start up ============-->
    <i class="up fa fa-chevron-up fa-fw hidden-xs"></i>
    <!--============ End up ============-->
    
</div>
@endsection