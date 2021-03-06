<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href={{ asset('template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}>
    <link rel="stylesheet" href={{ asset('template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}>
    <link rel="stylesheet" href={{ asset('template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}>
    <link rel="stylesheet" href={{ asset('template/dist/css/adminlte.min.css') }}>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Main Header -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user-menu">
                    <a href="{{ route('logout') }}" class="nav-link dropdown-toggle text-danger"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="d-none d-md-inline">
                            <i class="nav-icon fas fa-power-off mr-2"></i>Sign Out
                        </span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>

                </li>
            </ul>
        </nav>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header -->
            <div class="container">
                @yield('content-header')
            </div>

            <section class="content">
                @yield('content')
            </section>
        </div>


    </div>

    <script src={{ asset('template/plugins/jquery/jquery.min.js') }}></script>
    <script src={{ asset('template/plugins/jquery-ui/jquery-ui.min.js') }}></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <script src={{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('template/plugins/datatables/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}></script>
    <script src={{ asset('template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}></script>
    <script src={{ asset('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}></script>
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    <script>
        $(document).ready(function() {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>
