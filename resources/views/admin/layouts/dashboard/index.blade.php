@extends('admin.index')


@section('name')
    Dashboard
@endsection

@section('extra-style')
    
@endsection

@section('extra-script')
    
@endsection

@section('contents')
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 1.0</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          
            <div class="info-box">
             <span class="info-box-icon bg-aqua"><i class="fa fa-folder"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><a href="{{ route('categories.index') }}">All Categories</a></span>
                <span class="info-box-number">{{ dashboardOverViewNumbers('categories') }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-building"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><a href="{{ route('categories.subCategories') }}">Sub-Categories</a></span>
              <span class="info-box-number">{{ dashboardOverViewNumbers('subCategories') }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-flag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><a href="{{ route('companies.index') }}">Companies</a></span>
              <span class="info-box-number">{{ dashboardOverViewNumbers('companies') }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-building"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><a href="{{ route('branches.index') }}">Branches</a></span>
              <span class="info-box-number">{{ dashboardOverViewNumbers('branches') }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-envelope"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><a href="{{ route('admin.pendingCompanies') }}">Pending Companies</a></span>
              <span class="info-box-number">{{ dashboardOverViewNumbers('pendingCompanies') }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-open"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><a href="{{ route('admin.approvedCompanies') }}">Approved Companies</a></span>
              <span class="info-box-number">{{ dashboardOverViewNumbers('approvedCompanies') }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-open"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><a href="{{ route('subscribe.index') }}">Subscribes</a></span>
              <span class="info-box-number">{{ dashboardOverViewNumbers('subscribes') }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->

@endsection    