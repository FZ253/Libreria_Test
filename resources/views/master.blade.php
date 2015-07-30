<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('foundation/css/foundation.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('DataTables/css/jquery.dataTables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}">
</head>
<body>
  
    @include('navbar')

    @yield('content')

    <script src="{{url('jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="{{url('DataTables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('foundation/js/vendor/modernizr.js')}}"></script>
    <script src="{{url('foundation/js/vendor/modernizr.js')}}"></script>
    <script src="{{url('foundation/js/foundation/foundation.js')}}"></script>|
    <script src="{{url('foundation/js/foundation/foundation.orbit.js')}}"></script>
    <script src="{{url('foundation/js/foundation/foundation.topbar.js')}}"></script>
    <script>
        $(document).foundation();
    </script>
    <script type="text/javascript" class="init">
        $(document).ready(function() {
            $('#table_id').DataTable();
        } );
    </script>
</body>
</html>