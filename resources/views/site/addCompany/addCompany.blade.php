@extends('site.master')

@section('content')
<div class="wrap_new_company"><!--Start wrap_new_company-->
	<!--============ Start main ============-->
    @include('site/partials.mainSection')
    <!--============ End main ============-->
	<!-- ======== Start hidden advertise Div ====-->
	<div class="advert" style="max-width: 100%"></div>	<!--this div to add advertise in future-->
	<!-- ======== End hidden advertise Div ====-->
	
	<!--============ Start new_company ============-->
    <section class="new_company">
        <div class="container">
            <div class="heading text-center">
                <h2>
                    {{ $addCompanyData['headingText'] }}
                    <hr>
                </h2>
                <p>
                     {{ $addCompanyData['description'] }}
                </p>
            </div>
            <div class="row">

                <div class="col-md-6 col-xs-12">
                    <div class="new_company_info">
                        <h3> {{ $addCompanyData['leftHeadingText'] }}</h3>
                        <p>
                            {{ $addCompanyData['leftDescription'] }}
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12">
                    <div class="new_company_contact">
<!--                         <ul class="direct_contact list-unstyled">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook fa-fw"></i>
                                    Register by your facebook account
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter fa-fw"></i>
                                    Register by your twitter account
                                </a>
                            </li>
                        </ul> -->
                        <form method="POSt" action="{{ route('addCompany.ownerDetails') }}" >
                            {{ csrf_field() }}
                            <input type="text" name="name" placeholder="Name..." required>
                            <input type="text" name="company_name" placeholder="Company name..." required>
                            <input type="tel" name="phone" placeholder="phone ..."  pattern="[0-9]{11}" minlength="8" maxlength="11" required>
                            <input type="email" name="email" placeholder="E-mail...">
                            <textarea name="message" placeholder="Message" required></textarea>
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--============ End new_company ============-->
    <!-- ======== Start hidden advertise Div ====-->
	<div class="advert" style="max-width: 100%"></div>	<!--this div to add advertise in future-->
	<!-- ======== End hidden advertise Div ====-->

	<!--============ Start up ============-->
    <i class="up fa fa-chevron-up fa-fw hidden-xs"></i>
    <!--============ End up ============-->
</div><!--End wrap_new_company-->
@endsection