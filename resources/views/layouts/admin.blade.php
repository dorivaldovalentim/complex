<!DOCTYPE html>
<html lang="pt_AO">

    <head>
        <title>Complex » Admin » @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        {{-- CSS Libs --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/css/animate.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/css/bootstrap-switch.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/css/checkbox3.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/css/jquery.dataTables.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/css/dataTables.bootstrap.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/css/select2.min.css') }}" />

        {{-- CSS App --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}" />

        {{-- Themes --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/flat-blue.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/flat-green.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/flat-yellow.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/flat-pink.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/flat-red.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/flat-orange.css') }}" />
    </head>

    <body class="flat-blue">

        <div class="app-container">
            <x-top-menu />

            @yield('content')

            <footer class="app-footer">
                <div class="wrapper">
                    <span class="pull-right">
                        2.1 
                        <a href="#">
                            <i class="fa fa-long-arrow-up"></i>
                        </a>
                    </span>
                    © 2015 Copyright.
                </div>
            </footer>

        </div>

        <!-- Javascript Libs -->
        <script type="text/javascript" src="{{ asset('admin/lib/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/lib/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/lib/js/Chart.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/lib/js/bootstrap-switch.min.js') }}"></script>
        
        <script type="text/javascript" src="{{ asset('admin/lib/js/jquery.matchHeight-min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/lib/js/jquery.dataTables.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/lib/js/dataTables.bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/lib/js/select2.full.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/lib/js/ace/ace.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/lib/js/ace/mode-html.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/lib/js/ace/theme-github.js') }}"></script>
        <!-- Javascript -->
        <script type="text/javascript" src="{{ asset('admin/js/app.js') }}"></script>
    </body>

</html>