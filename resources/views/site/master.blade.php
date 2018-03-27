<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        {!! mainData('headTags') !!}
        
        <link rel="icon" href="img/" type="image/png">
        <!--============== Raleway Google Fonts ==============-->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <!--============== fontAweasome CSS ==============-->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!--============== bootstrap CSS ==============-->
        <!-- bootstrap-rtl.min.css -->
        
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/arabic.css') }}">
        <!--============== myStyle CSS ==============-->
        <link rel="stylesheet" href="{{ asset('css/main-style.css') }}">
        <!--============== myStyle CSS ==============-->
        <link rel="stylesheet" href="{{ asset('css/color.css') }}">
        <!--============ jQuery liberary ============-->
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>


        @yield('extra-style')
        <!-- <link rel="stylesheet" href="css/bootstrap-rtl.min.css">-->
    </head>
    <body>      
            <!--============ Strat nav ============-->
            @include('site/partials.nav')
            <!--============ End nav ============-->

           @yield('content')

            <!--============ Start footer ============-->
            @include('site/partials.footer')
            <!--============ End footer ============-->

        @stack('extra-js')
        
        <!--============ bootstrap JS ============-->
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <!--============ custom JS ============-->
        <script src="{{ asset('js/main-custom.js') }}"></script>
       
    </body>
</html>