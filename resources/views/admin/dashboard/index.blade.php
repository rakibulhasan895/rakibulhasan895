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
    <!-- Fonts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h2> {{ __('পদ্মা পণ্য বিক্রয় ও বিপণন কেন্দ্র') }} </h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="navbar-nav">
                            <form class="form-inline my-2 my-lg-0" type="get" action="{{ route('search') }}">
                                <input class="form-control typeahead" type="search" name="search" placeholder="Search..." aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item" href="{{ url('changepassword') }}">
                                    {{ __('Change Password') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="card card-user">
                        <div class="card-body">
                            <section>
                                <div class="col-md-3 pl-1 heading">
                                    <label>
                                        <a class="nav-link" href="{{ url('customers/create')}}">
                                            <h3>{{ __('নিবন্ধন') }}</h3>
                                        </a>
                                    </label>
                                </div>
                                <div class="col-md-3 pl-1 heading">
                                    <label>
                                        <a class="nav-link" href="{{ url('customers')}}">
                                            <h3>{{ __(' কাস্টমার তালিকা') }}</h3>
                                        </a>
                                    </label>
                                </div>
                                <div class="line">
                                    <div class="line">
                                        <div class="margin">
                                            <div class="dropdown nav-link">
                                                <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                                    {{ __('মাসিক') }}
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('monthly')}}">{{ __('মাসিক') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('monthly/emp1')}}">{{ __('রাজনু') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('monthly/emp2')}}">{{ __('হেনা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('monthly/emp3')}}">{{ __('শামীমা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('monthly/emp4')}}">{{ __('নিলা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('monthlypaid')}}">{{ __('পরিশোধ ') }}</a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown nav-link">

                                                <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                                    {{ __('শনিবার') }}
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('satarday')}}">{{ __('শনিবার') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('satarday/emp1')}}">{{ __('রাজনু') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('satarday/emp2')}}">{{ __('হেনা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('satarday/emp3')}}">{{ __('শামীমা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('satarday/emp4')}}">{{ __('নিলা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('satardaypaid')}}">{{ __('পরিশোধ ') }}</a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown nav-link">
                                                <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                                    {{ __('রবিবার') }}
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('sunday')}}">{{ __('রবিবার') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('sunday/emp1')}}">{{ __('রাজনু') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('sunday/emp2')}}">{{ __('হেনা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('sunday/emp3')}}">{{ __('শামীমা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('sunday/emp4')}}">{{ __('নিলা') }}</a></li>
                                         <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('sundaypaid')}}">{{ __('পরিশোধ ') }}</a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown nav-link">

                                                <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                                    {{ __('সোমবার') }}
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('monday')}}">{{ __('সোমবার') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('monday/emp1')}}">{{ __('রাজনু') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('monday/emp2')}}">{{ __('হেনা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('monday/emp3')}}">{{ __('শামীমা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('monday/emp4')}}">{{ __('নিলা') }}</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('mondaypaid')}}">{{ __('পরিশোধ ') }}</a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown nav-link">

                                                <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                                    {{ __('মঙ্গলবার') }}
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('tuesday')}}">{{ __('মঙ্গলবার') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('tuesday/emp1')}}">{{ __('রাজনু') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('tuesday/emp2')}}">{{ __('হেনা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('tuesday/emp3')}}">{{ __('শামীমা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('tuesday/emp4')}}">{{ __('নিলা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('tuesdaypaid')}}">{{ __('পরিশোধ ') }}</a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown nav-link">

                                                <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                                    {{ __('বুধবার') }}
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('wednesday')}}">{{ __('বুধবার') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('wednesday/emp1')}}">{{ __('রাজনু') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('wednesday/emp2')}}">{{ __('হেনা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('wednesday/emp3')}}">{{ __('শামীমা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('wednesday/emp4')}}">{{ __('নিলা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('wednesdaypaid')}}">{{ __('পরিশোধ ') }}</a></li>

                                                </ul>
                                            </div>
                                            <div class="dropdown nav-link">
                                                <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                                    {{ __('বৃহস্পতিবার') }}
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('thusday')}}">{{ __('বৃহস্পতিবার') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('thusday/emp1')}}">{{ __('রাজনু') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('thusday/emp2')}}">{{ __('হেনা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('thusday/emp3')}}">{{ __('শামীমা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('thusday/emp4')}}">{{ __('নিলা') }}</a></li>
                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('thusdaypaid')}}">{{ __('পরিশোধ ') }}</a></li>
                                                </ul>
                                            </div>    
                                            <div class="col-md-3 pl-1 heading">
                                                <label>
                                                    <a class="nav-link" href="{{ url('employees') }}">
                                                        <h3>{{ __('কর্মচারী') }}</h3>
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-3 pl-1 heading">
                                                <label>
                                                    <a class="nav-link" href="{{ url('monthlycalculation')}}">
                                                        <h3>{{ __('মাসিক আদায় ') }}</h3>
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-3 pl-1 heading">
                                                <label>
                                                    <a class="nav-link" href="{{ url('dailycalculation')}}">
                                                        <h3>{{ __(' দৈনিক আদায় ') }}</h3>
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-md-3 pl-1 heading">
                                                <label>
                                                    <a class="nav-link" href="{{ url('employeecast')}}">
                                                        <h3>{{ __(' কর্মচারীর আদায় ') }}</h3>
                                                    </a>
                                                </label>
                                            </div>
                            </section>
                        </div>
                    </div>
                </div>

                <main class="py-4">
                    @yield('content')
                </main>
            </div>
</body>
</html>
 