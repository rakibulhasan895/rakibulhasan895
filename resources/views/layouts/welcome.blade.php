<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ('পদ্মা পণ্য বিক্রয় ও বিপণন কেন্দ্র') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="{{ asset('pdf.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <div class="container">
            <div class="col-md-7 pl-1 heading">
                <label>
                    <h6>{{ __('বিসমিল্লাহির রাহমানির রাহীম') }}</h6>
                </label>
            </div>
            <div class="col-md-9 pl-1 heading">
                 <a class="navbar-brand" href="{{ url('/') }}">
                     <h2> {{ __('পদ্মা পণ্য বিক্রয় ও বিপণন কেন্দ্র,দাপুনিয়া বাজার,পাবনা।') }} </h2>
                </a>
            </div>
        </div>
    </div>

    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>
</html>

