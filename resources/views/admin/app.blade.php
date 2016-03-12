<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="{{ asset('/vendor/ninecells/assets-twbs3/bootstrap-3.3.6-dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/vendor/ninecells/assets-admin-lte/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/vendor/ninecells/assets-admin-lte/css/skins/skin-blue.min.css') }}" rel="stylesheet" type="text/css" />
        @yield('head')
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
    <div class="wrapper">
        <!-- Main Header -->
        @include('ncells::admin.main-header')
        <!-- Left side column. contains the logo and sidebar -->
        @include('ncells::admin.main-sidebar')
        <!-- Content Wrapper. Contains page content -->
        @include('ncells::admin.content-wrapper')
        <!-- Main Footer -->
        @include('ncells::admin.main-footer')
    </div>
    <script src="{{ asset ('/vendor/ninecells/assets-admin-lte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset ('/vendor/ninecells/assets-twbs3/bootstrap-3.3.6-dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset ('/vendor/ninecells/assets-admin-lte/js/app.min.js') }}" type="text/javascript"></script>
    @yield('script')
    </body>
</html>
