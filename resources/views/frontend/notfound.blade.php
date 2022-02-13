
{{-- <notfound-component></notfound-component> --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Ashraf Diab">
    <meta name="developer" content="Ashraf Diab">
    <meta name="description" content="intro website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <script defer src="{{ mix('js/app.js') }}"></script>
    <title>@lang('app.notfound')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    @if (Session()->get('front-locale') == 'ar')
        <link rel="stylesheet" href="{{ asset('assets/css/error_style_ar.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/error_style_en.css') }}">
    @endif

</head>

<body>
    <main>
        <div class="container container-404">
            <div class="row row-404">
                <div class="col-md-6 section-404">
                    <i class="fas fa-exclamation-triangle fa-6x large transparent text-danger"></i>
                    <h1 class=""><span class="text-danger">404</span></h1>
                </div>
                <div class="col-md-6 oops-section">
                    <h1 class="heading-bullet">
                        {{-- @lang('app.oops') --}}
                        @if (Session()->get('front-locale') == 'ar')
                            !خطأ
                        @else
                            Oops!
                        @endif
                    </h1>
                    <p>
                        {{-- @lang('app.page_notfound') --}}
                        @if (Session()->get('front-locale') == 'ar')
                            .الصفحة التي تبحث عنها غير موجودة أو تم تحميلها بشكل غير صحيح
                        @else
                            The page you are looking for does not exist, or was loaded incorrectly.
                        @endif
                    </p>
                    <a href="{{ url('/') }}">
                        {{-- @lang('app.back_home') --}}
                        @if (Session()->get('front-locale') == 'ar')
                            الرجوع للصفحة الرئيسية
                        @else
                            Back to homepage
                        @endif
                        <i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
