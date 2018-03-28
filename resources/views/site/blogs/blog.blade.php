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
                    <div class="blog_info">
                        <img src="{{ asset('images/blogs/'.$titleBlog->blog_image) }}" alt="blog image">
                        <h2> {{ str_replace('-',' ',$titleBlog->title) }} </h2>
                        <hr>
                        <p>  {!! $titleBlog->body !!} </p>
                        <a href="{{ route('allBlogs') }}"><i class="fa fa-angle-double-left"></i>Back</a>
                    </div>
                </div>
                        
            </div>
        </div>
    </section>

</div>

@endsection