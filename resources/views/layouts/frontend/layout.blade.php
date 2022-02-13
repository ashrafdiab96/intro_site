<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Ashraf Diab">
    <meta name="developer" content="Ashraf Diab">
    <meta name="description" content="intro website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}" />
    {{-- <script defer src="{{ mix('js/app.js') }}" type="text/javascript"></script> --}}

    <title>@yield('page-title')</title>

    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/general/icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/general/icon.png') }}">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ favicon(asset('assets/images/general/icon.png')) }}"> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css" />
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.4.1/css/bootstrap.min.css" integrity="sha384-yQ02IR5BzpO2LZ70lJP2g4opr8tX6KzCmaELFzmNqlwtvTgtDJHQvuc43zCRMf1T" crossorigin="anonymous" />
        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="{{ asset('assets/css/style_ar.css') }}">
    @else
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/css/style_en.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <div id="app">
        {{-- include the navbar --}}
        @include('layouts.frontend.header')

        {{-- put the content --}}
        <router-view></router-view>

        {{-- include the footer --}}
        {{-- @include('layouts.frontend.footer') --}}
    </div>

    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

    {{-- imclude bootstrap and jquery --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit-icons.min.js"></script>

    @if (app()->getLocale() == 'ar')
        <script src="https://cdn.rtlcss.com/bootstrap/v4.4.1/js/bootstrap.min.js" integrity="sha384-8RqFNshIrK8FARYG0cBLv7D4Y2hXNUPHVWohv3STbDMZh6BU4LNoAJUA3mjCH6Zx" crossorigin="anonymous"></script>
    @else
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    @endif

</body>
</html>
