@extends('site.master')

@section('content')

<div class="wrap_about_us"><!--Start wrap_about_us-->
    <!--============ Start main ============-->
    @include('site/partials.mainSection')
    <!--============ End main ============-->

    <!--============ Start about_us ============-->
    <section class="about_us text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="about_info">
                    <h2>
                        {{ $aboutUsData['headingText'] }}
                        
                        <hr>
                    </h2>
                    <p>
                        {{ $aboutUsData['description'] }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--============ End about_us ============-->

    <!--============ Start our_team ============-->
    <section class="our_team">
        <div class="container"><!--Start Container-->
            <div class="heading text-center">
                <h2>
                    Our Team
                    <hr>
                </h2>
                <p>
                    The classic â€œLorem ipsum dolor sit ametâ€¦â€ passage is attributed to a remixing of the Roman philosopher Cicero's 45 BC text De Finibus Bonorum et Malorum (â€œOn the Extremes
                </p>
            </div>
            <div class="row"><!--Start row-->
                @foreach($teams as $team)
                    <div class="col-md-4 col-xs-12">
                        <div class="member">
                            <img src="{{ asset('images/teams/'.$team->image) }}" alt="Team member">

                            <div class="member_info text-center">
                                <h4>{{ $team->name }}</h4>
                                <h5>{{ $team->position }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div><!--End row-->
        </div><!--End Container-->
    </section>
    <!--============ End our_team ============-->
    
    <!--============ Start join ============-->
    <section class="join">
        <div class="container">
            <span class="join_text">{{ $aboutUsData['joinHint'] }}</span>
            <a href="{{ route('contact.index') }}">{{ $aboutUsData['joinButton'] }}</a>
        </div>
    </section>
    <!--============ End join ============-->
    <!--============ Start up ============-->
    <i class="up fa fa-chevron-up fa-fw hidden-xs"></i>
    <!--============ End up ============-->

</div><!--End wrap_about_us-->

@endsection
