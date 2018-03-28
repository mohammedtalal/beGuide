<footer>
    <div class="container"><!--start Container-->
        <div class="row"><!--start row-->

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer_about">
                    <img src="{{ asset('images/logo/'.logo()) }}" alt="logo">
                    <p>
                        {{ mainData('footerHint') }}
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="main_links">
                    <ul class="list-unstyled" style="float:right" >
                        <li>
                            <a href="{{ route('landingPage.index') }}">{{ mainData('homeLink') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('about.index') }}">{{ mainData('aboutUs') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('contact.index') }}">{{ mainData('contactUs') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ mainData('login') }}</a>
                        </li>
                    </ul>
                    <ul class="list-unstyled" >
                        <li>
                            <a href="{{ route('addCompany.index') }}">{{ mainData('addCompany') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('allBlogs') }}">{{ mainData('blog') }}</a>
                        </li>
                    </ul>
                </div>
            </div>



            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer_socials">
                    <h3 class="text-center">Contact Us</h3>
                    <ul class="list-unstyled list-inline text-center">
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
            </div>
        </div><!--End row-->
    </div><!--End Container-->
</footer>