<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Management Proyek</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Management Proyek
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('proyek.index') }}">Proyek</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var tableKonfir = $('.data-tablek').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('proyek.index') }}",
                    data: {
                        type: 'konfir'
                    }
                },
                columns: [
                    {data: 'topik', name: 'topik'},
                    {data: 'anggota', name: 'anggota'},
                    {data: 'institusi', name: 'institusi'},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'action', name: 'action', orderable: false, searchable:false}
                ]
            });

            var tableAcc = $('.data-tablec').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('proyek.index') }}",
                    data: {
                        type: 'approve'
                    }
                },
                columns: [
                    {data: 'topik', name: 'topik'},
                    {data: 'anggota', name: 'anggota'},
                    {data: 'institusi', name: 'institusi'},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'action', name: 'action', orderable: false, searchable:false}
                ]
            });
    
            var tableReject = $('.data-tabler').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('proyek.index') }}",
                    data: {
                        type: 'reject'
                    }
                },
                columns: [
                    {data: 'topik', name: 'topik'},
                    {data: 'anggota', name: 'anggota'},
                    {data: 'institusi', name: 'institusi'},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'ket', name: 'ket'},
                    {data: 'action', name: 'action', orderable: false, searchable:false},
                ]
            });
        });
    </script>
</body>
</html>
