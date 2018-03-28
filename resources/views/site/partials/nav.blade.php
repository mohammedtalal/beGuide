<!--============ Strat nav ============-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="active" href="{{ route('landingPage.index') }}">{{ mainData('homeLink') }}</a><span class="sr-only">(current)</span></li>
        <li><a href="{{ route('about.index') }}"> {{mainData('aboutUs')}} </a></li>
        <li><a href="{{ route('contact.index') }}">{{mainData('contactUs')}}</a></li>
        <li><a class="adding_company" href="{{ route('addCompany.index') }}">{{mainData('addCompany')}}</a></li> 
        <li><a href="{{ route('allBlogs') }}">{{mainData('blog')}}</a></li>

        <li><a type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal">{{mainData('login')}}</a></li>
            <li class="lang">
              <a href="#"> ع </a>
            </li>
      </ul>
        
        <div class="socials hidden-xs">
            <ul class="list-unstyled list-inline">
                <li>
                    <a href="{{mainData('facebook')}}" target="_blank">
                        <i class="fa fa-facebook fa-fw"></i>
                    </a>    
                </li>
                <li>
                    <a href="{{mainData('twitter')}}">
                        <i class="fa fa-twitter fa-fw"></i>
                    </a>    
                </li>
                <li>
                    <a href="{{mainData('googlePlus')}}">
                        <i class="fa fa-google-plus fa-fw"></i>
                    </a>    
                </li>
                <li>
                    <a href="{{mainData('linkedin')}}">
                        <i class="fa fa-linkedin fa-fw"></i>
                    </a>    
                </li>
            </ul>
        </div>    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--============ End nav ============-->

<!--============ Start popUp for new user ============-->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Log In</h4>
            </div>
            <div class="modal-body">
                <form action="" method="">
                    <input type="email" placeholder="Your E-mail....">
                    <input type="password" placeholder="Your Password....">
                    <input type="submit" value="Log In" name="logIn">
                </form>
                <a href="#" class="forgot">Forgot password?</a>
                <hr>
                <ul class="modal_matching_accounts list-unstyled list-inline">
                    <li>
                        <a href="#" class="matching_account">
                            <i class="fa fa-facebook fa-fw"></i>
                            Login your by facebook
                        </a>        
                    </li>
                    <li>
                        <a href="#" class="matching_google_plus">
                            <i class="fa fa-google-plus fa-fw"></i>
                            Login your by Google plus
                        </a>   
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!--============ End popUp for new user ============-->