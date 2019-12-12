<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Laravue</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/css/sidebar.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="wrapper" id="app">
        <div class="bmd-layout-container bmd-drawer-f-l bmd-drawer-in">
            <header class="bmd-layout-header ">
                <div class="navbar navbar-light bg-faded top-header">
                    <button class="navbar-toggler btn btn-raised btn-link btn-vue text-white" type="button"
                        data-toggle="drawer" data-target="#dw-s1">
                        <i class="fas fa-align-left"></i> <span class="btn-label"> Alternar navegación </span>
                    </button>
                    <ul class="nav navbar-nav">
                        <li class="nav-item" style="font-size: 10px">Developed with ♥ by PailletJP</li>
                    </ul>
                </div>
            </header>
            <div id="dw-s1" class="bmd-layout-drawer bg-faded" aria-expanded="true">
                <header>
                    <a class="navbar-brand">Laravue</a>
                </header>
                <ul class="list-group">
                    <a class="{{ (request()->is('components*')) ? 'list-group-item active' : 'list-group-item' }}"
                        href="{{route('components')}}"> Componentes </a>

                    <a 
                    class="{{ (request()->is('dataBinding*')) ? 'list-group-item active' : 'list-group-item' }}"
                    href="{{route('dataBinding')}}"> Renderizado Declarativo </a>
                    <a 
                    class="{{ (request()->is('conditional*')) ? 'list-group-item active' : 'list-group-item' }}"
                    href="{{route('conditional')}}"> Renderizado Condicional </a>
                    <a 
                    class="{{ (request()->is('loops*')) ? 'list-group-item active' : 'list-group-item' }}"
                    href="{{route('loops')}}"> Bucles </a>
                    <a class="{{ (request()->is('events*')) ? 'list-group-item active' : 'list-group-item' }}" href="{{route('loops')}}">
                        Eventos </a>
                        <a class="{{ (request()->is('methods*')) ? 'list-group-item active' : 'list-group-item' }}" href="{{route('loops')}}">
                                Métodos </a>
                </ul>
            </div>
            <main class="bmd-layout-content">
                <div id="content" class="container-fluid">

                    <!-- Page Content  -->
                    @yield('content')
                </div>
            </main>
        </div>


    </div>

    @include('layouts.scripts')


</body>

</html>