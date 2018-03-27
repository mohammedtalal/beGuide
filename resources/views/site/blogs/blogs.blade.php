@extends('site.master')

@section('content')
<div class="wrap_contact_us"><!--Start wrap_contact_us-->
     <!--============ Start main ============-->
    @include('site/partials.mainSection')
    <!--============ End main ============-->

	<!--============ Start contact-core ============-->
    <section class="contact_core">
        <div class="container"><!--Start container-->
            <div class="row"><!--Start row-->
            	<div class="col-md-12 col-xs-12">
            		@foreach($blogs as $blog)
                    <div class="blog_info">
                        <h3>
                            <a href="{{ url('/blog/'.$blog->title) }}"> {{ str_replace('-',' ',$blog->title) }} </a>
                            
                        </h3>
                        <a href="{{ url('/blog/'.$blog->title) }}">
                            <small class="pull-right"><b>{{ date_format($blog->created_at, 'g:ia \o\n jS F Y') }}</b></small>
                        </a>
                        <hr>
                        <p>
                            {{ str_limit($blog->body,200) }}
                            @if(strlen($blog->body) > 200)
                                <a href="{{ url('/blog/'.$blog->title) }}" class="show_more"> Read more
                                    <i class="fa fa-chevron-right fa-fw"></i>
                                </a>
                            @endif
                        </p>
                        
                    </div>
                    @endforeach
                </div>
                        
            </div>
        </div>
    </section>

</div>

@endsection