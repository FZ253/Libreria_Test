<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('foundation/css/foundation.css')}}" />
    <link rel="stylesheet" type="text/css" href="DataTables/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="DataTables/js/jquery.js"></script>
    <script type="text/javascript" charset="utf8" src="/DataTables/js/jquery.dataTables.js"></script>
    <script src="foundation/js/vendor/modernizr.js"></script>
    <script src="foundation/js/vendor/modernizr.js"></script>

    <script type="text/javascript">
      $(document).ready( function () {
          $('#table_id').DataTable();

      } );
    </script>

</head>
<body>
  
    @include('navbar')

    @yield('content')


    <script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/foundation/foundation.js"></script>

    <script src="foundation/js/foundation/foundation.topbar.js"></script>
    <script>
        $(document).foundation();
    </script>
</body>
</html>