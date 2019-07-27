<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="utf-8" />
    <link type="text/css" rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link type="text/css" rel="icon" type="image/png" href="{{asset('assets/img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>PRESTA - DAGE - MEFPA</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
    <!--     Fonts and icons     -->
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
    <!-- CSS Files -->
    <link type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/light-bootstrap-dashboard.css?v=2.0.0 ')}}" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link type="text/css" href="{{asset('assets/css/demo.css')}}" rel="stylesheet"/>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="{{asset('assets/img/sidebar-5.jpg')}}">

           {{-- sidebar-wrapper à inclure ici --}}
 @include ('sidebarwrapper')
        </div>
        <div class="main-panel">
            <!-- Navbar -->
 @include ('navbar')
            <!-- End Navbar -->
           {{-- content à inserer --}}
           @include ('content')
          {{-- footer --}}
        </div>
    </div>

</body>
{{-- script à inserer --}}
@include('scripts')
</html>
