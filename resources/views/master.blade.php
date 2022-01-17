<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Analytics Dashboard</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">

       @include('layouts.partials.dashboard.header')
       @include('layouts.partials.dashboard.settings_ui')

        <div class="app-main">

            @include('layouts.partials.dashboard.menu')

            <div class="app-main__outer">

                @include('layouts.partials.dashboard.body')

                @yield('content')

                @include('layouts.partials.dashboard.footer')
                
            </div>
        </div>
    </div>

    <div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="{{ asset('storage/DASH/assets/scripts/main.d810cf0ae7f39f28f336.js') }} "></script></body>

</html>
