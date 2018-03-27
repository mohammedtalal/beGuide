<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{URL::asset('LTE/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="{{route('dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>

          </a>
        </li>
        <!-- Start Categories section -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('categories.index')}}"><i class="fa fa-folder"></i> All-Categories</a></li>
            <li><a href="{{route('categories.create')}}"><i class="fa fa-hashtag"></i> Create Category</a></li>
          </ul>
        </li>
        <!-- End Categories Section -->
        <!-- Start Sub-Categories section -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>Sub-Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('categories.subCategories') }}"><i class="fa fa-folder"></i> All Sub-Categories</a></li>
            <li><a href="{{ route('categories.create') }}"><i class="fa fa-hashtag"></i> Create Sub-Category</a></li>
          </ul>
        </li>
        <!-- End Sub-Categories Section -->
        <!-- Start Companies section -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>Companies</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('companies.index') }}"><i class="fa fa-building"></i> All Companies</a></li>
            <li><a href="{{ route('companies.create') }}"><i class="fa fa-hashtag"></i> Create Company</a></li>
          </ul>
        </li>
        <!-- End Companies Section -->
        
        <!-- Start Branches section -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>Branches</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('branches.index') }}"><i class="fa fa-building"></i> All Branches</a></li>
            <li><a href="{{ route('branches.create') }}"><i class="fa fa-hashtag"></i> Create Branch</a></li>
          </ul>
        </li>
        <!-- End Branches Section -->

        <!-- Start Branches section -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>Blogs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('blog.index') }}"><i class="fa fa-building"></i> All Blogs</a></li>
            <li><a href="{{ route('blog.create') }}"><i class="fa fa-hashtag"></i> Create New Blog</a></li>
          </ul>
        </li>
        <!-- End Branches Section -->

        <li>
          <a href="#">
            <span>======</span>
            <i class="fa fa-dashboard"></i> <span>Site Pages Data</span>
            <span>======</span>

          </a>
        </li>

        <!-- Start LandingPage Data section -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>LP/Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('landingPage.create') }}"><i class="fa fa-building"></i> Main Data</a></li>
          </ul>
        </li>
        <!-- End LandingPage Data Section -->

        <!-- Start About Us Data section -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>About-Us</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.about.create') }}"><i class="fa fa-building"></i> About-us Data</a></li>
          </ul>
        </li>
        <!-- End About Us Data Section -->
        <!-- Start Our Team Data section -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>Our Team</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="{{ route('team.index') }}"><i class="fa fa-building"></i> All Teams </a></li>
          </ul>
        </li>
        <!-- End Our Team Data Section -->
        <!-- Start Contact Us Data section -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>Contact Us</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.contact.index') }}"><i class="fa fa-building"></i> Contact-us Data</a></li>
          </ul>
        </li>
        <!-- End Contact Us Data Section -->
        <!-- Start Site add company section -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>Add company Page</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.addCompany.create') }}"><i class="fa fa-building"></i> Add Company</a></li>
          </ul>
        </li>
        <!-- End Site add company Section -->
        <!-- Start Companies Owner Requests section -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i>Companies Requests @if(numberOfPendingRequests() > 0) <span class="label label-info" style="margin-left:16px">{{ numberOfPendingRequests() }}</span> @endif
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.pendingCompanies') }}"><i class="fa fa-building"></i>Pending Companies</a></li>
            <li><a href="{{ route('admin.approvedCompanies') }}"><i class="fa fa-building"></i>Approved Companies</a></li>
          </ul>
        </li>
        <!-- End Companies Owner Requests Section -->

        <!-- Start Advertises section -->
       <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>Advertises</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('advertise.index') }}"><i class="fa fa-building"></i> All Advertises</a></li>
          </ul>
        </li>
        <!-- End Advertises Section -->

        <!-- Start Tags section -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>Tags</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('tags.index') }}"><i class="fa fa-building"></i> All Tags</a></li>
          </ul>
        </li>
        <!-- End Tags Section -->
        <!-- Start Subscribes section -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i> <span>Subscribes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('subscribe.index') }}"><i class="fa fa-building"></i> All Subscribes</a></li>
          </ul>
        </li>
        <!-- End Subscribes Section -->

        <li class="">
          <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> <span>Sign-out</span></a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>