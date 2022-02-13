<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <meta name="csrf-token" value="{{ csrf_token() }}" /> --}}

        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
        <script defer src="{{ mix('js/app.js') }}"></script>


        <title>@yield('page-title')</title>

        @if(app()->getLocale() == 'ar')
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
            <link rel="stylesheet" href="{{ asset('adminLTE-RTL/plugins/fontawesome-free/css/all.min.css') }}">
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <link rel="stylesheet" href="{{ asset('adminLTE-RTL/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
            <link rel="stylesheet" href="{{ asset('adminLTE-RTL/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('adminLTE-RTL/plugins/jqvmap/jqvmap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('adminLTE-RTL/dist/css/adminlte.min.css') }}">
            <link rel="stylesheet" href="{{ asset('adminLTE-RTL/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
            <link rel="stylesheet" href="{{ asset('adminLTE-RTL/plugins/daterangepicker/daterangepicker.css') }}">
            <link rel="stylesheet" href="{{ asset('adminLTE-RTL/plugins/summernote/summernote-bs4.css') }}">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
            <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.4.1/css/bootstrap.min.css" integrity="sha384-yQ02IR5BzpO2LZ70lJP2g4opr8tX6KzCmaELFzmNqlwtvTgtDJHQvuc43zCRMf1T" crossorigin="anonymous" />
            <link rel="stylesheet" href="{{ asset('adminLTE-RTL/dist/css/custom.css') }}">
            <link rel="stylesheet" href="http://www.jqueryscript.net/css/jquerysctipttop.css" type="text/css">
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-table-expandable.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/style_admin_ar.css') }}">
        @else
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
            <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
            <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/jqvmap/jqvmap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
            <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
            <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">
            <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.css') }}">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/custom.css') }}">
            <link rel="stylesheet" href="http://www.jqueryscript.net/css/jquerysctipttop.css" type="text/css">
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-table-expandable.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/style_admin_en.css') }}">
        @endif
        

    </head>
    <body>

        {{-- Page content --}}
        <div id="app">
            <router-view></router-view>
        </div>

        @if(app()->getLocale() == 'ar')
            <script src="{{ asset('adminLTE-RTL/plugins/jquery/jquery.min.js') }}"></script>
            <script src="{{ asset('adminLTE-RTL/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
            <script>
                $.widget.bridge('uibutton', $.ui.button)
            </script>
            <script src="https://cdn.rtlcss.com/bootstrap/v4.4.1/js/bootstrap.min.js" integrity="sha384-8RqFNshIrK8FARYG0cBLv7D4Y2hXNUPHVWohv3STbDMZh6BU4LNoAJUA3mjCH6Zx" crossorigin="anonymous"></script>
            <script src="{{ asset('adminLTE-RTL/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('adminLTE-RTL/plugins/chart.js/Chart.min.js') }}"></script>
            <script src="{{ asset('adminLTE-RTL/plugins/sparklines/sparkline.js') }}"></script>
            {{-- <script src="{{ asset('adminLTE-RTL/plugins/jqvmap/jquery.vmap.min.js') }}"></script> --}}
            {{-- <script src="{{ asset('adminLTE-RTL/plugins/jqvmap/maps/jquery.vmap.world.js') }}"></script> --}}
            <script src="{{ asset('adminLTE-RTL/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
            <script src="{{ asset('adminLTE-RTL/plugins/moment/moment.min.js') }}"></script>
            <script src="{{ asset('adminLTE-RTL/plugins/daterangepicker/daterangepicker.js') }}"></script>
            <script src="{{ asset('adminLTE-RTL/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
            <script src="{{ asset('adminLTE-RTL/plugins/summernote/summernote-bs4.min.js') }}"></script>
            <script src="{{ asset('adminLTE-RTL/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
            <script src="{{ asset('adminLTE-RTL/dist/js/adminlte.js') }}"></script>
            <script src="{{ asset('adminLTE-RTL/dist/js/pages/dashboard.js') }}"></script>
            {{-- <script src="{{ asset('adminLTE-RTL/dist/js/demo.js') }}"></script> --}}
        @else
            <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
            <script src="{{ asset('AdminLTE/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
            <script>
                $.widget.bridge('uibutton', $.ui.button)
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>
            <script src="{{ asset('AdminLTE/plugins/sparklines/sparkline.js') }}"></script>
            {{-- <script src="{{ asset('AdminLTE/plugins/jqvmap/jquery.vmap.min.js') }}"></script> --}}
            {{-- <script src="{{ asset('AdminLTE/plugins/jqvmap/maps/jquery.vmap.world.js') }}"></script> --}}
            <script src="{{ asset('AdminLTE/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
            <script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
            <script src="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
            <script src="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
            <script src="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>
            <script src="{{ asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
            <script src="{{ asset('AdminLTE/dist/js/adminlte.js') }}"></script>
            <script src="{{ asset('AdminLTE/dist/js/pages/dashboard.js') }}"></script>
        @endif

        <!-- Bootstrap 4 -->
        {{-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> --}}


        {{-- Include app.js --}}
        {{-- <script src="{{ asset('../resources/js/app.js') }}"></script> --}}



    </body>
</html>
