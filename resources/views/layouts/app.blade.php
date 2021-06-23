<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="author" content="Huriel Lopes" />
    <title>Desafio Fiocruz @yield('subtitle')</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/sweetalert.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/all.min.css') }}" />
    @yield('css')
</head>
<body>
    @include('includes.menu')
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('/assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('/assets/js/date_fns.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/assets/js/additional-methods.min.js') }}"></script>
    <script src="{{ asset('/assets/js/messages_pt_BR.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.blockUI.min.js') }}"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/axios.min.js') }}"></script>
    <script src="{{ asset('/assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('/assets/js/functions.js') }}?v={{ time() }}"></script>
    <script src="{{ asset('/assets/js/all.min.js') }}"></script>
    @yield('js')
</body>
</html>
