<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">


</head>
<body class="bg-gray-100 text-gray-900">
{{--h-screen antialiased leading-none--}}


    <div id="app">

        <img class="ml-12 pb-3 float-left object-left-top w-32 h-32" src="/image_files/e2e_logo_project-emsv1 (1).svg">

        <nav class="bg-blue-700 border-b-2 border-yellow-500 shadow mb-8 py-6">
            <div class="container mx-auto px-6 md:px-0">

                <div class="flex items-center pl-2">
                    <div class="mr-6 justify-start">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        Project EMS v.1
                        </a>
                    </div>

{{--                    <div class="flex-1 text-right">--}}
{{--                        @guest--}}
{{--                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            @if (Route::has('register'))--}}
{{--                                <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>--}}

{{--                            <a href="{{ route('logout') }}"--}}
{{--                               class="no-underline hover:underline text-gray-300 text-sm p-3"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>--}}
{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">--}}
{{--                                {{ csrf_field() }}--}}
{{--                            </form>--}}
{{--                        @endguest--}}
{{--                    </div>--}}
                </div>
            </div>
        </nav>

        @yield('content')
    </div>



    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
