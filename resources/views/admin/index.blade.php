<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | @yield('name')</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">  <!-- VueJs csrf_token -->

        {{ Html::style('css/app.css')}}
  
        <!--============== fontAweasome CSS ==============-->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!--============== bootstrap CSS ==============-->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!--============== admin custom style ==============-->
        <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">


       <!--  {{ Html::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}} -->

        @yield('extra-style')
        <link rel="stylesheet" href="{{ asset('LTE/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('LTE/css/skins/_all-skins.min.css') }}">

  @show

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  @include('admin/partials.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin/partials.sidebar')
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        @include('partials.flashMessage')
        <!-- @include('partials.errors') -->

        @yield('contents')

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

</div>


    <script type="text/Javascript" src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <script type="text/Javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <!--============ admin custom JS ============-->
    <script type="text/Javascript" src="{{ asset('js/admin-custom.js') }}"></script> 
    <script type="text/Javascript" src="{{ asset('LTE/js/app.min.js') }}"></script>

  @show  
  @stack('extra-script')

</body>
</html>
