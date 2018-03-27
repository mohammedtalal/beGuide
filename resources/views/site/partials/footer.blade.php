<footer>
    <div class="container-fluid"><!--start Container-->
        <div class="row"><!--start row-->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer_about">
                    <img src="{{ asset('images/logo/'.logo()) }}" alt="logo">
                    <p>
                        {{ mainData('footerHint') }}
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="main_links">
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('landingPage.index') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about.index') }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('contact.index') }}">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{ route('addCompany.index') }}">Add Company</a>
                        </li>
                        <li>
                            <a href="#">Log In</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="complain text-center">
                    <div class="heading">
                        <p>Your Complain</p>
                    </div>
                    <form action="" method="post">
                        <input class="btn-lg" type="text" placeholder="complain" name="complain">
                        <input class="btn-lg" type="submit" name="send" value="&#xf1d8">
                    </form>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
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